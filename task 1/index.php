<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "products");

if (isset($_POST["add_to_cart"])) {
	if (isset($_SESSION["shopping_cart"])) {
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if (!in_array($_GET["id_good"], $item_array_id)) {
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id_good"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		} else {
			echo '<script>alert("Этот товар в корзине!")</script>';
		}
	} else {
		$item_array = array(
			'item_id'			=>	$_GET["id_good"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if (isset($_GET["action"])) {
	if ($_GET["action"] == "delete") {
		foreach ($_SESSION["shopping_cart"] as $keys => $values) {
			if ($values["item_id"] == $_GET["id_good"]) {
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("удалили")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Shopping Cart</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<br />
	<div class="container">
		<br />
		<h3> магазин</h3>
		<br />
		<?php
		$query = "SELECT * FROM products.goods";
		$result = mysqli_query($connect, $query);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_array($result)) {
				?>
				<div class="col-md-4">
					<form method="post" action="index.php?action=add&id_good=<?= $row["id_good"]; ?>">
						<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
							<img src="images/<?= $row["src"]; ?>" class="img-responsive" /><br />

							<h4 class="text-info"><?= $row["good_name"]; ?></h4>

							<h4 class="text-danger"> <?= $row["good_price"]; ?> руб </h4>

							<h4 class="text-danger"> <?= $row["good_description"]; ?></h4>

							<input type="text" name="quantity" value="1" class="form-control" />

							<input type="hidden" name="hidden_name" value="<?= $row["good_name"]; ?>" />

							<input type="hidden" name="hidden_price" value="<?= $row["good_price"]; ?>" />

							<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

						</div>
					</form>
				</div>
			<?php
		}
	}
	?>
		<div style="clear:both"></div>
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
							<td><a href="index.php?action=delete&id_good=<?= $values["item_id"]; ?>"><span class="text-danger">удалить</span></a></td>
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
	</div>
	</div>
	<br />
</body>

</html>