<!DOCTYPE html>
<?php
	session_start();
?>
<html lang="en">

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
    <script src="scss/jQuery.js"></script>
    <style>
    h2 {
        font-size: 34px;
        text-align: center;
        padding-top: 350px;
        font-family: Pacifico;
    }
    </style>
    <script>
    $(document).ready(function() {

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
                url: "chechUpdateUser.php",
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

<body class="bg-gradient-success">
    <?php
    
    include("inc/db.php");
    //   $id=$_GET['voterID'];


error_reporting(0);
$id=$_GET['id'];
$fname=$_GET['fn'];
$uname=$_GET['un'];
$utype=$_GET['ut'];
$address=$_GET['ad'];
$gender=$_GET['gn'];
$psword=$_GET['ps'];
$photo=$_GET['ph'];
$quest=$_GET['que'];
$ans=$_GET['ans'];
    ?>
    <br>

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-10">
            <div class="card-body p-0" width="100">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-5 d-none d-lg-block bg-gradient-primary">
                        <h2 class="h5 mb-8 text-white">Profile Update</h2>
                    </div>
                    <div class="col-lg-7 " class="center">
                        <div class=" p-4">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update Profile?</h1>
                                <!-- <button type="submit" name="submit" id="fetchData"
                                    class="btn btn-primary btn-user btn-6 col-lg">Fetch_Data_
                                    User</button> -->

                            </div>
                            <div align="left">

                                <img src="<?php echo ("$photo")?>" id="target" height=" 204px" width=" 204px"><br><br>
                            </div>
                            <form class="user" class="forms-sample" style="font-size:large;" action="#" method="POST"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="ReporterName">Upload user Photo</label>
                                    <input type="file" name="userPhoto" value="<?php echo ("$photo")?>"
                                        class=" form-control col-sm-3" id="src" required>
                                </div>
                                <div class="form-group ">
                                    <input style="font-size:medium;" type="text" name="Fname"
                                        class="form-control form-control-user" value="<?php echo ("$fname")?>"
                                        id="exampleLastName" placeholder="Fullname" required>
                                </div>

                                <div class="form-group">
                                    <input style="font-size:medium;" type="text" name="uname" id="usName"
                                        value="<?php echo ("$uname")?>" class="form-control form-control-user"
                                        placeholder="username" required>
                                    <span id="userAvailablitity"></span>
                                </div>

                                <div class="form-group">
                                    <input style="font-size:medium;" type="text" name="addr"
                                        value="<?php echo ("$address")?>" class="form-control form-control-user"
                                        id="exampleInputEmail" placeholder="Address" required>
                                </div>
                                <div class="form-group  row">
                                    <div class="col-md-6 mb-5 mb-sm-0">
                                        <label class="col-md-5" for="">Gender: </label>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="radio" name="gender" id="gender" value="<?php echo("$gender")?>"
                                            checked><?php echo("$gender")?>
                                    </div>
                                </div>
                                <div class=" form-group col-sm-6">
                                    <label for="">User type: </label>
                                    <select name=" usertype" class="col-sm-6">
                                        <option value="<?php echo ("$utype")?>" selected><?php echo ("$utype")?>
                                        </option>

                                        <option value="Normal">Normal</option>

                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="">Confirm Question: </label>
                                    <select name="question" class="form-control col-sm-8">
                                        <option value="<?php echo ("$quest")?>" selected><?php echo ("$quest")?>
                                        </option>
                                        <option value="What is your nickname">What is your nickname</option>
                                        <option value="What is your mother's name ">What is your mother's name</option>

                                    </select>
                                </div>


                                <div class="form-group ">
                                    <input type="text" style="font-size:medium;" name="answer"
                                        class="form-control form-control-user" value="<?php echo ("$ans")?>"
                                        id="exampleLastName" placeholder="Confirm Answer" autocomplete="off" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="pword" value="<?php echo ("$psword")?>"
                                            class="form-control form-control-user" id="pass1" placeholder="Password"
                                            maxlength="12">
                                        <span id="passStrength"></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="cofirm" value="<?php echo "$psword";?>"
                                            class="form-control form-control-user" id="confirmPass"
                                            placeholder="Repeat Password">
                                    </div>
                                </div>
                                <!-- href="index.php" class="btn btn-primary btn-user btn-block col-lg" -->
                                <button type="submit" name="register" id="RegisterUser"
                                    class="btn btn-success btn-user btn-block col-lg">Update
                                    profile</button>
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
							$usertype  = mysqli_real_escape_string($cn, $_POST['usertype']);
							$uname    = mysqli_real_escape_string($cn, $_POST['uname']);
                            $addr    = mysqli_real_escape_string($cn, $_POST['addr']);
                            $gender  = mysqli_real_escape_string($cn, $_POST['gender']);
							$passw    = mysqli_real_escape_string($cn, $_POST['pword']);
                            $question= mysqli_real_escape_string($cn, $_POST['question']);
                            $answer= mysqli_real_escape_string($cn, $_POST['answer']);
                            $status = "Active";
                           $id=$_GET['id'];

                            //UPDATE `users` SET `userID`=[value-1],`fullName`=[value-2],`userType`=[value-3],`userName`=[value-4],`userAddress`=[value-5],`gender`=[value-6],`password`=[value-7],`userPhoto`=[value-8],`status`=[value-9],`regDate`=[value-10] WHERE 1

							$regQry = "UPDATE users SET `fullName`='". $fullname ."',`userType`='".$usertype."',`userName`=
                            '".$uname ."',`userAddress`='".$addr."',`gender`='" .$gender ."',`password`='". $passw ."',`userPhoto`=
                            '". $path ."',`status`='".$status."',`question`='".$question."',`answer`='".$answer."'WHERE userID='".$id."'";
							$reg = mysqli_query($cn, $regQry);
							if ($reg) {
								echo "<script>alert('Updating profile Successfully...');</script>";
                                if($_SESSION['uidd']=="$id"){
                                   echo "<script>window.location.href='index.php';</script>";

                                }else{
                                   echo "<script>window.location.href='userList.php';</script>";
                                    }
							} else {
								echo "<script>alert('Updating profile was Failed...');</script>";

							    }
						    }else{
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
    // $(`input[name="gender"][value="${}"]`).prop("checked", true);
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