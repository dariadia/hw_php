<?php
include './../config/const.php';
include './../config/init.php';

session_start();
$connect = mysqli_connect("localhost", "root", "", "products");
$query = "SELECT FROM products.saved";
$result = mysqli_query($connect, $query);

if (isset($_GET["action"])) {
	if ($_GET["action"] == "delete") {
		foreach ($_SESSION["shopping_cart"] as $keys => $values) {
			if ($values["item_id"] == $_GET["id_good"]) {
				unset($_SESSION["shopping_cart"][$keys]); // удалит товар из корзины сессии
				$DELETE_query = sprintf("DELETE FROM products.saved 
				WHERE user =' " . $_SESSION["user_name"] . "' 
				and
				item_id = ' " . $_SESSION["shopping_cart"][$keys] . "' 
				"); // удалит товар из корзины юзера из базы данных 

				$delete_query = mysqli_query(myDB_connect(), $DELETE_query);
				// только теперь в mysql таблице остаются строчки с нулями вместо товара, в phpmyadmin запустила эту команду DELETE FROM `saved` WHERE `saved`.`item_quantity` = 0";
				// пыталась привязать команду сюда, но тогда таблица начала глючить

				echo '<script>alert("удалили")</script>';
				echo '<script>window.location="/templates/cart.php"</script>';
			}
		}
	}
}
?>

<h1> <a href="/index.php"> за покупками</a></h1>

<br />
<h3>Заказ</h3>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th width="40%">название</th>
			<th width="10%">кол-во</th>
			<th width="20%">цена</th>
			<th width="15%">итого</th>
			<th width="5%">#</th>
		</tr>
		<?php
		if (!empty($_SESSION["shopping_cart"])) {
			$total = 0;
			foreach ($_SESSION["shopping_cart"] as $keys => $values) {
				?>
				<tr>
					<td><?= $values["item_name"]; ?></td>
					<td><?= $values["item_quantity"]; ?></td>
					<td> <?= $values["item_price"]; ?> руб</td>
					<td> <?= number_format($values["item_quantity"] * $values["item_price"], 2);
							?>руб</td>
					<td><a href="/templates/cart.php?action=delete&id_good=<?= $values["item_id"]; ?>"><span class="text-danger">удалить</span></a></td>
				</tr>
				<?php
				$total = $total + ($values["item_quantity"] * $values["item_price"]);
			}
			?>
			<tr>
				<td colspan="3" align="right">итого</td>
				<td align="right"> <?= number_format($total, 2); ?> руб</td>
				<td></td>
			</tr>
		<?php
		}
		?>

	</table>
</div>