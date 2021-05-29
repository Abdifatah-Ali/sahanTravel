<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
	
	if ((isset($_SESSION['username']) == true) && ($_SESSION['username']) != "") {
		//
		
	} else {
		echo "<script>window.location.href='index.php'</script>";
	}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sahan Travel Agency</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>

</head>

<body id="page-top">
    <?php
    include("inc/db.php");
    ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
            include("inc/sidebar.php");
        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php
                 include("inc/header.php");
                ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Contact_Us List page</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body bg-white border-left-warning border-bottom-primary">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th> UserName </th>
                                                <th> E-mail </th>
                                                <th> Mobile </th>
                                                <th> Message </th>
                                                <th> Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include("inc/db.php");
                                            $usersListQry = "SELECT * FROM contact ";
                                            $usersListEx = mysqli_query($cn, $usersListQry);
                                            while ($result = mysqli_fetch_array($usersListEx)) {
                                                // $userid=$result['clientID'];
                                             ?>

                                            <tr>

                                                <td> <?php  echo $result[1]; ?></td>
                                                <td> <?php echo $result[2]; ?></td>
                                                <td> <?php echo $result[3]; ?></td>
                                                <td> <?php echo $result[4]; ?></td>


                                                <td>
                                                    <a class="badge badge-danger"
                                                        href="delContact.php?id=<?php echo $result[0]; ?>"
                                                        style="padding-bottom: 8px; padding-top: 7px;">
                                                        <i class="fa fa-fw fa-trash"></i></a>
                                                </td>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <script>
            function delUser(userID) {

                if (confirm("Are you sure you went to delete user id " + userID + "?")) {
                    window.location.href = 'delete2.php?usID=' + userID + '';
                }
            }
            </script>

            <!-- Footer -->
            <?php
            include("inc/footer.php");
        ?>

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>