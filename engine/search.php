<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08/11/2018
 * Time: 12:50 PM
 */
include_once "control/global.php";
include_once "control/db.php";

function search($conn){
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
                $sql="SELECT * FROM `get_lib_book` WHERE
                        Book_Title LIKE '%$search%'OR
                        Author1 LIKE '%$search%' OR
                        Author2 LIKE '%$search%' OR
                        Author3 LIKE '%$search%' OR
                        Publication LIKE '%$search%' OR
                        ISBN LIKE '%$search%' OR
                        `Subject` LIKE '%$search%' OR
                        cata_no like '%$search%'";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "
                         <tr>
                            <td>{$row['Book_Title']}</td>
                            <td>{$row['Author1']}/{$row['Author2']}/{$row['Author3']}</td>
                            <td>{$row['Edition']}/{$row['ISBN']}</td>
                        </tr>
                    ";
                    }
                }else{
                    echo $search." not found";
                }
            }
        }
    }
}
?>
<html>
    <head>
        <table>Search book</table>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
        <h2>Filterable Table</h2>
        <p>Type something in the input field to search the table for first names, last names or emails:</p>
        <input id="myInput" type="text" placeholder="Search..">
        <br><br>

        <table>
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Surname</th>
            </tr>
            </thead>
            <tbody id="myTable">
            <?php search($conn);?>

            </tbody>
        </table>

        <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
    </body>
</html>





