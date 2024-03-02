<?php

    require 'function.php';

    if(isset($_POST['signup'])){

        // date_default_timezone_set('Asia/Jakarta');
        // $today_date = date("d-m-Y");
        // echo "Tanggal hari ini: " . $today_date . "<br>";

        if( registrasi($_POST) > 0 ){
            echo "
            <script> 
                alert('Akun telah berhasil dibuat')
            </script>";
        } 
        else{
            echo "
            <script> 
                alert('Akun gagal dibuat')
            </script>";
            echo mysqli_error($conn);
        }
    }



?>
<!-- 0fECrzmN3Wpq -->
<!-- E2vuEP94SG8GSUp -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pomoru</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body class="index">

    <!-- START HEADER -->
    <header class="header">
        <img class="header-img" src="assets/img/logo-white.png" alt="">
        <div class="header-setAcc">
            <img class="header-setAcc-setting" src="assets/icon/setting.png" alt="">
            <button class="header-setAcc-button">Sign In</button>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- START CONTENT -->
    <main class="main">

        <div class="container-timer">
            <div class="session">
                <p>1 of 4 Sessions</p>
            </div>
            <div class="timer-display">
                <h1>
                    25 : 00
                </h1>
            </div>
            <div class="buttons">
                <div class="btn-start-pause">
                    <button id="start-timer" class="btn-start">Start</button>
                    <button id="pause-timer" class="btn-pause">Pause</button>
                </div>
                <button id="btn-reset" class="btn-reset">Reset</button>
            </div>
        </div>

        <div class="container-task">
            <div class="empty-task">
                <h2>You don't have any task</h2>
                <p>It's time to kickstart your productivity by creating your task list."</p>
            </div>
            <button class="add-task">Add Task</button>
        </div>
    </main>
    <!-- END CONTENT -->


    <!-- Start Login -->
    <span class="overlay-span-login"></span>
    <section class="overlay-section-login">
        <div class="overlay-div-login">
            <img src="assets/img/logo-black.png" alt="">
            <h2>Sign In</h2>
            <p>Enter your email and password to access your account</p>
            <form action="" class="login-form">
                <div class="login-form-container">
                    <div class="login-input">
                        <label for="">Email</label>
                        <input type="text" placeholder="Enter your email">
                    </div>
                    <div class="login-input">
                        <label>Password</label>
                        <input type="text" placeholder="Enter your password">
                    </div>
                    <div class="remember-forget">
                        <div class="remember">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">Remember Me</label>
                        </div>
                        <a href="">Forgot Password</a>
                    </div>
                    <button>Sign In</button>
                    <p>Don’t have an account? <a class="do-signup"> Sign Up </a></p>
                </div>
            </form>
        </div>
    </section>
    <!-- End Login -->


    <!-- Start Registration -->
    <span class="overlay-span-signup"></span>
    <section class="overlay-section-signup">
        <div class="overlay-div-signup">
            <img src="assets/img/logo-black.png" alt="">
            <h2>Sign Up</h2>
            <p>Enter your email and password to access your account</p>
            <form action="" class="signup-form" method="post">
                <div class="signup-form-container">
                    <div class="signup-input">
                        <label for="username">Username</label>
                        <input type="text" placeholder="Enter your username" name="username" id="username">
                    </div>
                    <div class="signup-input">
                        <label for="email">Email</label>
                        <input type="text" placeholder="Enter your email" name="email" id="email">
                    </div>
                    <div class="signup-input">
                        <label for="password">Password</label>
                        <input type="text" placeholder="Enter your password" name="password" id="password">
                    </div>
                    <button type="submit" name="signup">Sign Up</button>
                    <p>Already have an account? <a class="back-signIn"> Sign In </a></p>
                </div>
            </form>
        </div>
    </section>
    <!-- End Registration -->


    <script src="main.js"></script>
</body>
</html>