<?php 
include('../access/connect.php');
if(isset($_POST['submit']))
{
    $fname = $_POST['cname'];
    $addr=$_POST['addr'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $insert_query=mysqli_query($connection, "INSERT INTO college (cname,caddr,cemail,cpassword) VALUES ('$fname','$addr','$email','$password')");
    if($insert_query)
    {
        $smsg="Registration successful";
    }
    else
    {
        echo mysqli_error($connection);
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
                        <h4 class="font-18 m-b-5 text-center">Register your college</h4>
                        <p class="text-muted text-center">Get your free College account.</p>
                        <?php if(isset($smsg)) { ?>
                        <div class="alert alert-success" role="alert">
                                <strong>Well done!</strong><?php echo $smsg; ?>
                        </div>
                        <?php } ?>
                        <form class="form-horizontal m-t-30" method="post">

                             <div class="form-group">
                                <label for="username">College name</label>
                                <input required type="text" class="form-control" id="username" name="cname" placeholder="Enter Collegename">
                            </div>

                            <div class="form-group">
                                <label for="username">College Address</label>
                                <textarea class="form-control" required name="addr"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="useremail">College Email</label>
                                <input required type="email" class="form-control" id="useremail" placeholder="Enter email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input required name="password" type="password" class="form-control" id="userpassword" placeholder="Enter password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                    <button name="submit" class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <p class="font-14 text-muted mb-0">By registering you agree to the Admiria <a href="#">Terms of Use</a></p>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="text-white">Already have an account ? <a href="pages-login.html" class="font-500 font-14 text-white font-secondary"> Login </a> </p>
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