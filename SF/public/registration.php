<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="../CSS/register.css">
</head>
<body>
    <section>
       <div class="signup">
        <div class="content">
            <h2>Sign Up</h2>
            <form action="../API/register.php" method="post">

            <div class="Studentname">
            <div class="inputBox"> <input type="text" name="firstname" required><i>First Name</i></div>
            <div class="inputBox"> <input type="text" name="middlename" required><i>Middle Name</i></div>
            <div class="inputBox"> <input type="text" name="lastname" required><i>Last Name</i></div>
            </div>

            <div class="inputBox"> <input type="text" name="school_id" required><i>School ID</i></div>
            
       <div class="StudentInfo">
       <div class="inputBox"> <input type="text" name="age" required><i>Age</i></div>
       <div class="inputBox"> <input type="text" name="course" required><i>Course</i></div>

        </div>  
        <div class="Selection">
            <select name="year" required>
                <option selected = "true" disabled = "disabled">Select your Year</option>
                <option value ="1st">1st</option>
                <option value ="2nd">2nd</option>
                <option value ="3rd">3rd</option>
                <option value ="4th">4th</option>
            </select>

            <select name="section"required>
                <option selected ="true"disabled ="disabled">Select Section</option>
                <option value="A">Block A</option>
                <option value="B">Block B</option>
                <option value="C">Block C</option>
            </select>

            <select name="gender"required>
                <option selected ="true"disabled ="disabled">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select></div>

            <div class="account">
        <div class="inputBox"><input type ="text" name ="username"required><i>username</i></div>
        <div class="inputBox"><input type ="password" name ="password"required><i>password</i></div>
            </div>

            <div class="link"><a href="index.php">Already have an account?</a></div>
            <div class="inputBox"><input type="submit" value="Register"></div>

</form>
</div> </div>
    </section>
    
</body>
</html>