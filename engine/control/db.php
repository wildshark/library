<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08/11/2018
 * Time: 1:30 PM
 */

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD,DB_NAME);
if($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{
    session_start();
}