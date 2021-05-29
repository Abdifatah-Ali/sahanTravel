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


    error_reporting(0);
   $photo=$_GET['ph'];
   $fname=$_GET['fn'];
   $email=$_GET['em'];
   $frome=$_GET['fr'];
   $to=$_GET['ds'];
   $dept=$_GET['dpt'];
   $retun=$_GET['rtn'];
   $gnder=$_GET['gn'];
   $age=$_GET['age'];
   $tell=$_GET['phone'];
   
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
                    <h1 class="h3 mb-4 text-gray-900">Update_LogalFlight_Clients</h1>
                    <div class="row">
                        <!-- style="padding-left: 300px;  -->
                        <div class="col-md-12 grid-margin stretch-card" style=" padding: 5%; ">
                            <div class=" card col-md-12">
                                <div class="card-body " style="padding-left: 15%;">
                                    <div align="left">
                                        <img src="<?php echo ("$photo")?>" id="target" width="204px"><br><br>
                                        <form class="forms-sample" action="#" method="POST"
                                            enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="userPhoto">Upload User Photo</label>
                                                <input type="file" name="clientPhoto" class="form-control col-sm-3"
                                                    id="src" value="<?php echo ("$photo")?>" placeholder="Upload Photo"
                                                    required>
                                            </div>

                                            <div class="form-group">
                                                <label for="Full Name">Full Name</label>
                                                <input type="text" name="Fname" value="<?php echo ("$fname")?>"
                                                    class="form-control col-sm-8" id="exampleInputUsername1"
                                                    placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="E-mail">E-mail</label>
                                                <input type="email" name="Email" value="<?php echo ("$email")?>"
                                                    class="form-control col-sm-8" id="exampleInputUsername1"
                                                    placeholder="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="From">From</label>
                                                <select name="from" class="form-control col-sm-8"
                                                    id="exampleInputUsername1">
                                                    <option value="<?php echo ("$frome")?>" selected>
                                                        <?php echo ("$frome")?></option>
                                                    <option value="Muqdisho">Muqdisho</option>
                                                    <option value="Hargeysa">Hargeysa</option>
                                                    <option value="Garowe">Garowe</option>
                                                    <option value="Bayshabo">Bayshabo</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="Destination">To</label>
                                                <select name="to" class="form-control col-sm-8"
                                                    id="exampleInputUsername1">
                                                    <option value="<?php echo ("$to")?>" selected><?php echo ("$to")?>
                                                    </option>
                                                    <option value="Muqdisho">Muqdisho</option>
                                                    <option value="Hargeysa">Hargeysa</option>
                                                    <option value="Garowe">Garowe</option>
                                                    <option value="Bayshabo">Bayshabo</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Departure">Departure</label>
                                                <input type="date" name="departure" value="<?php echo ("$dept")?>"
                                                    class="form-control col-sm-8" id="exampleInputUsername1"
                                                    placeholder="Departure-time" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Return">Return</label>
                                                <input type="date" name="Return" value="<?php echo ("$retun")?>"
                                                    class="form-control col-sm-8" id="exampleInputUsername1"
                                                    placeholder="Return-time">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gender </label>
                                                <input type="radio" name="gender" id="gender"
                                                    value="<?php echo ("$gnder")?>" class="col-sm-2"
                                                    checked><?php echo ("$gnder")?>
                                                <!-- <input type="radio" name="gender" id="gender" value="male"
                                                    class="col-sm-2">Male
                                                <input type="radio" name="gender" id="gender" value="female"
                                                    class="col-sm-2">Female -->

                                            </div>
                                            <div class="form-group">
                                                <label for="Age">Age</label>
                                                <select name="age" class="form-control col-sm-8"
                                                    id="exampleInputUsername1">
                                                    <option value="<?php echo ("$age")?>" selected><?php echo ("$age")?>
                                                    </option>
                                                    <option value="teenager">Teenager(13-19 years)</option>
                                                    <option value="Normal">Normal(20-55 years)</option>
                                                    <option value="old">Old(56 years above)</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Username">Phone Number</label>
                                                <input type="text" name="tellphone" value="<?php echo ("$tell")?>"
                                                    class="form-control col-sm-8" id="exampleInputEmail1"
                                                    placeholder="mobile" required>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" name="register"
                                                    class="btn btn-success btn-md col-md-5">Submit</button>

                                                <button type="button"
                                                    class="btn btn-danger btn-md col-md-3">Cancel</button>
                                            </div>
                                        </form>
                                    </div>

                                    <?php
						if (isset($_POST['register'])) {
                            if($_POST['from']!=$_POST['to']){
                                if (!empty($_POST['departure']  ) and !empty($_POST['Return']) ){
                                    $star=strtotime($_POST['departure']) ;
                                    $end=strtotime($_POST['Return']) ;
                                    $result=$end-$star;
                                    $Days=floor($result/(60*60*24));
                                    if($end>=$star){
                                        $allowedExt = array("jpg", "jpeg", "JPEG", "png", "gif", "JPG", "PNG", "GIF");
                                        $filename = $_FILES['clientPhoto']['name'];
                                        $mypicExt = pathinfo($filename, PATHINFO_EXTENSION);
                                        $path = 'images/localphotos/'.$filename;
                                        
                                        if (in_array($mypicExt, $allowedExt)) { 
                                        move_uploaded_file($_FILES['clientPhoto']['tmp_name'], $path);
                                
                                        $fullname = mysqli_real_escape_string($cn, $_POST['Fname']);
                                        $email  = mysqli_real_escape_string($cn, $_POST['Email']);
                                        $from  = mysqli_real_escape_string($cn, $_POST['from']);
                                        $to  = mysqli_real_escape_string($cn, $_POST['to']);
                                        $departure  = mysqli_real_escape_string($cn, $_POST['departure']);
                                        $Return  = mysqli_real_escape_string($cn, $_POST['Return']);
                                        $gender   = mysqli_real_escape_string($cn, $_POST['gender']);
                                        $Age   = mysqli_real_escape_string($cn, $_POST['age']);
                                        $tellphone   = mysqli_real_escape_string($cn, $_POST['tellphone']);
                                        $id=$_GET['id'];
                                        $regQry = "UPDATE  localflight SET `clientPhoto` ='". $path ."', `fullName`='". $fullname ."', `email`='". $email ."', `address`='". $from ."', `location`='". $to ."',
                                        `departure`='". $departure ."', `arrive`='". $Return ."', `gender`='". $gender ."', `age`='". $Age ."', `phone`='". $tellphone ."'
                                        WHERE clientID='".$id."'";
                                        $reg = mysqli_query($cn, $regQry);
                                        if ($reg) {
                                            echo "<script>alert('Client updated Successfully...');</script>";
                                            echo "<script>window.location.href='localFlightlist.php';</script>";
            
                                    } else {
                                        echo "<script>alert('Client update was Failed...');</script>";
        
                                        }
                                    }
                                }
                                else{
                                    echo "<script>alert('Return date can not be earlier than departure date!');</script>";
                                    //echo"Return date can not be earlier than departure date";
                                    }
                            }
                                else{
                                //echo "<script>alert('Register Button Clicked');</script>";
                                $allowedExt = array("jpg", "jpeg", "JPEG", "png", "gif", "JPG", "PNG", "GIF");
                                $filename = $_FILES['clientPhoto']['name'];
                                $mypicExt = pathinfo($filename, PATHINFO_EXTENSION);
                                $path = 'images/localphotos/'.$filename;
                                
                                if (in_array($mypicExt, $allowedExt)) { 
                                move_uploaded_file($_FILES['clientPhoto']['tmp_name'], $path);
                        
                                $fullname = mysqli_real_escape_string($cn, $_POST['Fname']);
                                $email  = mysqli_real_escape_string($cn, $_POST['Email']);
                                $from  = mysqli_real_escape_string($cn, $_POST['from']);
                                $to  = mysqli_real_escape_string($cn, $_POST['to']);
                                $departure  = mysqli_real_escape_string($cn, $_POST['departure']);
                                $Return  = mysqli_real_escape_string($cn, $_POST['Return']);
                                $gender   = mysqli_real_escape_string($cn, $_POST['gender']);
                                $Age   = mysqli_real_escape_string($cn, $_POST['age']);
                                $tellphone   = mysqli_real_escape_string($cn, $_POST['tellphone']);
                                $id=$_GET['id'];
                                $regQry = "UPDATE  localflight SET `clientPhoto` ='". $path ."', `fullName`='". $fullname ."', `email`='". $email ."', `address`='". $from ."', `location`='". $to ."',
                                `departure`='". $departure ."', `arrive`='". $Return ."', `gender`='". $gender ."', `age`='". $Age ."', `phone`='". $tellphone ."'
                                WHERE clientID='".$id."'";
                                $reg = mysqli_query($cn, $regQry);
                                if ($reg) {
                                    echo "<script>alert('Client Updated Successfully...');</script>";
                                    echo "<script>window.location.href='localFlightlist.php';</script>";


							} else {
								echo "<script>alert('Client Update was Failed...');</script>";

                                }
                            }
                        
                            }
                        }
                            else{
                                echo "<script>alert('From and To can not be the same!');</script>";
                               // echo "From and To can not be the same ";
                            }
                        }
                        ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <br>



            <!-- /.container-fluid -->
        </div>
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



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>