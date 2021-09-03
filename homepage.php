<?php

require("server/server.php");

if (isset($_POST['submit'])) {
    $fullname = $_POST['name'];
    $mobilenumber = $_POST['number'];
    $emailid = $_POST['email'];
    $comment = $_POST['comment'];

    $query = "insert into user values('$fullname','$mobilenumber','$emailid','$comment')";
    $query_run = mysqli_query($connect, $query);
    if ($query_run) {
        echo "<script> alert('You have successfully submitted'); </script>";
    } else {
        echo "<script> alert('Error failed'); </script>";
    }
}

?>
<?php

session_start();
require("server/server.php");
if (isset($_POST['logout'])) {
    session_destroy();
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>murugaraj</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- external css style -->
    <link rel="stylesheet" href="style.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- start : top-header -->
    <header id="topheader">
        <div class="container">
            <div class="row">
                <div class="col-12 text-end p-1">
                    <a href="tel:9840285069" class="pe-2"><i class="fas fa-phone me-2"></i>(+91) 9840285069</a>
                    <a href="mailto:murugaraj0696@gmail.com" class="pe-2"><i class="fas fa-envelope me-2"></i>murugaraj0696@gmail.com</a>
                </div>
            </div>
        </div>
    </header>
    <!-- end : top-header -->

    <!-- start : bottom-header -->
    <header id="bottomheader" class="sticky-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light p-2">
                <a class="navbar-brand" href="#">Rajpandian06</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home"><i class="fas fa-home me-1 fs-5"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about"><i class="fas fa-user-tie me-1 fs-5"></i>About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skill"><i class="fas fa-graduation-cap me-1 fs-5"></i>Skill</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#project"><i class="fas fa-phone-laptop me-1 fs-5"></i>Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"><i class="fas fa-phone me-1 fs-5"></i>Contact</a>
                        </li>
                    </ul>
                    <form action="homepage.php" method="post">
                        <button type="submit" class="btn btn-light text-primary" name="logout">Log Out</button>
                    </form>
                </div>
            </nav>

        </div>
    </header>
    <!-- end : bottom-header -->

    <!-- start : home page -->
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4>hey i'm</h4>
                    <h1>Murugaraj</h1>
                    <h4>web Designer</h4>
                    <img src="images/homepage.png" alt="home page pic" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- end : home page -->

    <!-- start : about page -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>about me</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 text-center p-3">
                    <img src="images/murugaraj.jpg" alt="murugaraj pic" class="img-fluid img-thumbnail">
                </div>
                <div class="col-md-6 col-12">
                    <p>i'm murugaraj living in chennai, i did my schooling in PSM (virugambakkam) and i did my
                        BE (mechanical) graduation in SMIT (mangadu) and then finally i did my web designing course in
                        SLA
                        with certification. <a href="#" class="text-decoration-none">Read more...</a> </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end : about page -->

    <!-- start : skill page -->
    <section id="skill">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>my skills</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <h3>HTML5</h3>
                    <div class="progress">
                        <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                    <h3>CSS3</h3>
                    <div class="progress">
                        <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95%</div>
                    </div>
                    <h3>JAVASCRIPT</h3>
                    <div class="progress">
                        <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                    <h3>BOOTSTRAP</h3>
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </div>
                <div class="col-md-6 col-12">

                    <h3>JQUERY</h3>
                    <div class="progress">
                        <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                    <h3>PHP</h3>
                    <div class="progress">
                        <div class="progress-bar bg-secondary progress-bar-striped" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                    <h3>MY SQL</h3>
                    <div class="progress">
                        <div class="progress-bar bg-dark progress-bar-striped" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                    <h3>ANGULAR</h3>
                    <div class="progress">
                        <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">30%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end : skill page -->

    <!-- start : project page -->
    <section id="project">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>my projects</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="card text-white bg-info m-auto mb-3">
                        <div class="text-center img">
                            <img class="card-img-top" src="images/project1.jpg" alt="education pic">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-dark">Educational Website</h4>
                            <p class="card-text">Developed an Educational Website with Form validation and Database.</p>
                            <a href="http://murugaraj.biz.ht/" target="blank"><button type="button" class="btn btn-outline-light">Know More<i class="fas fa-arrow-right ms-1"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card text-white bg-danger m-auto mb-3">
                        <div class="text-center img">
                            <img class="card-img-top" src="images/project2.jpg" alt="ecommerce pic">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-dark">Ecommerce Website</h4>
                            <p class="card-text">Developed an Ecommerce Website with Form validation and Database.</p>
                            <a href="http://murugaraj06.biz.ht/" target="blank"><button type="button" class="btn btn-outline-light">Know More<i class="fas fa-arrow-right ms-1"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card text-white bg-success m-auto mb-3">
                        <div class="text-center img">
                            <img class="card-img-top" src="images/project3.jpg" alt="photography pic">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-dark">Personal Website</h4>
                            <p class="card-text">Developed an Personal Website with Form validation and Database.</p>
                            <a href="http://murugaraj0696.biz.ht/" target="blank"><button type="button" class="btn btn-outline-light">Know More<i class="fas fa-arrow-right ms-1"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end : project page -->

    <!-- start : contact page -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>contact me</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="homepage.php" method="post" onsubmit="return validate()">
                            <div class="mb-3 contact">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your full name" aria-describedby="msg1">
                                <i class="fas fa-check-circle" id="correct1"></i>
                                <i class="fas fa-times-circle" id="wrong1"></i>
                                <small id="msg1"></small>
                            </div>
                            <div class="mb-3 contact">
                                <label for="number" class="form-label">Mobile Number</label>
                                <input type="number" name="number" id="number" class="form-control" placeholder="Your mobile number" aria-describedby="msg2">
                                <i class="fas fa-check-circle" id="correct2"></i>
                                <i class="fas fa-times-circle" id="wrong2"></i>
                                <small id="msg2"></small>
                            </div>
                            <div class="mb-3 contact">
                                <label for="email" class="form-label">Email-Id</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="you123@example.com" aria-describedby="msg3">
                                <i class="fas fa-check-circle" id="correct3"></i>
                                <i class="fas fa-times-circle" id="wrong3"></i>
                                <small id="msg3"></small>
                            </div>
                            <div class="mb-3">
                                <label for="comment" class="form-label">Comment</label>
                                <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Leave your comments..."></textarea>
                            </div>
                            <div class="text-center mt-5 mb-2">
                                <button type="submit" class="btn btn-primary btn-lg" name="submit" id="submit">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end : contact page -->

    <!-- start : top footer -->
    <footer id="topfooter">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="http://facebook.com/rajpandian06" target="blank"><i class="fab fa-facebook"></i></a>
                    <a href="http://instagram.com/rajpandian_06" target="blank"><i class="fab fa-instagram"></i></a>
                    <a href="http://twitter.com/rajpandian06" target="blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end : top footer -->

    <!-- start : bottom footer -->
    <footer id="bottomfooter">
        <h4 class="text-white">Copyright © 2021 Murugaraj All Rights Reserved</h4>
    </footer>
    <!-- end : bottom footer -->





    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- internal script  -->
    <script>
        function validate() {

            let fullName = document.getElementById("name").value;
            let mobileNumber = document.getElementById("number").value;
            let emailId = document.getElementById("email").value;
            let comment = document.getElementById("comment").value;
            let checkFullName = /^[a-zA-Z]{3,25}$/;
            let checkMobileNumber = /^[7-9]{1}[0-9]{9}$/;
            let checkEmailId = /^([a-zA-Z0-9]+)@([a-zA-Z0-9]+)\.([a-z]{2,8})$/;

            // fullname
            if (fullName.trim() == null || fullName.trim() == "") {
                document.getElementById("msg1").innerHTML = "*** Enter ur name ***";
                document.getElementById("msg1").style.color = "red";
                document.getElementById("name").style.border = "2px solid red";
                document.getElementById("wrong1").style.visibility = "visible";
                document.getElementById("wrong1").style.color = "red";
                document.getElementById("correct1").style.visibility = "hidden";
                return false;
            }
            if (checkFullName.test(fullName)) {
                document.getElementById("msg1").innerHTML = "*** Valid ***";
                document.getElementById("msg1").style.color = "green";
                document.getElementById("name").style.border = "2px solid green";
                document.getElementById("correct1").style.visibility = "visible";
                document.getElementById("correct1").style.color = "green";
                document.getElementById("wrong1").style.visibility = "hidden";
            } else {
                document.getElementById("msg1").innerHTML = "*** Your name should contain a-zA-Z letter's only and then minimum 3 & maximum 5 letter's are allowed ***";
                document.getElementById("msg1").style.color = "red";
                document.getElementById("name").style.border = "2px solid red";
                document.getElementById("wrong1").style.visibility = "visible";
                document.getElementById("wrong1").style.color = "red";
                document.getElementById("correct1").style.visibility = "hidden";
                return false;
            }

            // mobilenumber
            if (mobileNumber.trim() == null || mobileNumber.trim() == "") {
                document.getElementById("msg2").innerHTML = "*** Enter ur number ***";
                document.getElementById("msg2").style.color = "red";
                document.getElementById("number").style.border = "2px solid red";
                document.getElementById("wrong2").style.visibility = "visible";
                document.getElementById("wrong2").style.color = "red";
                document.getElementById("correct2").style.visibility = "hidden";
                return false;
            }
            if (checkMobileNumber.test(mobileNumber)) {
                document.getElementById("msg2").innerHTML = "*** Valid ***";
                document.getElementById("msg2").style.color = "green";
                document.getElementById("number").style.border = "2px solid green";
                document.getElementById("correct2").style.visibility = "visible";
                document.getElementById("correct2").style.color = "green";
                document.getElementById("wrong2").style.visibility = "hidden";
            } else {
                document.getElementById("msg2").innerHTML = "*** Enter a valid 10 digit number ***";
                document.getElementById("msg2").style.color = "red";
                document.getElementById("number").style.border = "2px solid red";
                document.getElementById("wrong2").style.visibility = "visible";
                document.getElementById("wrong2").style.color = "red";
                document.getElementById("correct2").style.visibility = "hidden";
                return false;
            }

            // email
            if (emailId.trim() == null || emailId.trim() == "") {
                document.getElementById("msg3").innerHTML = "*** Enter ur email-id ***";
                document.getElementById("msg3").style.color = "red";
                document.getElementById("email").style.border = "2px solid red";
                document.getElementById("wrong3").style.visibility = "visible";
                document.getElementById("wrong3").style.color = "red";
                document.getElementById("correct3").style.visibility = "hidden";
                return false;
            }
            if (checkEmailId.test(emailId)) {
                document.getElementById("msg3").innerHTML = "*** Valid ***";
                document.getElementById("msg3").style.color = "green";
                document.getElementById("email").style.border = "2px solid green";
                document.getElementById("correct3").style.visibility = "visible";
                document.getElementById("correct3").style.color = "green";
                document.getElementById("wrong3").style.visibility = "hidden";
            } else {
                document.getElementById("msg3").innerHTML = "*** Enter a valid email-id ***";
                document.getElementById("msg3").style.color = "red";
                document.getElementById("email").style.border = "2px solid red";
                document.getElementById("wrong3").style.visibility = "visible";
                document.getElementById("wrong3").style.color = "red";
                document.getElementById("correct3").style.visibility = "hidden";
                return false;
            }

            //   comment
            if (comment.trim() == null || comment.trim() == "") {
                alert("Please write ur comments");
                return false;
            } else {
                alert("You have successfully submitted");
            }
        }
    </script>



</body>

</html>