<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08/11/2018
 * Time: 12:50 PM
 */


// define variables and set to empty values
$Err =  "";
$search= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["q"])) {
        echo $Err = "Name is required";
        exit();
    } else {
        $search = $_POST["q"];
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $search)) {
            echo $Err = "Only letters and white space allowed";
            exit();
        }else{
           $sql="SELECT * FROM `get_lib_book` where ISBN ='$search'";
           $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                
            }else{
              echo $search." not found";
            }
        }
    }
}
