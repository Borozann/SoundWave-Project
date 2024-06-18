<!DOCTYPE html>
<html lang="en">
<?php
include "connection_bd.php"; 
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            letter-spacing: 1px;
            background-image: url('img/neon.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .login_form_container {
            position: relative;
            width: 400px;
            height: 470px;
            max-width: 400px;
            max-height: 470px;
            background: #fff;
            border-radius: 50px 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-top: 70px;
            color: #000;
        }

        @keyframes rotate_border {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .login_form {
            position: absolute;
            content: '';
            z-index: 10;
            color: #000000;
        }

        h2 {
            font-size: 40px;
            font-weight: 600;
            text-align: center;
        }

        .input_group {
            margin-top: 40px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: start;
        }

        .input_text {
            width: 95%;
            height: 30px;
            background: transparent;
            border: none;
            outline: none;
            border-bottom: 1px solid #000000;
            font-size: 20px;
            padding-left: 10px;
            color: #000000;
        }

        ::placeholder {
            font-size: 15px;
            color: #000000;
            letter-spacing: 1px;
        }

        .fa {
            font-size: 20px;
        }

        #login_button {
            position: relative;
            width: 300px;
            height: 40px;
            transition: 1s;
            margin-top: 70px;
        }

        #login_button a {
            position: absolute;
            width: 100%;
            height: 100%;
            text-decoration: none;
            z-index: 10;
            cursor: pointer;
            font-size: 22px;
            letter-spacing: 2px;
            border: 1px solid #000000;
            border-radius: 50px;
            background-color: #2346df;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fotter {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
        }

        .fotter a {
            text-decoration: none;
            cursor: pointer;
            font-size: 18px;
        }

        .glowIcon {
            text-shadow: 0 0 10px #000000;
        }
    </style>
</head>

<body>
<div class="login_form_container">
        <div class="login_form">
            <h2>Login</h2>
            <div class="input_group">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="Username" class="input_text" autocomplete="off" name="user"/>
            </div>
            <div class="input_group">
                <i class="fa fa-unlock-alt"></i>
                <input type="password" placeholder="Password" class="input_text" autocomplete="off" name="pass"/>
            </div>
            <div class="button_group" id="login_button">
                <a href="verify_sing_up.php" >Submit</a>
            </div>
            <div class="fotter">
                <a>Forgot Password ?</a>
                <a>Sing Up</a>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script>
        $(".input_text").focus(function () {
            $(this).prev('.fa').addClass('glowIcon')
        })
        $(".input_text").focusout(function () {
            $(this).prev('.fa').removeClass('glowIcon')
        })
    </script>
</body>

</html>
