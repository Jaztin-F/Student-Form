<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dataform";


$conn = new mysqli($servername, $username, $password, $dbname)
or die("Could not connect". mysqli_error($conn));
?>