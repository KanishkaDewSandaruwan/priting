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
              <div class="pt-4"><a class="btn btn-sm btn-outline-primary me-3" href="#">GET ORDER</a></div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-black py-8 pt-0" id="store">

        <div class="bg-holder" style="background-image:url(<?php echo $image_src2; ?>);background-position:left bottom;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container-lg">
          <div class="row flex-center">
            <div class="col-6 order-md-0 text-center text-md-start"></div>
            <div class="col-sm-10 col-md-6 col-lg-6 text-center text-md-start">
              <div class="col-4 position-relative ms-auto py-5"></div>
              <div class="carousel slide carousel-fade" id="carouselExampleFade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row h-100">
                      <div class="col-12">

                        <h5 class="fs-3 fs-lg-5 lh-sm text-uppercase">About US</h5>
                        <p class="my-4 pe-xl-5"><?php echo $row5['description']; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-0 pb-6" id="collections">
        <div class="container-fluid">
          <div class="row h-100">
            <div class="col-lg-7 mt-7">
              <h5 class="fs-3 fs-lg-5 lh-sm mb-0 text-uppercase">Our Service</h5>
            </div>
            <div class="col-12">
              <nav>
                <div class="nav nav-tabs watch-tabs mb-4 justify-content-end" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-latest-tab" data-bs-toggle="tab" data-bs-target="#nav-latest" type="button" role="tab" aria-controls="nav-latest" aria-selected="true">Services </button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-latest" role="tabpanel" aria-labelledby="nav-latest-tab">
                  <div class="carousel slide" id="carouselLatest" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row h-100 align-items-center">
                          <?php 
                            $service_query="SELECT * FROM service";
                            $query2 = mysqli_query($con,$service_query); 
                            $count = 0;

                            while ($row6 = mysqli_fetch_assoc($query2)) { 
                            $productimage = $row6['image'];
                            $productimage_src = "upload/service/".$productimage; 


                            if ($row6['available'] == "Yes") { ?>
                          <div class="col-sm-6 col-md-4 mb-3 mb-md-0 mt-2">
                            <div class="card bg-black text-white p-6 pb-8"><img class="card-img" style="height: 260px" src="<?php echo $productimage_src; ?>" alt="..." />
                              <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary"> RS. <?php echo $row6['price']; ?> | <?php echo $row6['unit']; ?></h6>
                                <h4 class="text-light"><?php echo $row6['title']; ?></h4>
                              </div><a class="stretched-link" href="more.php?service_id=<?php echo $row6['service_id']; ?>"></a>
                            </div>
                          </div>
                        <?php }  $count++;  } ?>

                        </div>
                      </div>



                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="py-0 pb-6" id="gallery">
        <?php require_once "gallery_page.php"; ?>
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