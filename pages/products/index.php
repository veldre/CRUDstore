<?php
session_start();

$products = [];
foreach ($connect->query("SELECT * FROM products")->fetch_all() as $productInfo) {
    $products[(int)$productInfo[0]] = new Product(
        $productInfo[1],
        $productInfo[2],
        $productInfo[3],
        $productInfo[4],
        (int)$productInfo[0]
    );
}
?>

<div class="jumbotron text-center">
    <h1>Products</h1>
</div>

<?php
include "includes/messages.php";
?>
<form class="row justify-content-center" action="?page=products&action=create" method="post">
    <input class="btn btn-primary" type="submit" name="add" value="Add new product">
</form>
<br>
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-hover">

            <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Amount</th>
                <th scope="col">Created at</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product): ?>
                <tr onclick="window.location='?page=products&action=show&id=<?php echo $product->id(); ?>'">
                    <th scope="row"><?php echo $product->id(); ?></th>
                    <td><?php echo $product->name(); ?></td>
                    <td><?php echo $product->formattedPrice(); ?></td>
                    <td><?php echo $product->amount(); ?></td>
                    <td><?php echo $product->createdAt(); ?></td>
                    <td>
                        <a href="?page=products&action=update&id=<?php echo $product->id() ?>&name=<?php
                        echo $product->name() ?>&price=<?php echo $product->price(); ?>&amount=<?php echo $product->amount(); ?>"
                           class="btn btn-info">Edit</a>
                        <a href="?page=products&action=delete&id=<?php echo $product->id() ?>&name=<?php echo $product->name(); ?>"
                           class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
