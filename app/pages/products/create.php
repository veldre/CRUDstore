<?php
session_start();
if (isset($_POST['submit'])) {
    if (check_fields()) {
        header('location: /');
    } else {
        if (validate_fields()) {
            header('location: /');
        } else {

            $name = trim($_POST['name']);
            $price = (int)$_POST['price'];
            $amount = (int)$_POST['amount'];
            $created = date('Y-m-d H:i:s');

            $database->insert('products', ['name' => $name, 'price' => $price, 'amount' => $amount, 'created' => $created]);
//            $msg->info('Product \"$name\" has been added!','http://localhost:8000/?page=products&action=index');
            $_SESSION['message'] = "Product \"$name\" has been added!";
            $_SESSION['msg_type'] = "success";
            header("location: /");


        }
    }
}
?>

<div class="jumbotron text-center">
    <h1>Add new product</h1>
</div>
<form class="row justify-content-center" action="?page=products&action=index" method="post">
    <input class="btn btn-primary" type="submit" name="add" value="Back to products">
</form>
<br>
<div class="row justify-content-center">
    <div class="form-group">
        <form action="" method="post">
            <div class="form group">
                <label> Name:</label>
                <input class="form-control" type="text" name="name" title="Latin alphabet only">
            </div>
            </br>
            <div class="form group">
                <label> Price:</label>
                <input class="form-control" type="number" name="price" placeholder="in cents">
            </div>
            </br>
            <div class="form group">
                <label> Amount:</label>
                <input class="form-control" type="number" name="amount" placeholder="in units">
            </div>
            </br>
            <div class="row justify-content-center">
                <input class="btn btn-primary" id="button" type='submit' name='submit' value='Submit'>
            </div>
        </form>
    </div
</div>



