<?php

use App\Classes\Product;

$id = $_GET['id'] ?? 0;

$product = $database->select('products', ['id', 'name', 'price', 'amount', 'created'], ['id' => $id]);

foreach ($product as $productInfo) {
    $id = $productInfo['id'];
    $name = $productInfo['name'];
    $price = $productInfo['price'];
    $amount = $productInfo['amount'];
    $created = $productInfo['created'];
}

$neededProduct = new Product($name, $price, $amount, $created, $id);

?>

<div class="jumbotron text-center">
    <h1><?php echo $name ?></h1>
</div>
<form class="row justify-content-center" action="?page=products&action=index" method="post">
    <input class="btn btn-primary" type="submit" name="add" value="Back to products">
</form>
<br>
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Created at</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tr>
                <td><?php echo $neededProduct->id(); ?></td>
                <td><?php echo $neededProduct->name(); ?></td>
                <td><?php echo $neededProduct->formattedPrice(); ?></td>
                <td><?php echo $neededProduct->amount(); ?></td>
                <td><?php echo $neededProduct->createdAt(); ?></td>
                <td>
                    <a href="?page=products&action=update&id=<?php echo $neededProduct->id() ?>&name=<?php
                    echo $neededProduct->name() ?>&price=<?php echo $neededProduct->price(); ?>&amount=<?php echo $neededProduct->amount(); ?>"
                       class="btn btn-info">Edit</a>
                    <a href="?page=products&action=delete&id=<?php echo $neededProduct->id() ?>&name=<?php echo $neededProduct->name(); ?>"
                       class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </table>
    </div>
</div>

