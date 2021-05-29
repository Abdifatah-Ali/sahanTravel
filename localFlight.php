<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css"> -->
    <link href="Adminpanel/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="Adminpanel/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <?php
		include("inc/header.php");
		?>
    <?php
		include("Adminpanel/inc/db.php");
		?>


    <br><br>
    <br><br>



    <div class="content-wrapper bg-white">
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-900" style="padding: 2%; font-weight:bold;color:royalblue;">
                localFlights
                Page</h1>
            <div class=" row justify-content-center">

                <div class="col-md-10 grid-margin stretch-card">
                    <div class=" card">
                        <div class="card-body" style="padding-left: 23%; font-size:large;">
                            <div align="left">
                                <img id="target" width="204px">
                                <form class="forms-sample" action="#" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="userPhoto">Upload User Photo</label>
                                        <input type="file" name="clientPhoto" class="form-control col-sm-3" id="src"
                                            placeholder="Upload Photo" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="Full Name">Full Name</label>
                                        <input type="text" name="Fname" class="form-control col-sm-8"
                                            id="exampleInputUsername1" placeholder="Username" required
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="E-mail">E-mail</label>
                                        <input type="email" name="Email" class="form-control col-sm-8"
                                            id="exampleInputUsername1" placeholder="email" required autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="From">From</label>
                                        <select name="from" class="form-control col-sm-8" id="exampleInputUsername1">
                                            <option value="Muqdisho">Muqdisho</option>
                                            <option value="Hargeysa">Hargeysa</option>
                                            <option value="Garowe">Garowe</option>
                                            <option value="Baydhabo">Bayshabo</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="Destination">To</label>
                                        <select name="to" class="form-control col-sm-8" id="exampleInputUsername1">
                                            <option value="Muqdisho">Muqdisho</option>
                                            <option value="Hargeysa" selected>Hargeysa</option>
                                            <option value="Garowe">Garowe</option>
                                            <option value="Baydhabo">Bayshabo</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Departure">Departure</label>
                                        <input type="date" name="departure" class="form-control col-sm-8"
                                            id="exampleInputUsername1" placeholder="Departure-time" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Return">Return</label>
                                        <input type="date" name="Return" class="form-control col-sm-8"
                                            id="exampleInputUsername1" placeholder="Return-time">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gender </label>
                                        <input type="radio" name="gender" id="gender" value="male" class="col-sm-2"
                                            checked>Male
                                        <input type="radio" name="gender" id="gender" value="female"
                                            class="col-sm-2">Female

                                    </div>
                                    <div class="form-group">
                                        <label for="Age">Age</label>
                                        <select name="age" class="form-control col-sm-8" id="exampleInputUsername1">

                                            <option value="teenager">Teenager(13-19 years)</option>
                                            <option value="Normal">Normal(20-55 years)</option>
                                            <option value="old">Old(56 years above)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Username">Phone Number</label>
                                        <input type="text" name="tellphone" class="form-control col-sm-8"
                                            id="exampleInputEmail1" placeholder="mobile" required autocomplete="off">
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="register"
                                            class="btn btn-info btn-md col-md-5">Submit</button>

                                        <button type="button" class="btn btn-danger btn-md col-md-3">Cancel</button>
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
                                    if($end>$star){
                                        $allowedExt = array("jpg", "jpeg", "JPEG", "png", "gif", "JPG", "PNG", "GIF");
                                        $filename = $_FILES['clientPhoto']['name'];
                                        $mypicExt = pathinfo($filename, PATHINFO_EXTENSION);
                                        $path = 'Adminpanel/images/localphotos/'.$filename;
                                        
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
            
                                        $regQry = "INSERT INTO localflight(`clientPhoto`, `fullName`, `email`, `address`, `location`, `departure`, `arrive`, `gender`, `age`, `phone`) 
                                        VALUES ('". $path ."','". $fullname ."', '". $email ."', '". $from ."', '". $to ."', '". $departure ."','". $Return ."','". $gender ."','". $Age ."','". $tellphone ."')";
                                        $reg = mysqli_query($cn, $regQry);
                                        if ($reg) {
                                            echo "<script>alert('Client Registered Successfully...');</script>";
                                            echo "<script>window.location.href='index.php';</script>";
            
                                        } else {
                                            echo "<script>alert('Client Registration Failed...');</script>";
            
                                            }
                                        }
                                    }
                                    else
                                        echo "<script>alert('Return date can not be earlier than departure date!');</script>";
                                        //echo"Return date can not be earlier than departure date";
                                    }
                                    else{
                               
                                        
                                  
							//echo "<script>alert('Register Button Clicked');</script>";
                            $allowedExt = array("jpg", "jpeg", "JPEG", "png", "gif", "JPG", "PNG", "GIF");
							$filename = $_FILES['clientPhoto']['name'];
					        $mypicExt = pathinfo($filename, PATHINFO_EXTENSION);
                            $path = 'Adminpanel/images/localphotos/'.$filename;
                            
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

							$regQry = "INSERT INTO localflight(`clientPhoto`, `fullName`, `email`, `address`, `location`, `departure`, `arrive`, `gender`, `age`, `phone`) 
                            VALUES ('". $path ."','". $fullname ."', '". $email ."', '". $from ."', '". $to ."', '". $departure ."','". $Return ."','". $gender ."','". $Age ."','". $tellphone ."')";
							$reg = mysqli_query($cn, $regQry);
							if ($reg) {
								echo "<script>alert('Client Registered Successfully...');</script>";
                                echo "<script>window.location.href='index.php';</script>";

							} else {
								echo "<script>alert('Client Registration Failed...');</script>";

                                }
                            }
                        }
                    }          
                    

                        else{
                              echo "<script>alert('From and To can not be the same!');</script>";

                            //   echo " ";
                        }
                            }

                        ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>









    <?php
		include("inc/footer.php");
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

    <script src="Adminpanel/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Adminpanel/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="Adminpanel/js/sb-admin-2.min.js"></script>
</body>

</html>