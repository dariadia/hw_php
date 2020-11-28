<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "products");

if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["id_good"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'            =>    $_GET["id_good"],
                'item_name'            =>    $_POST["hidden_name"],
                'item_price'        =>    $_POST["hidden_price"],
                'item_quantity'        =>    $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
            echo '<script>alert("Добавили!")</script>';
        } else {
            echo '<script>alert("Этот товар в корзине!")</script>';
        }
    } else {
        $item_array = array(
            'item_id'            =>    $_GET["id_good"],
            'item_name'            =>    $_POST["hidden_name"],
            'item_price'        =>    $_POST["hidden_price"],
            'item_quantity'        =>    $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
?>

<div class="container">
    <h1> <a href="/templates/cart.php"> в корзину</a></h1>
    <br />
    <h3> Выбирайте что купить</h3>
    <br />
    <?php
    $query = "SELECT * FROM products.goods";
    $connect = mysqli_connect("localhost", "root", "", "products");
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