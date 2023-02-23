<?php

session_start();

require_once '../config.php';


try{
 
    $db = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);

    mysqli_set_charset($db, DB_CHARSET);

}catch(Exception $e){

    exit(mb_convert_encoding($e->getMessage(),'UTF-8','ISO-8859-1'));
}