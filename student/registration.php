<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <h2>User Registration Form</h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="FirstName" name="firstname" autoComplete="off" pattern=".*\S+.*" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastname" autoComplete="off" pattern=".*\S+.*" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Username" name="username" autoComplete="off" pattern=".*\S+.*" required=""/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" autoComplete="off" pattern=".*\S+.*" required=""/>
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="email" name="email" autoComplete="off" pattern=".*\S+.*" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="contact" name="contact" autoComplete="off" pattern="[0-9]+" title="Please enter valid data" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="SEM" name="sem" autoComplete="off" pattern="[0-9]+" title="Please enter valid data" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Enrollment No" name="enrollmentno" autoComplete="off" pattern="[0-9]+" title="Please enter valid data" required=""/>
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                    </div>

                </form>
            </section>
            <?php
            if(isset($_POST['submit1']))
            {
                $firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $username=$_POST['username'];
                $password=$_POST['password'];
                $email=$_POST['email'];
                $contact=$_POST['contact'];
                $sem=$_POST['sem'];
                $enrollmentno=$_POST['enrollmentno'];
                $checkUsername=mysqli_query($link,"select * from student_registration where username='$username'");
                if (mysqli_num_rows($checkUsername) > 0) {
        
        $row = mysqli_fetch_assoc($checkUsername);
        if($username==isset($row['username']))
        {
            ?>
                <div class="alert alert-danger col-lg-12 col-lg-push-0" align="center">
                    <strong style="color:white">username</strong> already exists.
                 
                    </div><?Php
        }
    }
        else{             
                $query="INSERT INTO `student_registration`( `firstname`, `lastname`, `username`, `password`, `email`, `contact`, `sem`, `enrollment` , `status`, `created_at`) VALUES ('$firstname','$lastname','$username','$password','$email','$contact','$sem','$enrollmentno','no',now())";
                mysqli_query($link,$query);
              }
            ?>
        <div class="alert alert-success col-lg-12 col-lg-push-0">
        Registration successfully, You will get email when your account is approved
        </div>

        <?php
    }
    ?>
    </div>

    


</body>
</html>
