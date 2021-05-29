<!DOCTYPE html>
<html lang="en">
<?php
        include("inc/session.php");
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
    <!-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script> -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../vendors/linericon/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="css/styl.css"> -->
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
    <link rel="stylesheet" href="../css/styless.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <!-- <link rel="stylesheet" href="../assets/css/linearicons.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/jquery.DonutWidget.min.css">
    <link rel="stylesheet" href="../assets/bootstrap.css">
    <link rel="stylesheet" href="../assets/owl.carousel.css">
    <link rel="stylesheet" href="../assets/main.css"> -->


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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <Button class="btn btn-success"><i class="fas fa-download fa-sm text-white-50"></i> Generate
                            Report</Button>
                    </div>
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-md-12 mb-4 ">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Users Report</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php  $usersListEx= "SELECT COUNT(*) FROM users";
                                                $allUsers = mysqli_query($cn, $usersListEx); 
                                                //   $allUsers = $cn->query("SELECT  FROM users ");
                                                while($result = mysqli_fetch_row($allUsers)){
                                                    echo $result[0];
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Flight Booking</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php  $usersListEx= "SELECT COUNT(*) FROM localflight";
                                                $allUsers = mysqli_query($cn, $usersListEx); 
                                                //   $allUsers = $cn->query("SELECT  FROM users ");
                                                while($result = mysqli_fetch_row($allUsers)){
                                                    echo $result[0];
                                                } ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-plane-departure fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Contact Us / feedback</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  $usersListEx= "SELECT COUNT(*) FROM contact";
                                                $allUsers = mysqli_query($cn, $usersListEx); 
                                                while($result = mysqli_fetch_row($allUsers)){
                                                    echo $result[0];
                                                } ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Page Heading -->
                <!-- <h1 class="h3 mb-4 text-gray-800">Home Page</h1> -->
                <div class="container">
                    <div class="card bg-white">
                        <section class="about_history_area section_gap">
                            <div class="container">
                                <div class="row ">
                                    <div class="col-md-6 d_flex align-items-center">
                                        <div class="about_content ">
                                            <asp:Label ID="Label4" runat="server" Font-Size="Large"
                                                Text="Welcome to Sahan Travel Agency"></asp:Label>
                                            <h2 class="title title_color" style="color:teal;">Mission & Vision
                                            </h2>
                                            <p style="font-family: centurt gothic; font-size:large;color:darkblue">
                                                To be leaders of multi-national travel management in the region and
                                                our clients’ best partner, always providing the best possible
                                                product, with the highest quality of services, and demonstrating
                                                faithfully our commitment towards social and environmental
                                                responsibility. Our vision is to become the heart of the travel and
                                                tourism industry in the country, maximizing its full potential,
                                                whileat the same time creating a fair business environment for all
                                                our stakeholders to benefit from.
                                            </p>
                                            <center><a href="#"
                                                    class="button_hover bg-info btn-row-6 theme_btn_two">Mission
                                                    & Vision</a>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img class="img-fluid" src="images/home/Action.jpg" alt="img">
                                    </div>

                                </div>
                            </div>
                        </section>
                        <section class="about_history_area section_gap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-fluid" src="images/home/5.png" alt="img">
                                    </div>
                                    <div class="col-md-6 d_flex align-items-center">
                                        <div class="about_content ">
                                            <asp:Label ID="Label4" runat="server" Font-Size="Large"
                                                Text="Welcome to Sahan Travel Agency"></asp:Label>
                                            <h2 class="title title_color" style="color: red;">Our Goals
                                            </h2>
                                            <p style="font-family: centurt gothic; font-size:large;color:darkblue">
                                                To be the first point of contact for any issues relating to travel
                                                and tourism in Somalia.
                                                To provide an improved and quality travel service
                                                To establish a strong relationship between all stakeholders in the
                                                industry To adapt to the changing needs of the business environment
                                                and become a major player in the industry while being an able
                                                competitor on the international level.
                                            </p>
                                            <center><a href="#"
                                                    class="button_hover bg-danger btn-row-6 theme_btn_two">Our
                                                    Goals</a>
                                            </center>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </section>
                        <section class="about_history_area section_gap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 d_flex align-items-center">
                                        <div class="about_content ">
                                            <asp:Label ID="Label4" runat="server" Font-Size="Large"
                                                Text="Welcome to Sahan Travel Agency"></asp:Label>
                                            <h2 class="title title_color" style="color:tan ;">Our Core Values
                                            </h2>
                                            <p style="font-family: centurt gothic; font-size:large;color:darkblue">
                                                Honesty and transparency
                                                Innovation, creativity and development
                                                Quality Services delivery
                                                Teamwork
                                                Forward-thinking
                                            </p>
                                            <center><a href="#" class="button_hover btn-row-6 theme_btn_two">Our
                                                    Core Values</a>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img class="img-fluid" src="images/home/7.jpg" alt="img">
                                    </div>

                                </div>
                            </div>
                        </section>
                        <section class="about_history_area section_gap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-fluid" src="images/home/8.jpg" alt="img">
                                    </div>
                                    <div class="col-md-6 d_flex align-items-center">
                                        <div class="about_content ">
                                            <asp:Label ID="Label4" runat="server" Font-Size="Large"
                                                Text="Welcome to Sahan Travel Agency"></asp:Label>
                                            <h2 class="title title_color" style="color: green;">Our strategic Plan
                                            </h2>
                                            <p style="font-family: centurt gothic; font-size:large;color:darkblue">
                                                Customer Service is the focal point of our organization. We
                                                relentlessly search for and create new ways to improve our products
                                                and services. Our Travel consultants are friendly, professional and
                                                experienced in accomodating both the seasoned traveler and those new
                                                to the world of travel. We pride ourselves in customer satisfaction.

                                            </p>
                                            <center><a href="#"
                                                    class="button_hover bg-primary btn-row-6 theme_btn_two">Our_Plan
                                                </a>
                                            </center>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </section>


                    </div>



                </div>
                <!-- <div class="card mb-3">
                        <img src="images/home/interface.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <img src="images/home/navigation.png" class="card-img-bottom" alt="...">
                    </div> -->
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <br><br><br>
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