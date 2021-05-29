<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- the 2 lines below is needed -->
    <link href="fcf-assets/css/fcf.default.css" rel="stylesheet">
    <link href="fcf-assets/css/fcf.default-custom.css" rel="stylesheet">
    <title>Contact us</title>
</head>

<body>
    <?php
    include("inc/header.php");
    ?>
    <div class="container">
        <br><br>
        <br><br>
        <br><br>
        <div class="card">
            <br><br>
            <center>
                <h2 style="font-weight:bold; color:blue;">Contact Us form</h2>
                <!-- the lines below are needed -->
                <div class="fcf-form-wrap">

                    <div id="fcf-form">
                        <form class="fcf-form-class" method="post" nctype="multipart/form-data">
                            <div class="field">
                                <label for="Name" class="label has-text-weight-normal">Your
                                    name</label>
                                <div class="control">
                                    <input type="text" name="name" placeholder="FullName" autocomplete="off" id="Name"
                                        class="input is-full-width" maxlength="100" data-validate-field="Name" required>
                                </div>
                            </div>
                            <div class="field">
                                <label for="Email" class="label has-text-weight-normal">Your email address</label>
                                <div class="control">
                                    <input type="email" autocomplete="off" name="email" id="Email" placeholder="E-mail"
                                        class="input is-full-width" maxlength="100" data-validate-field="Email"
                                        required>
                                </div>
                            </div>
                            <div class="field">
                                <label for="Phone" class="label has-text-weight-normal">Your phone number
                                    (optional)</label>
                                <div class="control">
                                    <input type="intger" placeholder="Tellphone" name="phone" id="Phone"
                                        class="input is-full-width" maxlength="30" data-validate-field="Phone">
                                </div>
                            </div>
                            <div class="field">
                                <label for="Message" class="label has-text-weight-normal">Your message</label>
                                <div class="control">
                                    <textarea name="msg" id="Message" placeholder="Complaint OR encourage"
                                        class="textarea" maxlength="3000" rows="5" data-validate-field="Message"
                                        required></textarea>
                                </div>
                            </div>
                            <div id="fcf-status" class="fcf-status"></div>
                            <div class="field">
                                <div class="buttons">
                                    <input name="submit" type="submit" class="button is-link is-medium is-fullwidth">
                                    </button>
                                </div>
                            </div>
                            <!-- You MUST retain the attribution below -->
                            <div class="fcf-attribution">Contact Form by <a href="index.php"
                                    class="fcf-attribution-link">Sahan
                                    Travel Agency</a></div>
                        </form>
                    </div>
                    <!-- <div id="fcf-thank-you" style="display:none">
            <!-- Thank you message goes below -->
                    <strong style="color:red;">Thank you</strong>
                    <p>Thanks for contacting us, we will get back in touch with you soon.</p>
                    <!-- Thank you message goes above -->
                </div>

                <!-- <script src="fcf-assets/js/fcf.just-validate.min.js"></script>
            <script src="fcf-assets/js/fcf.form.js"></script> -->
                <!-- the lines above are needed -->
            </center>
            <br><br>
            <br>
        </div>
    </div>
    <br>
    <br><br><br><br>




    <?php
     include("Adminpanel/inc/db.php");
        // $conn=new mysqli("localhost","root","","flight");

        if (isset($_POST['submit'])){
            $username=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $msg=$_POST['msg'];
            

            $d="INSERT INTO contact (Username,Email,Mobile,Message) values('$username','$email','$phone','$msg')";
            
           
            if( $cn ->query($d)==true){
             echo "<script>alert('Your request send was Successfully...');</script>";
            }
            else
             echo "<script>alert('Your request send was Fail ...');</script>";
                //echo ("information not send.");
            }
    //hello sahal travel agency waxaa ahay macaamiil kaas oo ka helay shaqada iyo adeega aad bixisiin aad ayaa ugu ladhacay.


    ?>
    <?php
    include("inc/footer.php");
    ?>
</body>

</html>