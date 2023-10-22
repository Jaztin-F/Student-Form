
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Form</title>
    <link rel="stylesheet" href="../CSS/API.css">
</head>
<body>
<div id="successModal" class="errormodal"><?php

require_once("../config.php");
session_start();


//check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST"){

//check conection
if($conn-> connect_error){
    die("Connection Failed: " .$conn -> connect_error);
}

// Get user Input
$username = $_POST["username"];
$password = $_POST["password"];


$sql = "SELECT * FROM students WHERE username = '$username'";
$result = $conn ->query($sql);

if($result -> num_rows == 1){
$row = $result -> fetch_assoc();
if (password_verify($password, $row["password"])) {
$_SESSION["username"]= $username;
header("refresh: 0; url=../dashboard.php");

exit();
}else{
echo "Incorrect password";
header("refresh: 1; url= ../public/index.php");
}    
}else{
echo "No such Student Data";
header("refresh: 1; url= ../public/index.php");
}
$conn -> close();
}?>
</div>
</body>
</html>