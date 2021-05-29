<!DOCTYPE html>
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
        padding-top: 200px;
        font-family: Pacifico;
    }
    </style>
    <script>
    $(document).ready(function() {
        $("#pass").keyup(function() {
            var passOne = $(this).val();

            if (passOne == "") {
                $("#passStrength").html("<span></span>");

            } else if (passOne.length >= 1 && passOne.length <= 3) {
                $("#passStrength").html(
                    "<span class='badge badge-danger' style='margin-top: 5px; font-size: 14px;'><b>Password is very weak</span>"
                );
            } else if (passOne.length >= 6 && passOne.length <= 7) {
                $("#passStrength").html(
                    "<span class='badge badge-info' style='margin-top: 5px; font-size: 14px;'><b>Password is medium</span>"
                );
            } else {
                $("#passStrength").html(
                    "<span class='badge badge-success' style='margin-top: 5px; font-size: 14px;'><b>Password is strong</span>"
                );
            }
        });
        $("#confirmPass").keyup(function() {
            var pass1 = $("#pass").val();
            var confPassw = $(this).val();

            if (confPassw == "") {
                $("#confPs").html("<span></span>");
                $("#ChangeP").prop("disabled", false);
            } else if (pass1 != confPassw) {
                $("#confPs").html(
                    "<span class='badge badge-danger' style='margin-top: 5px; font-size: 14px;'><b>Password mismatch</span>"
                );
                $("#ChangeP").prop("disabled", true);
            } else {
                $("#confPs").html(
                    "<span class='badge badge-success' style='margin-top: 5px; font-size: 14px;'><b>Password matched</span>"
                );
                $("#ChangeP").prop("disabled", false);
            }
        });
    });
    </script>
</head>


<body class="bg-gradient-warning">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-primary">
                                <h2 class="h5 mb-8 text-white">Forgot Your Password?</h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your username and password
                                            below and we'll send you a link to reset your password!</p>
                                    </div>


                                    <form class="user" action="#" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="name"
                                                name="uname" placeholder="username" required autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <label for="Age">Confirm Question</label>
                                            <select name="question" class="form-control col-sm-8"
                                                id="exampleInputUsername1">

                                                <option value="What is your mother's name">What is your mother's name
                                                </option>
                                                <option value="What is your nickname" selected>What is your nickname
                                                </option>

                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <input type="text" name="answer" class="form-control form-control-user"
                                                id="" placeholder="Confirm Answer" autocomplete="off" required>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-md-0">
                                                <input type="password" name="pword"
                                                    class="form-control form-control-user" id="pass"
                                                    placeholder="Password" maxlength="12">
                                                <span id="passStrength"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" name="cofirm"
                                                    class="form-control form-control-user" id="confirmPass"
                                                    placeholder="Repeat Password">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="pass"
                                                name="pword" placeholder="password" maxlength="12" required>
                                            <span id="passStrength"></span>
                                        </div> -->
                                        <button type="submit" name="change" id="ChangeP"
                                            class="btn btn-primary btn-user btn-block col-lg">Reset Password</button>

                                        <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">   
                                        </a> -->
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php

    include("inc/db.php");

    if(isset($_POST['change'])){

        $uname= mysqli_real_escape_string($cn, $_POST['uname']);
        $pword= mysqli_real_escape_string($cn, $_POST['pword']); 
        $question=mysqli_real_escape_string($cn, $_POST['question']);
        $answer=mysqli_real_escape_string($cn, $_POST['answer']);

        $checkQry = "SELECT * FROM users WHERE userName = '". $uname ."'and question ='".$question."' and answer='".$answer."'" ;
        $checkEx =  mysqli_query($cn, $checkQry);
        if($checkEx){

            $countU = mysqli_num_rows($checkEx);
	
           if ($countU > 0) {
                $updte= ("UPDATE users SET password = '". $pword ."'  where userName= '".$uname."'");
                $updteEX = mysqli_query($cn, $updte);

                if($updteEX==true){
                    echo "<script>alert('password change successfully...');</script>";
                    echo "<script>window.location.href='index.php';</script>";
                }else
                    echo "<script>alert('password change faill...');</script>";

            }
            else{
                   echo "<script>alert('username or Question Answer are Incorrect...');</script>"; 
                }


        }
        else{
              
                echo "<script>alert('database Error Occur...');</script>";
            }
        
    }
    

?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>