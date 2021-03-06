﻿<?php 
include('../access/connect.php');
session_start();
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password=$_POST['password'];
    $query=mysqli_query($connection, "SELECT * FROM `admin` WHERE aemail='$email' AND apassword='$password'");
    $getdata = mysqli_fetch_assoc($query);
    $count = mysqli_num_rows($query);
    if($count>=1)
    {
        $smsg="Login successful";
        $_SESSION['aid'] = $getdata['aid'];
        $_SESSION['aname'] = $getdata['afname']." ".$getdata['alname'];
        echo "<script>window.location.href='../admin/index.php'</script>";
    }
    else
    {
        $query=mysqli_query($connection, "SELECT * FROM `college` WHERE cemail='$email' AND cpassword='$password'");
        $getdata = mysqli_fetch_assoc($query);
        $count = mysqli_num_rows($query);
        if($count>=1)
        {
            $smsg="Login successful";
            $_SESSION['cid'] = $getdata['cid'];
            $_SESSION['cname'] = $getdata['cname'];
            echo "<script>window.location.href='../college/index.php'</script>";
        }
        else
        {
            $query=mysqli_query($connection, "SELECT * FROM `student` WHERE semail='$email' AND spassword='$password'");
            $getdata = mysqli_fetch_assoc($query);
            $count = mysqli_num_rows($query);
            if($count>=1)
            {
                $smsg="Login successful";
                $_SESSION['sid'] = $getdata['sid'];
                $_SESSION['sname'] = $getdata['sfname']." ".$getdata['slname'];
                echo "<script>window.location.href='../student/index.php'</script>";
            }
            else
            {
                $fmsg = "Invalid Email or Password";
            }

        }
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>OSTA</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Basic Css files -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css">

    </head>
    
    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>


        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.html" class="logo logo-admin"><img src="assets/images/logo.png" height="30" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to continue to Admiria.</p>
                        <?php if(isset($smsg)) { ?>
                        <div class="alert alert-success" role="alert">
                                <strong>Well done!</strong><?php echo $smsg; ?>
                        </div>
                        <?php } ?>
                        <?php if(isset($fmsg)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $fmsg; ?>
                        </div>
                        <?php } ?>
                        <form class="form-horizontal m-t-30" method="post">

                            <div class="form-group">
                                <label for="username">email</label>
                                <input name="email" type="text" class="form-control" id="username" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input name="password" type="password" class="form-control" id="userpassword" placeholder="Enter password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="login">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="text-white">Don't have an account ? <a href="pages-register.html" class="font-500 font-14 text-white font-secondary"> Signup Now </a> </p>
                <p class="text-white">© 2017 - 2019 Admiria. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>

        </div>


        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/modernizr.min.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/jquery.nicescroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.js"></script>

    </body>
</html>