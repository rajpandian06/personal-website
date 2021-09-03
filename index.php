<?php
session_start();

require("server/server.php");

$connect = mysqli_connect($server, $admin, $password) or die("unable to connect");
mysqli_select_db($connect, $database);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password1 = $_POST['password1'];

    $query = "select * from register where username ='$username' and password1 = '$password1'";
    $query_run = mysqli_query($connect, $query);
    if (mysqli_num_rows($query_run) > 0) {
        $_SESSION['username']=$username;
        header("location:homepage.php");
    } else {
        echo ("<script> alert('Invalid username and password'); </script>");
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- internal css style -->
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }

        #login {
            background-color: #f1f2f6;
            width: 500px;
            margin: 0px auto;
            padding: 20px;
        }

        .login {
            position: relative;
        }

        .login i {
            position: absolute;
            top: 38px;
            right: 20px;
            font-size: 25px;
            visibility: hidden;
        }
    </style>

</head>

<body>
    <main id="login">
        <div class="container">
            <div class="row mb-4 text-center text-capitalize bg-primary text-white">
                <div class="col-12">
                    <h1>Login</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="index.php" method="post" onsubmit="return validate()">
                        <div class="mb-3 login">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Your username" aria-describedby="msg1">
                            <i class="fas fa-check-circle" id="correct1"></i>
                            <i class="fas fa-times-circle" id="wrong1"></i>
                            <small id="msg1"></small>
                        </div>
                        <div class="mb-3 login">
                            <label for="password1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password1" id="password1" placeholder="Your password" aria-describedby="msg2">
                            <i class="fas fa-check-circle" id="correct2"></i>
                            <i class="fas fa-times-circle" id="wrong2"></i>
                            <small id="msg2"></small>
                        </div>
                        <div class="text-center my-5">
                            <button type="submit" class="btn btn-primary text-white btn-lg" name="login">Login</button><br>
                            <small class="mt-1">Doesn't have an account ?</small>
                            <a href="register.php" class="mt-1">Register</a>
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
            let password1 = document.getElementById("password1").value;
            let checkUserName = /^[a-z]{1}[a-z0-9]{2,15}$/;
            let checkPassword1 = /^(?=.*[0-9]+)(?=.*[\!@#$%^&*]+)[a-zA-Z0-9\!@#$%^&*]{5,15}$/;


            // userName
            if (userName.trim() == null || userName.trim() == "") {
                document.getElementById("msg1").innerHTML = "*** Enter ur registered username ***";
                document.getElementById("msg1").style.color = "red";
                document.getElementById("username").style.border = "2px solid red";
                document.getElementById("wrong1").style.visibility = "visible";
                document.getElementById("wrong1").style.color = "red";
                document.getElementById("correct1").style.visibility = "hidden";
                return false;
            } else {
                document.getElementById("msg1").innerHTML = "";
                document.getElementById("msg1").style.color = "";
                document.getElementById("username").style.border = "";
                document.getElementById("wrong1").style.visibility = "";
                document.getElementById("wrong1").style.color = "";
                document.getElementById("correct1").style.visibility = "";
            }
            if(checkUserName.test(userName)){
                document.getElementById("msg1").innerHTML = "";
                document.getElementById("msg1").style.color = "";
                document.getElementById("username").style.border = "";
                document.getElementById("wrong1").style.visibility = "";
                document.getElementById("wrong1").style.color = "";
                document.getElementById("correct1").style.visibility = "";
            }
            else{
                document.getElementById("msg1").innerHTML = "*** Enter ur registered username ***";
                document.getElementById("msg1").style.color = "red";
                document.getElementById("username").style.border = "2px solid red";
                document.getElementById("wrong1").style.visibility = "visible";
                document.getElementById("wrong1").style.color = "red";
                document.getElementById("correct1").style.visibility = "hidden";
                return false;
            }

            // password
            if (password1.trim() == null || password1.trim() == "") {
                document.getElementById("msg2").innerHTML = "*** Enter ur registered password ***";
                document.getElementById("msg2").style.color = "red";
                document.getElementById("password1").style.border = "2px solid red";
                document.getElementById("wrong2").style.visibility = "visible";
                document.getElementById("wrong2").style.color = "red";
                document.getElementById("correct2").style.visibility = "hidden";
                return false;
            } else {
                document.getElementById("msg2").innerHTML = "";
                document.getElementById("msg2").style.color = "";
                document.getElementById("password1").style.border = "";
                document.getElementById("wrong2").style.visibility = "";
                document.getElementById("wrong2").style.color = "";
                document.getElementById("correct2").style.visibility = "";
            }
            if(checkPassword1.test(password1)){
                document.getElementById("msg2").innerHTML = "";
                document.getElementById("msg2").style.color = "";
                document.getElementById("password1").style.border = "";
                document.getElementById("wrong2").style.visibility = "";
                document.getElementById("wrong2").style.color = "";
                document.getElementById("correct2").style.visibility = "";
            }
            else{
                document.getElementById("msg2").innerHTML = "*** Enter ur registered password ***";
                document.getElementById("msg2").style.color = "red";
                document.getElementById("password1").style.border = "2px solid red";
                document.getElementById("wrong2").style.visibility = "visible";
                document.getElementById("wrong2").style.color = "red";
                document.getElementById("correct2").style.visibility = "hidden";
                return false;
            }
            

        }
    </script>
</body>

</html>