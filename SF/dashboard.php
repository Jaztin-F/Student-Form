<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("refresh:1; url=../public/index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
*
{margin: 0;
}

          body{
        text-align: center;
        font-size: 2rem;
        color: white;
        background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
        display: flex;

    }
    a{ 
        color: white;
        text-decoration: none;
        font-size: 23px;
        margin-top: 5%;
    }
    .container{
        display: flex;
        flex-direction: column;
        margin-top: 10%;
        text-align: center;
        width: 100%;
    }

    </style>
</head>
<body>

<div class = "container">    
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>
    </h2>
    <p>This is your dashboard. You are logged in.</p>
    <a href="logout.php">Logout</a></div>
    
</body>
</html>
