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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="scss/jQuery.js"></script>

    <style>
    h3 {
        font-size: 34px;
        text-align: center;
        padding-top: 320px;
        font-family: Pacifico;
    }
    </style>
    <script>
    $(document).ready(function() {
        //alert(1);

        $("#confirmPass").keyup(function() {
            var pass1 = $("#pass1").val();
            var confPassw = $(this).val();

            if (confPassw == "") {
                $("#confPs").html("<span></span>");
                $("#RegisterUser").prop("disabled", false);
            } else if (pass1 != confPassw) {
                $("#confPs").html(
                    "<span class='badge badge-danger' style='margin-top: 5px; font-size: 14px;'><b>Password mismatch</span>"
                );
                $("#RegisterUser").prop("disabled", true);
            } else {
                $("#confPs").html(
                    "<span class='badge badge-success' style='margin-top: 5px; font-size: 14px;'><b>Password matched</span>"
                );
                $("#RegisterUser").prop("disabled", false);
            }
        });
        $("#pass1").keyup(function() {
            var passOne = $(this).val();

            if (passOne == "") {
                $("#passStrength").html("<span></span>");

            } else if (passOne.length >= 1 && passOne.length <= 5) {
                $("#passStrength").html(
                    "<span class='badge badge-danger' style='margin-top: 5px; font-size: 14px;'><b>Password is very weak</span>"
                );
            } else if (passOne.length >= 6 && passOne.length <= 9) {
                $("#passStrength").html(
                    "<span class='badge badge-info' style='margin-top: 5px; font-size: 14px;'><b>Password is medium</span>"
                );
            } else {
                $("#passStrength").html(
                    "<span class='badge badge-success' style='margin-top: 5px; font-size: 14px;'><b>Password is strong</span>"
                );

            }
        });

        $("#usName").keyup(function() {
            //alert("Writing");
            var myUname = $(this).val();

            $.ajax({
                url: "checkUser.php",
                method: "POST",
                data: {
                    uname: myUname
                },
                dataType: "text",
                success: function(result) {
                    $("#userAvailablitity").html(result);
                }
            });
        });
    });
    </script>
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
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Register page</h1>
                    <div class="container">
                        <div class="card o-hidden border-0 shadow-lg my-10">
                            <div class="card-body p-0" width="100">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-md-5 d-none d-lg-block bg-gradient-success">
                                        <h3 class="h5 mb-8 text-white">Create Account</h3>
                                    </div>
                                    <div class="col-lg-7 " class="center">
                                        <div class=" p-4">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Add User</h1>
                                            </div>
                                            <div align="left">
                                                <img id="target" width="204px"><br><br>
                                            </div>
                                            <form class="user" class="forms-sample" style="font-size:medium;" action="#"
                                                method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="ReporterName">Upload user Photo</label>
                                                    <input type="file" name="userPhoto" class="form-control col-sm-3"
                                                        id="src">
                                                </div>
                                                <!-- <div class="form-group ">
                                                    <input type="text" class="form-control form-control-user"
                                                        id="exampleFirstName" placeholder="ID" required>

                                                </div> -->
                                                <div class="form-group ">
                                                    <input style="font-size:medium;" type="text" name="Fname"
                                                        class="form-control form-control-user" id="exampleLastName"
                                                        placeholder="Fullname" autocomplete="off" required>
                                                </div>

                                                <div class="form-group">
                                                    <input style="font-size:medium;" type="text" name="uname"
                                                        id="usName" class="form-control form-control-user"
                                                        autocomplete="off" placeholder="username" required>
                                                    <span id="userAvailablitity"></span>
                                                </div>

                                                <div style="font-size:medium;" class="form-group">
                                                    <input style="font-size:medium;" type="text" name="addr"
                                                        class="form-control form-control-user" id="exampleInputEmail"
                                                        placeholder="Address" autocomplete="off" required>
                                                </div>
                                                <div class="form-group  row">
                                                    <div class="col-md-5 mb-5 mb-sm-0">
                                                        <label class="col-sm-6" for="">Gender: </label>
                                                        <input type="radio" name="gender" id="gender" value="male"
                                                            checked>&nbsp; Male
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="radio" name="gender" id="gender"
                                                            value="female">&nbsp; Female
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="">User type: </label>
                                                    <select name="usertype" class="col-sm-6">
                                                        <option value="Admin">Admin</option>
                                                        <option value="Normal">Normal</option>

                                                    </select>
                                                </div>

                                                <div class="form-group col-sm-">
                                                    <label for="">Confirm Question: </label>
                                                    <select name="question" class="col-md-6">
                                                        <option value="What is your nickname">What is your nickname
                                                        </option>
                                                        <option value="What is your mother's name ">What is your
                                                            mother's name</option>

                                                    </select>
                                                </div>

                                                <div class="form-group ">
                                                    <input style="font-size:medium;" type="text" name="answer"
                                                        class="form-control form-control-user" id="exampleLastName"
                                                        placeholder="Confirm Answer" autocomplete="off" required>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input style="font-size:medium;" type="password" name="pword"
                                                            class="form-control form-control-user" id="pass1"
                                                            placeholder="Password" maxlength="12">
                                                        <span id="passStrength"></span>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input style="font-size:medium;" type="password" name="cofirm"
                                                            class="form-control form-control-user" id="confirmPass"
                                                            placeholder="Repeat Password">
                                                    </div>
                                                </div>
                                                <!-- href="index.php" class="btn btn-primary btn-user btn-block col-lg" -->
                                                <button type="submit" name="register" id="RegisterUser"
                                                    class="btn btn-success btn-user btn-block col-lg">Register
                                                    User</button>
                                            </form>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php
						if (isset($_POST['register'])) {
							//echo "<script>alert('Register Button Clicked');</script>";
                            $allowedExt = array("jpg", "jpeg", "JPEG", "png", "gif", "JPG", "PNG", "GIF");
							$filename = $_FILES['userPhoto']['name'];
					        $mypicExt = pathinfo($filename, PATHINFO_EXTENSION);
                            $path = 'images/faces/'.$filename;
                            
                            if (in_array($mypicExt, $allowedExt)) { 
							move_uploaded_file($_FILES['userPhoto']['tmp_name'], $path);
							$fullname = mysqli_real_escape_string($cn, $_POST['Fname']);
							$reptype  = mysqli_real_escape_string($cn, $_POST['usertype']);
							$uname    = mysqli_real_escape_string($cn, $_POST['uname']);
                            $addr    = mysqli_real_escape_string($cn, $_POST['addr']);
                            $gender  = mysqli_real_escape_string($cn, $_POST['gender']);
                            $passw    = mysqli_real_escape_string($cn, $_POST['pword']);
                            $question=mysqli_real_escape_string($cn, $_POST['question']);
                            $answer=mysqli_real_escape_string($cn, $_POST['answer']);
                            if($_SESSION['userType']=='Admin'){
                                //$regby=$_SESSION['username'];
                                $regby = ' Admin ';
                            }else{
                               $regby=$_SESSION['username'];
                            }
                            // $regby=$_SESSION['userType'];
                            $status = "Active";
							$regQry = "INSERT INTO users(`fullName`,`userType`,`userName`,`userAddress`,`gender`,`password`,`userPhoto`,`status`,`question`,`answer`,`regby`)
                             VALUES ('". $fullname ."', '".$reptype."', '".$uname ."', '".$addr."','" .$gender ."','". $passw ."','". $path ."','".$status."','".$question."','".$answer."','".$regby."')";
                             
							$reg = mysqli_query($cn, $regQry);
							if ($reg) {
								echo "<script>alert('User Registered Successfully...');</script>";

							} else {
								echo "<script>alert('User Registration Failed...');</script>";

							    }
						    }
                            else{
                                echo "<script>alert('image Not Allowed..');</script>";
                                	//echo (""."");
                            }
                        }
					?>



                    <script>
                    var src = document.getElementById("src");
                    var target = document.getElementById("target");

                    document.write(src, target);

                    function showImage(src, target) {
                        var upl = new FileReader();
                        upl.onload = function(e) {
                            target.src = this.result;
                        };
                        src.addEventListener("change", function() {
                            upl.readAsDataURL(src.files[0]);
                        })
                    }
                    showImage(src, target);
                    </script>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

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