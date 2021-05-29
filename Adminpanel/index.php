<?php
	session_start();

     include("inc/db.php");

           if (isset($_POST['login'])) { 

                    $un = mysqli_real_escape_string($cn, $_POST['uname']);
					$ps = mysqli_real_escape_string($cn, $_POST['passw']);
                    // $username = $_POST['uname'];
                    // $password = $_POST['passw'];
					$logQry = "SELECT * FROM users WHERE userName = '". $un ."' AND password = '". $ps ."' and status = 'Active'";
					$logIN = mysqli_query($cn, $logQry);
					$res = mysqli_fetch_array($logIN);
					$counResult = mysqli_num_rows($logIN);
					
					if ($counResult > 0) {
						//echo "<script>alert('Login Successfully')</script";
                        // function  cookies(string $user, int $pass ){
                        //     // $user=$_POST['uname'];
                        //     // $pass=$_POST['passw'];
                        //     if (isset($_POST['rememberme'])){
                        //     setcookie( $user,$pass, time() + 60*60*24*30);
                        //     }
                        // }
                        
						$_SESSION['uidd'] = $res[0];
                        $_SESSION['fname'] = $res[1];
						$_SESSION['username'] = $res[3];
						$_SESSION['userPhoto'] = $res[7];
                        $_SESSION['password'] = $res[6];
						$_SESSION['userType'] = $res[2];
                         if (isset($_POST['rememberme'])){
                            setcookie($_SESSION['username'],$_SESSION['password'], time() + 60*60*24);
                         }

         
                        if($_SESSION['userType']=='Admin'){

                         echo "<script>window.location.href = 'home.php' </script>";

                        }else  {
                      
                        echo "<script>window.location.href = 'Profile.php' </script>";
                        
                        }  
                   
                    } else {
                        echo "<script>alert('Username or Password is incorrect')</script>";   
                        }

           }     

    ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sahan Travel Login page</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="scss/jQuery.js"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    h2 {
        font-size: 34px;
        text-align: center;
        padding-top: 200px;
        font-family: Pacifico;
    }
    </style>
</head>

<body class="bg-gradient-primary">
    <?php
    
   
    
    ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-gradient-warning">
                                <h2 class="h5 mb-8 text-white">LogIn Page</h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LogIn!</h1>
                                    </div>
                                    <form class="user" action="#" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="uname" class="form-control form-control-user"
                                                id="exampleInputEmail" placeholder="UserName" autocomplete="off"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="passw" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" required>
                                        </div>
                                        <div class="form-group" style="padding-bottom: 30px;">
                                            <div class="custom-control custom-checkbox small">
                                                <!-- <input type="checkbox" class="custom-control-input" id="customCheck"
                                                    onclick="myFunction()"> -->

                                                <!-- <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label> -->
                                                <!-- </div> -->
                                                &nbsp;<input type="checkbox" name="rememberme" id="rememberme"
                                                    value="">&nbsp;&nbsp;
                                                Remember Me
                                            </div>

                                        </div>
                                        <div class="mt-3">
                                            <input type="submit" name="login" value="Login Now!"
                                                class="btn btn-warning btn-user btn-block" />
                                        </div>
                                        <!-- bg-gradient-warning<a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> -->
                                        <hr>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgetpassword.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="createAccount.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>