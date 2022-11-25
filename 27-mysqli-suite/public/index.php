<?php

require_once '../config.php';

try {

    $connectDB = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    mysqli_set_charset($connectDB, DB_CHARSET);

}catch(Exception $e){

    die(utf8_encode($e -> getMessage()));

}