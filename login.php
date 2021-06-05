<?php require_once 'connection.php';  
session_start();
?>
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
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
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
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" method="POST">
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" name="uname" class="form-control" placeholder="Your Email Address">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="pass" class="form-control" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                    <a href="register.php" class="btn_3">Create an Account</a>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="text-inverse text-left"><b>Rasika Printers Authentication</b></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="img/logo.jpeg" width="100px" alt="small-logo.png">
                                    </div>
                                </div>

                            </div>
                            <?php if(isset($_POST['submit'])) {

                                    $uname = stripslashes($_REQUEST['uname']);
                                    $password = stripslashes($_REQUEST['pass']);

                                    $signin = "SELECT * FROM customer WHERE email ='$uname' AND password ='".md5($password)."'";
                                    $result3 = mysqli_query($con,$signin) or mysqli_errno();
                                    $rows4 = mysqli_num_rows($result3);
                                    $row1 = mysqli_fetch_assoc($result3);
                                    
                                    if($rows4==1){
                                        if ($row1['email'] == 'admin') {

                                            $id = $row1['email'];
                                            $_SESSION['username']=$id;
                                            echo "<script type=\"text/javascript\">window.location.href='admin/index.php'; </script>";
                                        }else{

                                            $id = $row1['customer_id'];
                                            $_SESSION['customer_id']=$id;
                                            echo "<script type=\"text/javascript\">window.location.href='index.php'; </script>";
                                        }
                                    }
                                    else{

                                        echo "<script>alert(\"Username or Password is incorrect.\");window.location.href=\"login.php\";</script>";
                                    }
                                } ?>
                        </form>
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
