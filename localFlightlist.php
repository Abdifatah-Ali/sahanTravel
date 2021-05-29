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

    <title>SB Admin 2 - Blank</title>

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

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <div class="nav-profile-img">
                        <img class="rounded-circle"
                            src="<?php if ($_SESSION['userPhoto'] == "") {echo "images/faces/man-user.png";} else { echo $_SESSION['userPhoto']; }?>"
                            width="50px" height="50px" alt=" image">
                        <span class="availability-status online"></span>
                    </div>
                    <!-- <i class="fas fa-user"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $_SESSION['username'];?><sup>1</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users-cog"></i>
                    <span>Users</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="registerUser.php">Add User</a>
                        <a class="collapse-item" href="userList.php">Users list</a>
                        <a class="collapse-item" href="verifyUsers.php">verify Users</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-plane-departure"></i>
                    <span>Flights</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="localFlight.php">LogalFilghts</a>
                        <a class="collapse-item" href="#">list of Booking flight</a>
                    </div>
                </div>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-800 md">
                                    <?php echo $_SESSION['username'];?></span>
                                <div class="nav-profile-img">
                                    <img class="rounded-circle"
                                        src="<?php if ($_SESSION['userPhoto'] == "") {echo "images/faces/man-user.png";} else { echo $_SESSION['userPhoto']; }?>"
                                        width="40px" height="40px" alt=" image">
                                    <span class="availability-status online"></span>
                                </div>
                                <!-- <i class="fas fa-fw fa-user-alt"></i> -->
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Users List page</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body bg-white border-left-warning border-bottom-primary">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th> PHOTO </th>
                                                <th> FULLNAME </th>
                                                <th> E-MAIL </th>
                                                <th> FROM</th>
                                                <th> DESTINATION </th>
                                                <th> GENDER </th>
                                                <th> AGE </th>
                                                <th> PHONE </th>
                                                <th> Action </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include("inc/db.php");
                                            $usersListQry = "SELECT * FROM localflight ORDER BY fullName";
                                            $usersListEx = mysqli_query($cn, $usersListQry);
                                            while ($result = mysqli_fetch_array($usersListEx)) {
                                             ?>

                                            <tr>
                                                <td class="py-1">
                                                    <img src="<?php if ($result[1] == "") {echo "images/no-image.jpg";} else { echo $result[1]; } ?>"
                                                        width="30px" alt="image" />
                                                </td>
                                                <td> <?php echo $result[2]; ?></td>
                                                <td> <?php echo $result[3]; ?></td>
                                                <td> <?php echo $result[4]; ?></td>
                                                <td> <?php echo $result[5]; ?></td>
                                                <td> <?php echo $result[8]; ?></td>
                                                <td> <?php echo $result[9]; ?></td>
                                                <td> <?php echo $result[10]; ?></td>


                                                <td>
                                                    <a class=" btn badge badge-info" href="#"
                                                        style="padding-bottom: 8px; padding-top: 7px;"><i
                                                            class="fa fa-fw fa-user-edit"></i></a> &nbsp;
                                                    <a class="  btn badge badge-danger" href="#"
                                                        style="padding-bottom: 8px; padding-top: 7px;"><i
                                                            class="fa fa-fw fa-trash"></i></a>
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

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>