<?php
session_start();

$id = $_GET['id'];
$name = $_GET['name'];
$price = $_GET['price'];
$amount = $_GET['amount'];

if (isset($_POST['update'])) {
    if (check_fields()) {
        header('location: ../index.php');
    } else {
        if (validate_fields()) {
            header('location: ../index.php');
        } else {
            $id = $_POST['id'];
            $name = trim($_POST['name']);
            $price = (int)$_POST['price'];
            $amount = (int)$_POST['amount'];
            $created = date('Y-m-d H:i:s');
            $database->update('products', ['name' => $name, 'price' => $price, 'amount' => $amount, 'created' => $created], ['id' => $id]);

            $_SESSION['message'] = "Product \"$name\" has been updated!";
            $_SESSION['msg_type'] = "warning";
            header("location: /");
        }
    }
}
?>
<div class="jumbotron text-center">
    <h1>Update <?php echo $name ?></h1>
</div>
<form class="row justify-content-center" action="?page=products&action=index" method="post">
    <input class="btn btn-primary" type="submit" name="add" value="Back to products">
</form>
<br>
<div class="row justify-content-center">
    <div class="form-group">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form group">
                <label> Name:</label>
                <input class="form-control" type="text" value="<?php echo $name; ?>" name="name"
                       title="Latin alphabet only">
            </div>
            </br>
            <div class="form group">
                <label> Price:</label>
                <input class="form-control" type="number" name="price" title="in cents"
                       value="<?php echo $price; ?>">
            </div>
            </br>
            <div class="form group">
                <label> Amount:</label>
                <input class="form-control" type="number" name="amount" title="in units"
                       value="<?php echo $amount; ?>">
            </div>
            </br>
            <div class="form group">
                <input class="btn btn-primary" id="button" type='submit' name='update' value='Update'>
            </div>
        </form>
    </div>
</div>

