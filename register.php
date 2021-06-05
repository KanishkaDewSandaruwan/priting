<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>RASIKA PRINTERS - Login</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" href="img/logo.jpeg" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="admin/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="admin/assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>
    <!-- Pre-loader end -->
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="signup-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" method="POST">
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up. It is fast and easy.</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="address" placeholder="Your Address">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Your Phone Number">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nic" placeholder="Your NIC Number">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email Address">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="pass" placeholder="Choose Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="confpass" placeholder="Confirm Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now.</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
                                        <p class="text-inverse text-left"><b>Your Authentication Team</b></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="img/logo.jpeg" width="50px" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php 

                                            if (isset($_POST['submit'])) {

                                                $name = $_REQUEST['name'];
                                                $email = $_REQUEST['email'];
                                                $address = $_REQUEST['address'];
                                                $phone = $_REQUEST['phone'];
                                                $nic = $_REQUEST['nic'];
                                                $psaaword = $_REQUEST['pass'];
                                                $conpw = $_REQUEST['confpass'];

                                                $query2="SELECT * FROM customer WHERE email='$email'";
                                                $sql2=mysqli_query($con,$query2);

                                                $query3="SELECT * FROM customer WHERE phone='$phone'";
                                                $sql3=mysqli_query($con,$query3);

                                                $query4="SELECT * FROM customer WHERE nic='$nic'";
                                                $sql4=mysqli_query($con,$query4);

                                                if (empty($name)) {

                                                    echo "<script>alert(\"Plese Enter Your Name.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($email)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter Your Email.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($address)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter Your address.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($phone)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter Your Phone Number.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($nic)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter Your NIC Number.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($psaaword)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter New Password.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($conpw)) {
                                                    
                                                    echo "<script>alert(\"Plese confirm Your Password.\");window.location.href=\"register.php\";</script>";
                                                
                                                }
                                                elseif (!preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)) {

                                                    echo "<script>alert(\"Plese Enter Valid Phone Number.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif ($psaaword!=$conpw) {
                                                    
                                                    echo "<script>alert(\"Password is Not Match.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (mysqli_num_rows($sql2)>0) {
                                                
                                                    echo "<script>alert(\"Email already Exsisted.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (mysqli_num_rows($sql3)>0) {
                                                    
                                                    echo "<script>alert(\"Phone Number already Exsisted.\");window.location.href=\"register.php\";</script>";
                                                }
                                                elseif (mysqli_num_rows($sql4)>0) {
                                                
                                                    echo "<script>alert(\"NIC Number already Exsisted.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                else {

                                                    $q1="INSERT INTO customer(name,phone,email,address,password,nic) values('$name','$phone','$email','$address','".md5($psaaword)."','$nic')";
                                                    $res1=mysqli_query($con,$q1);

                                                    if ( $res1){
                                                        echo "<script>alert(\"congratulations! your registration was successful.\");window.location.href=\"login.php\";</script>";
                                                    }
                                                    else{
                                                        echo "<script>alert(\"Ohh Snap! your registration Fail. Plese Try Again!.\");window.location.href=\"register.php\";</script>";
                                                    }
                                                }
                                            }

                                             ?>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
	
    <script type="text/javascript" src="admin/assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="admin/assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="admin/assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="admin/assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="admin/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="admin/assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="admin/assets/js/modernizr/css-scrollbars.js"></script>
    <script type="text/javascript" src="admin/assets/js/common-pages.js"></script>
</body>

</html>
