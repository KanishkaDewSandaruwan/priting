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
                                                        <h4>Add Created</h4>
                                                        <span>Add Created List</span>
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
                                                        <li class="breadcrumb-item"><a href="service.php">Order</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="">Add Created</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <div class="page-body">
                                        <div class="row">
                                                <div class="col-md-8">
                                                     <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">


                                                            <br>
                                                              Select Creted Image to upload:<br>
                                                                <input type="file" name="file" /><br><br>
                                                            

                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-dark" onclick="window.location.href = 'order.php' ">Back</button>
                                                            <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                                                          </div>
                                                        </form>

                                                        <?php
                                                         if(isset($_POST['submit'])){

                                                            $id = $_REQUEST['order_id'];

                                                            $name = $_FILES['file']['name'];
                                                            $target_dir = "../upload/order/";
                                                            $target_file = $target_dir . basename($_FILES["file"]["name"]);
                                                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                                            $extensions_arr = array("jpg","jpeg","png","gif");

                                                              if( in_array($imageFileType,$extensions_arr) ){
                                                                  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                                                                  $query="UPDATE getorder SET created_image='$name' where order_id='".$id."'";
                                                                  mysqli_query($con,$query);
                                                                  echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"order.php\";</script>";
                                                              }
                                                        } ?>
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
