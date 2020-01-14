<?php
include '../access/accesscontroladmin.php';

$getdata = mysqli_query($connection, "SELECT * FROM college");
?>
<!doctype html>
<html lang="en">
    <head>
        <?php include 'pages/csslink.php'; ?>
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?php include('pages/leftsidebar.php'); ?>
            <!-- Left Sidebar End -->


            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <?php include 'pages/topbar.php'; ?>
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Inverse table</h4>
                                            <p class="text-muted m-b-30 font-14">Your awesome text goes here.</p>

                                            <div class="table-responsive">
                                                <table class="table table-dark mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>College Name</th>
                                                        <th>College address</th>
                                                        <th>college email</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php $count = 1; while($data = mysqli_fetch_assoc($getdata)) { ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $count ?></th>
                                                        <td><?php echo $data['cname']; ?></td>
                                                        <td><?php echo $data['caddr']; ?></td>
                                                        <td><?php echo $data['cemail']; ?></td>
                                                    </tr>
                                                    <?php $count++; } ?>

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include 'pages/footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <?php include 'pages/jslink.php'; ?>

    </body>
</html>