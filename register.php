<?php
session_start();

require("server/server.php");

$connect = mysqli_connect($server, $admin, $password) or die("unable to connect");
mysqli_select_db($connect, $database);

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $mobilenumber = $_POST['mobilenumber'];
    $emailid = $_POST['emailid'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    if ($password1 == $password2) {
        $query = "select * from register where username = '$username'";
        $query_run = mysqli_query($connect, $query);
        if (mysqli_num_rows($query_run) > 0) {
            echo ("<script> alert('username already exists'); </script>");
        } else {
            $query = "insert into register values('$username','$mobilenumber','$emailid','$password1')";
            $query_run = mysqli_query($connect, $query);
            if ($query_run) {
                echo ("<script> alert('You have successfully registered'); </script>");
            } else {
                echo ("<script> alert('Registration failed'); </script>");
            }
        }
    } else {
        echo ("<script> alert('Password does not match'); </script>");
    }
}





?>
<!doctype html>
<html lang="en">

<head>
    <title>register page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- internal style -->
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }

        #register {
            background-color: #f1f2f6;
            width: 500px;
            margin: 0px auto;
            padding: 20px;
        }

        .register {
            position: relative;
        }

        .register i {
            position: absolute;
            top: 38px;
            right: 20px;
            font-size: 25px;
            visibility: hidden;
        }
    </style>

</head>

