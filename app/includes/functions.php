<?php

function check_fields()
{
    if (empty($_POST['name']) || empty($_POST['price']) || empty($_POST['amount'])) {
        return true;
    }
}

function validate_fields()
{
    if (!preg_match("/^[a-zA-Z\s]+$/", trim($_POST['name']))) {
        return true;
    }
}

