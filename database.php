<?php

$connect = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$connect){
    die("Connection error");
}