<body>
   
    <main id="register">
        <div class="container">
            <div class="row mb-4 text-center text-capitalize bg-primary text-white">
                <div class="col-12">
                    <h1>registration</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12" id="symbol">
                    <form action="register.php" method="post" onsubmit="return validate()">
                        <div class="mb-3 register">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Your username" aria-describedby="msg1">
                            <i class="fas fa-check-circle" id="correct1"></i>
                            <i class="fas fa-times-circle" id="wrong1"></i>
                            <small id="msg1"></small>
                        </div>
                        <div class="mb-3 register">
                            <label for="mobilenumber" class="form-label">Mobile Number</label>
                            <input type="number" name="mobilenumber" id="mobilenumber" class="form-control" placeholder="Your mobile number" aria-describedby="msg2">
                            <i class="fas fa-check-circle" id="correct2"></i>
                            <i class="fas fa-times-circle" id="wrong2"></i>
                            <small id="msg2"></small>
                        </div>
                        <div class="mb-3 register">
                            <label for="emailid" class="form-label">Email-Id</label>
                            <input type="email" name="emailid" id="emailid" class="form-control" placeholder="you123@example.com" aria-describedby="msg3">
                            <i class="fas fa-check-circle" id="correct3"></i>
                            <i class="fas fa-times-circle" id="wrong3"></i>
                            <small id="msg3"></small>
                        </div>
                        <div class="mb-3 register">
                            <label for="password1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password1" id="password1" placeholder="Your password" aria-describedby="msg4">
                            <i class="fas fa-check-circle" id="correct4"></i>
                            <i class="fas fa-times-circle" id="wrong4"></i>
                            <small id="msg4"></small>
                        </div>
                        <div class="mb-3 register">
                            <label for="password2" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm your password" aria-describedby="msg5">
                            <i class="fas fa-check-circle" id="correct5"></i>
                            <i class="fas fa-times-circle" id="wrong5"></i>
                            <small id="msg5"></small>
                        </div>
                        <div class="text-center my-5">
                            <button type="submit" class="btn btn-info text-white btn-lg" name="submit" id="submit">Register</button> <br>
                            <small class="mt-1">Already have an account ?</small>
                            <a href="index.php" class="mt-1">Login</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        function validate() {
            let userName = document.getElementById("username").value;
            let mobileNumber = document.getElementById("mobilenumber").value;
            let emailId = document.getElementById("emailid").value;
            let password1 = document.getElementById("password1").value;
            let password2 = document.getElementById("password2").value;
            let checkUserName = /^[a-z]{1}[a-z0-9]{2,15}$/;
            let checkMobileNumber = /^[7-9]{1}[0-9]{9}$/;
            let checkEmailId = /^([a-zA-Z0-9]+)@([a-zA-Z0-9]+)\.([a-z]{2,8})$/;
            let checkPassword1 = /^(?=.*[\!@#$%^&*]+)(?=.*[0-9]+)[a-zA-Z0-9\!@#$%^&*]{5,15}$/;

            // username
            if (userName.trim() == null || userName.trim() == "") {
                document.getElementById("msg1").innerHTML = "*** Enter ur name ***";
                document.getElementById("msg1").style.color = "red";
                document.getElementById("username").style.border = "2px solid red";
                document.getElementById("wrong1").style.visibility = "visible";
                document.getElementById("wrong1").style.color = "red";
                document.getElementById("correct1").style.visibility = "hidden";
                return false;
            }
            if (checkUserName.test(userName)) {
                document.getElementById("msg1").innerHTML = "*** Valid ***";
                document.getElementById("msg1").style.color = "green";
                document.getElementById("username").style.border = "2px solid green";
                document.getElementById("correct1").style.visibility = "visible";
                document.getElementById("correct1").style.color = "green";
                document.getElementById("wrong1").style.visibility = "hidden";
            } else {
                document.getElementById("msg1").innerHTML = "*** Your username can include a-z0-9, should contain atleast one letter a-z at first and then minimum 3 & maximum 15 character's are allowed ***";
                document.getElementById("msg1").style.color = "red";
                document.getElementById("username").style.border = "2px solid red";
                document.getElementById("wrong1").style.visibility = "visible";
                document.getElementById("wrong1").style.color = "red";
                document.getElementById("correct1").style.visibility = "hidden";
                return false;
            }

            // mobileNumber
            if (mobileNumber.trim() == null || mobileNumber.trim() == "") {
                document.getElementById("msg2").innerHTML = "*** Enter ur number ***";
                document.getElementById("msg2").style.color = "red";
                document.getElementById("mobilenumber").style.border = "2px solid red";
                document.getElementById("wrong2").style.visibility = "visible";
                document.getElementById("wrong2").style.color = "red";
                document.getElementById("correct2").style.visibility = "hidden";
                return false;
            }
            if (checkMobileNumber.test(mobileNumber)) {
                document.getElementById("msg2").innerHTML = "*** Valid ***";
                document.getElementById("msg2").style.color = "green";
                document.getElementById("mobilenumber").style.border = "2px solid green";
                document.getElementById("correct2").style.visibility = "visible";
                document.getElementById("correct2").style.color = "green";
                document.getElementById("wrong2").style.visibility = "hidden";
            } else {
                document.getElementById("msg2").innerHTML = "*** Enter a valid 10 digit mobile number ***";
                document.getElementById("msg2").style.color = "red";
                document.getElementById("mobilenumber").style.border = "2px solid red";
                document.getElementById("wrong2").style.visibility = "visible";
                document.getElementById("wrong2").style.color = "red";
                document.getElementById("correct2").style.visibility = "hidden";
                return false;
            }

            // emailid
            if (emailId.trim() == null || emailId.trim() == "") {
                document.getElementById("msg3").innerHTML = "*** Enter ur email-id ***";
                document.getElementById("msg3").style.color = "red";
                document.getElementById("emailid").style.border = "2px solid red";
                document.getElementById("wrong3").style.visibility = "visible";
                document.getElementById("wrong3").style.color = "red";
                document.getElementById("correct3").style.visibility = "hidden";
                return false;
            }
            if (checkEmailId.test(emailId)) {
                document.getElementById("msg3").innerHTML = "*** Valid ***";
                document.getElementById("msg3").style.color = "green";
                document.getElementById("emailid").style.border = "2px solid green";
                document.getElementById("correct3").style.visibility = "visible";
                document.getElementById("correct3").style.color = "green";
                document.getElementById("wrong3").style.visibility = "hidden";
            } else {
                document.getElementById("msg3").innerHTML = "*** Enter a valid email-id ***";
                document.getElementById("msg3").style.color = "red";
                document.getElementById("emailid").style.border = "2px solid red";
                document.getElementById("wrong3").style.visibility = "visible";
                document.getElementById("wrong3").style.color = "red";
                document.getElementById("correct3").style.visibility = "hidden";
                return false;
            }

            // password1
            if (password1.trim() == null || password1.trim() == "") {
                document.getElementById("msg4").innerHTML = "*** Enter ur password ***";
                document.getElementById("msg4").style.color = "red";
                document.getElementById("password1").style.border = "2px solid red";
                document.getElementById("wrong4").style.visibility = "visible";
                document.getElementById("wrong4").style.color = "red";
                document.getElementById("correct4").style.visibility = "hidden";
                return false;
            }
            if (checkPassword1.test(password1)) {
                document.getElementById("msg4").innerHTML = "*** Valid ***";
                document.getElementById("msg4").style.color = "green";
                document.getElementById("password1").style.border = "2px solid green";
                document.getElementById("correct4").style.visibility = "visible";
                document.getElementById("correct4").style.color = "green";
                document.getElementById("wrong4").style.visibility = "hidden";
            } else {
                document.getElementById("msg4").innerHTML = "*** Your password can include a-zA-Z0-9!@#$%^&*, should contain atleast one number 0-9, one symbol !@#$%^&* and then minimum 5 & maximum 15 character's are allowed ***";
                document.getElementById("msg4").style.color = "red";
                document.getElementById("password1").style.border = "2px solid red";
                document.getElementById("wrong4").style.visibility = "visible";
                document.getElementById("wrong4").style.color = "red";
                document.getElementById("correct4").style.visibility = "hidden";
                return false;
            }

            // password2
            if (password2.trim() == null || password2.trim() == "") {
                document.getElementById("msg5").innerHTML = "*** Re-enter ur password ***";
                document.getElementById("msg5").style.color = "red";
                document.getElementById("password2").style.border = "2px solid red";
                document.getElementById("wrong5").style.visibility = "visible";
                document.getElementById("wrong5").style.color = "red";
                document.getElementById("correct5").style.visibility = "hidden";
                return false;
            }
            if (password1 != password2) {
                document.getElementById("msg5").innerHTML = "*** Password does not match ***";
                document.getElementById("msg5").style.color = "red";
                document.getElementById("password2").style.border = "2px solid red";
                document.getElementById("wrong5").style.visibility = "visible";
                document.getElementById("wrong5").style.color = "red";
                document.getElementById("correct5").style.visibility = "hidden";
                return false;
            } else {
                document.getElementById("msg5").innerHTML = "*** Password matched ***";
                document.getElementById("msg5").style.color = "green";
                document.getElementById("password2").style.border = "2px solid green";
                document.getElementById("correct5").style.visibility = "visible";
                document.getElementById("correct5").style.color = "green";
                document.getElementById("wrong5").style.visibility = "hidden";
            }
        }
    </script>




</body>

</html>