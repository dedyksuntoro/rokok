
<?php

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}

if ($_GET['hak_akses'] != 'active') {
    session_start();
    session_destroy();

    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

    <?php include 'header.php'; ?>

    <body>

        <div id="wrapper">

            <?php include 'navbar.php'; ?>

            <?php include 'sidebar.php'; ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Hak Akses</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="template/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="template/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="template/js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="template/js/raphael.min.js"></script>
        <script src="template/js/morris.min.js"></script>
        <script src="template/js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="template/js/startmin.js"></script>

    </body>

</html>