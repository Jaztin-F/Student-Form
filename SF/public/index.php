<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Form</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>

<body>
    <section>
        <div class="signin">
            <div class="content">
    <h2>Sign In</h2>
    <form action="../API/login.php" method="post">
        <div class="inputBox"><input type="text" name = "username" required><i>Username</i></div>
        <div class="inputBox"><input type="password" name = "password" required><i>password</i></div>
        <div class="links"><a href="registration.php">Create New Account</a></div>
        <div class="inputBox"><input type="submit" value="Login"></div>
    </form>
            </div>
        </div>          
    </section>
</body>
</html>