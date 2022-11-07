<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
    function myFunction(){
    window.history.forward();
    function noBack() {
        window.history.forward();
    }
    }
</script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        *{
        color: #000729;
        margin-top: 15px;
        }

        #a {
            text-align: center;
            font-size: 25px;
            border-style: solid;
            /* margin-border-top: 8%; */
            margin-top: 10%;
            margin-left: 28%;
            margin-right: 20%;
            margin-bottom: 18%;
            max-width: 40%;
            min-width: 20%;
        }

        .aligncenter {
            text-align: center;
        }

        .aligncenter {
            text-align: center;
        }

        a {
            color: goldenrod;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: #000729;
        }

        .navbar-custom {
            background-color: #000729;
        }

        /* change the brand and text color */
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            background-color: #000729;
        }

        .navbar-custom .navbar-nav .nav-link {
            background-color: #000729;
        }

        .navbar-custom .nav-item.active .nav-link,
        .navbar-custom .nav-item:hover .nav-link {
            background-color: #000729;
        }


        .mybtn {
            border-color: green;
            border-style: solid;
        }


        .right {
            display: flex;
        }

        .left {
            display: none;
        }

        .cart {
            /* margin-left:10px; */
            margin-right: -9px;
        }

        .profile {
            margin-right: 2px;

        }

        .login {
            margin-right: -2px;
            margin-top: 12px;
            display: none;
        }

        .searchbox {
            width: 60%;
        }

        .lists {
            display: inline-block;
        }

        .moblists {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: -30%;
            margin-left: 35%;
        }

        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #000729;
            text-align: left;
            /* background-color: #0E0220; */
            /* border-radius: 5%; */
        }
        .my-form,
        .login-form {
            font-family: Raleway, sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }
        /*
        .container{
            border-style: outset;
            border-width: 1px;
            border-radius: 16px;
        } */
/*  
        .card {
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
        }  */
/* 
        .card-header {
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
        } */
        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            /* .mycarousel {
            display: none;
        }

        .firstimage {
            height: auto;
            width: 90%;
        }

        .col {
            margin-top: 20px;
        } */

            .right {
                display: none;
                background-color: #ff5500;
            }

            /* 
            .settings{
            margin-left:79%;
        } */
            .left {
                display: flex;
            }

            .moblogo {
                display: none;
            }

            .logins {
                text-align: center;
                margin-right: 35%;
                padding: 15px;
            }

            .searchbox {
                width: 95%;
                margin-right: 5%;
                margin-left: 0%;
            }

            .moblists {
                display: inline-block;
                text-align: center;
                width: 100%;
            }

            /* .pic{
        height:auto;
    } */

            /* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */
        }
    </style>
</head>

<body>

    <main class="my-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header border border-dark" style="background: linear-gradient(#0E0220, #000729);">
                            <h4 style="font-style:bold;color:goldenrod;text-align:left">Login</h4>
                        </div>
                        <div class="card-body border border-dark">
                            <form name="my-form" action="PatientLogin.php" method="post">

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right  "><b><i class="fas fa-phone-alt mr-2"></i>Phone Number</b></label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control border border-dark" name="phonenumber" placeholder="Phone Number" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="p1" class="col-md-4 col-form-label text-md-right"><b><i class="fas fa-lock mr-2"></i>Password</b></label>
                                    <div class="col-md-6">
                                        <input id="p1" class="form-control border border-dark" type="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn " onClick="myFunction()" style="background-color:#000729; border-color: white;color:goldenrod" name="login" value="Login">
                                        Login
                                    </button>
                                </div>
                                <br>
                                <div class="col-md-6 offset-md-4">
                                    <label id="forgotPassword"><a id='link' href="PatientForgotPassword.php"><b style="color:#0E0220"> Forgot your password ?</b></a></label>
                                    <br>
                                    <label id="account"><a id='link' href="PatientRegistration.php"><b style="color:#0E0220">Create New Account</b></a></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>

<?php
include("../Admin/includes/db.php");

if (isset($_POST['login'])) {

    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '2345678910111211';
    $encryption_key = "DE";

    $encryption = openssl_encrypt(
        $password,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );

    $query = "select * from patientregistration where patient_phone = '$phonenumber' and patient_password = '$encryption'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);
    if ($count_rows == 0) {
        echo "<script>alert('Please Enter Valid Details');</script>";
        echo "<script>window.open('PatientLogin.php','_self')</script>";
    }
    while ($row = mysqli_fetch_array($run_query)) {
        $id = $row['patient_id'];
    }

    $_SESSION['phonenumber'] = $phonenumber;
    echo "<script>window.open('../templates/index.php','_self')</script>";
}

?>