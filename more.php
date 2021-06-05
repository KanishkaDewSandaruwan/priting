<?php require_once 'connection.php'; 
session_start();
        // require_once 'admin.php'; 
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>RASIKA PRINTERS</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo.jpeg">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo.jpeg">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo.jpeg">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.jpeg">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="img/logo.jpeg">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <?php $viewquery = "SELECT * FROM about";
        $viewresult = mysqli_query($con,$viewquery);
        $row5 = mysqli_fetch_assoc($viewresult); 

        $about_image = $row5['image'];
        $image_src2 = "upload/home/".$about_image;
        ?>
    <main class="main" id="top">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="index.php"><span class="text-light fs-2 fw-bold ms-2">HOME</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-2"><a class="nav-link fw-bold active" aria-current="page" href="index.php#collections">SERVICE</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="index.php#store">ABOUT US</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="index.php#gallery">GALLERY</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="contact.php">CONTACT</a></li>
              <?php if (isset($_SESSION['customer_id'])) { ?>
                <li class="nav-item px-2"><a class="nav-link fw-bold" href="myOrder.php">MY ORDERS</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="profile.php">PROFILE</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="logout.php">LOGOUT</a></li>
            <?php }else{ ?>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="login.php">LOGIN</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="register.php">REGISTER</a></li>
            <?php } ?>
            </ul>
            <form class="d-flex"><a class="text-primary" href="#!">
                <svg class="feather feather-phone-call" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg></a>
              <div class="ms-4 text-light fw-bold">+94 <?php echo $row5['phone']; ?></div>
            </form>
          </div>
        </div>
      </nav>

            <?php 
            $home_query = "SELECT * FROM details";
            $home_query_result = mysqli_query($con, $home_query);
            $row = mysqli_fetch_assoc($home_query_result);
            $bottom_banner_01 = $row['header_image'];
            $image_src1 = "upload/home/".$bottom_banner_01; ?>
      <section class="py-0" id="header">
        <div class="bg-holder" style="background-image:url(<?php echo $image_src1; ?>);background-position:right top;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center min-vh-75 min-vh-xl-100">
            <div class="col-md-8 col-lg-6 text-md-start text-center">
              <h1 class="display-1 lh-sm text-uppercase text-light"><?php echo $row['header_title']; ?></h1>
            </div>
          </div>
        </div>
      </section>


      <section class="py-0 pb-6" id="collections">
        <div class="container">
                    <?php 
                    $service_id = $_REQUEST['service_id'];
                    $hadware_product="SELECT * FROM service where service_id = '$service_id'";
                    $query2 = mysqli_query($con,$hadware_product); 
                    $count = 0;
                    if ($row4 = mysqli_fetch_assoc($query2)) { 
                    $productimage = $row4['image'];
                    $productimage_src = "upload/service/".$productimage; ?>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-12">
                  <div class="product_img_slide owl-carousel">
                      <div class="single_product_img">
                          <img src="<?php echo $productimage_src; ?>" alt="#" class="img-fluid">
                      </div>
                  </div>
                </div>
                <div class="col-lg-8">
                <div class="single_product_text text-center mt-5">
                    <h1><?php echo $row4['title']; ?></h1>
                    <h4 style="color: red;"><?php echo $row4['price']; ?> | <?php echo $row4['unit']; ?></h4>
                    <p><?php echo $row4['description']; ?></p>
                        
                    <div class="card_area">
                        <div class="add_to_cart">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" onclick="window.location.href = 'makeOrder.php?service_id=<?php echo $row4['service_id']; ?>' ">ORDER THIS SERVICE</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        <?php } ?>
            </div>
      </section>








      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 pt-7" id="contact">

        <div class="container-fluid">
          <div class="border-bottom border-700"></div>
          <div class="row flex-center my-3">
            <div class="col-md-6 order-1 order-md-0">
              <p class="my-2 text-800 text-center text-md-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. Rasika Printers <br> Created By : ADIPATHTHU W.A.M.I.S. SEU/IS/16/MIT/107
              </p>
            </div>
            <div class="col-md-6">
              <div class="text-center text-md-end">
                <a href="<?php echo $row5['facebook']; ?>"><span class="me-4" data-feather="facebook"></span></a>
                <a href="<?php echo $row5['instragram']; ?>"> <span class="me-4" data-feather="instagram"></span></a>
                <a href="<?php echo $row5['twiter']; ?>"> <span class="me-4" data-feather="twitter"></span></a></div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&amp;display=swap" rel="stylesheet">
  </body>

</html>