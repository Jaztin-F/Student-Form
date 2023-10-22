<?php 

    require_once('../config.php');
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $firstname  = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname   = $_POST['lastname'];
        $school_id  = $_POST['school_id'];
        $age        = $_POST['age'];
        $course     = $_POST['course'];
        $year       = $_POST['year'];
        $section    = $_POST['section'];
        $gender     = $_POST['gender'];
        $username   = $_POST['username'];
        $password   = $_POST['password'];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        //insert user into database
        $query = "INSERT INTO students(firstname, middlename, lastname, school_id, age, course, year, section, gender, username, password)
                  VALUES('$firstname','$middlename','$lastname','$school_id','$age','$course','$year','$section',
                         '$gender','$username','$hashedPassword')";
                         
        $result = $conn->query($query);
    }else{
        header("refresh:1, url = ../public/registration.php");
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Registration Form</title>
        <link rel="stylesheet" href="../CSS/API.css">

    </head>

    <body>
       <div id="successModal" class="modal"><?php 
         if($result){
            http_response_code(201);
            header("refresh:2, url = ../public/index.php");
            echo "Successfully Added";

        }else{
            http_response_code(500);
            echo "Unable to Register";
            header("refresh:1, url = ../public/registration.php");  
        }
        ?></div> 

    <script>
        // Show the modal when the registration is successful
        <?php if (isset($successMessage)) : ?>
            document.getElementById('successModal').style.display = 'block';
        <?php endif; ?>
    </script>
    </body>
    </html>