<?php
function check_fields()
{
    if (empty($_POST['name']) || empty($_POST['price']) || empty($_POST['amount'])) {
        $_SESSION['message'] = "Please fill all fields!";
        $_SESSION['msg_type'] = "danger";
        return true;
    }
}

function validate_fields()
{
    if (!preg_match("/^[a-zA-Z\s]+$/", trim($_POST['name']))) {
        $_SESSION['message'] = "Name must contain only letters!";
        $_SESSION['msg_type'] = "danger";
        return true;
    }
}