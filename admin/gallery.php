<?php require_once "header.php" ?>
 <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
<nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Home</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="index.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="customer.php">
                                        <span class="pcoded-micon"><i class="fas fa-user"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Customer</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="service.php">
                                        <span class="pcoded-micon"><i class="fas fa-photo-video"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Service</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.php">
                                        <span class="pcoded-micon"><i class="fas fa-images"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Gallery</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="order.php">
                                        <span class="pcoded-micon"><i class="fas fa-calendar-week"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Orders</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="message.php">
                                        <span class="pcoded-micon"><i class="fas fa-envelope"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Message</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Settings</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="setting.php">
                                        <span class="pcoded-micon"><i class="fas fa-cog"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Settings</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="fas fa-user bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4>Gallery</h4>
                                                        <span>Gallery List</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.php">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="">Gallery</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <div class="page-body">
                                        <div class="row">
                                            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
                                        </div>
                                    </div>

                                    <div class="page-body">
                                        <div class="row">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                        <div class="col-md-12 mt-4" style="font-family: \"Times New Roman\",Times, serif; font-size: 25px;">
                                                        <div class="card">
                                                            <div class="table-responsive">
                                                               <table class="table v-middle">
                                                                    <thead>
                                                                        <tr class="bg-dark">
                                                                            <th class="border-top-0 text-white">Image</th>
                                                                            <th class="border-top-0 text-white">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <?php 
                                                                    $count=1;
                                                                    $viewquery = " SELECT * FROM galary";
                                                                    $viewresult = mysqli_query($con,$viewquery);

                                                                     ?>
                                                                    <tbody>
                                                                      <?php while($row = mysqli_fetch_assoc($viewresult)) { 
                                                                        $image = $row['galary_image'];
                                                                        $image_src = "../upload/gallery/".$image;
                                                                        ?>
                                                                        <tr>
                                                                            <td><img style="width: 50%; height: auto" src='<?php echo $image_src; ?>'></td>
                                                                            <td><a style="text-decoration: none; color: red; font-size: 20px;" href="delete.php?image_id=<?php echo $row['image_id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a></td>
                                                                        </tr>
                                                                        <?php   $count++;  }?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                <h1 style="font-family: \"Times New Roman\",Times, serif; text-align:center" class ="text-primary text-center" >Add New Image</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">

                    <br>
                      Select Galary image to upload:<br>
                        <input type="file" name="file" /><br><br>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    <?php
                        if(isset($_POST['submit'])){

                          if(isset($_FILES['file']) && !empty($_FILES['file']['name'])) { 
                                $file = $_REQUEST['file'];

                                $name = $_FILES['file']['name'];
                                $target_dir = "../upload/gallery/";
                                $target_file = $target_dir . basename($_FILES["file"]["name"]);
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                $extensions_arr = array("jpg","jpeg","png","gif");

                                        if (in_array($imageFileType,$extensions_arr)) {

                                                move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

                                                $q1="INSERT INTO galary(galary_image) values('$name')";
                                                      $res1=mysqli_query($con,$q1);
                                                      if ( $res1)
                                                      {

                                                           echo '<script>alert("Image adding to Gallery is Scussessfully.");window.location.href="gallery.php"; </script>';
                                                      }else{
                                                        echo "<script>alert(\"Image adding to Gallery is Not Scussess\");</script>";
                                                      }

                                        }
                                      
                          }else{
                            echo "<script>alert(\"Please Select image to upload\");</script>";
                          }
                      } ?>
                  </div>
                </form>
              </div>
            </div>

<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
</body>

</html>
