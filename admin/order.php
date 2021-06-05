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
                                <li class="active">
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
                                <li >
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
                                                        <h4>Order</h4>
                                                        <span>Order List</span>
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
                                                        <li class="breadcrumb-item"><a href="customer.php">Order List</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-12 border border-round">
                                            <?php   
                                            $count = 0;
                                            
                                            $viewquery = " SELECT * FROM getorder";
                                            $viewresult = mysqli_query($con,$viewquery); 

                                            while($row1 = mysqli_fetch_assoc($viewresult)) { 
                                               $service_id = $row1['service_id'];
                                               $customer_id = $row1['customer_id'];

                                               $viewquery1 = " SELECT * FROM service where service_id='".$service_id."'";
                                                $viewresult1 = mysqli_query($con,$viewquery1); 
                                                $row2 = mysqli_fetch_assoc($viewresult1);

                                                $viewquery2 = " SELECT * FROM customer where customer_id='".$customer_id."'";
                                                $viewresult2 = mysqli_query($con,$viewquery2); 
                                                $row3 = mysqli_fetch_assoc($viewresult2);

                                               $image = $row2['image'];
                                               $image_src = "../upload/service/".$image;

                                               $sample_image = $row1['sample_image'];
                                               $image_src1 = "../upload/order/".$sample_image;

                                               $created_image = $row1['created_image'];
                                               $image_src2 = "../upload/order/".$created_image;?>

                                                    <h6 style="color:maroon; padding: 2%; border: 2px solid red;">Order ID #<?php echo $row1['order_id']; ?></h6>
                                            <div class="row mt-5" style="padding: 2%;  margin: 1%; color: #00394e; background-color: #f9f6f7">

                                              <div class="dropdown-divider"></div>

                                              <div class="col-md-6">
                                                <h3 style="font-weight: bold; text-transform: uppercase;">Service</h3>
                                                <p>Title : <?php echo $row2['title']; ?></p>
                                                <p>Price : Rs. <?php echo $row2['price']; ?> | <?php echo $row2['unit']; ?></p>
                                                <img width="50%" src='<?php echo $image_src; ?>'>

                                              </div>



                                              <div class="col-sm-6">
                                                <?php if ($row1['amount'] != '0') {?>
                                                <p style="color: red;">Rs. <?php echo $row1['amount']; ?></p>
                                              <?php } ?>
                                                <p>Status : <?php echo $row1['status']; ?></p>
                                                <p>Payment : <?php echo $row1['payment']; ?></p>  
                                                <p>Dedline : <?php echo $row1['dedline']; ?></p>  
                                                <p>Orderd Date : <?php echo $row1['order_date']; ?></p>
                                                <div class="dropdown-divider"></div>

                                                <p>Name : <?php echo $row3['name']; ?></p>  
                                                <p>Phone : <?php echo $row3['phone']; ?></p>
                                                <p>Email : <?php echo $row3['email']; ?></p>

                                                <?php if ($row1['sample_image'] != "Pending") { ?>
                                                    <p>Sample</p>
                                                    <img width="50%" src='<?php echo $image_src1; ?>'>
                                                <?php } ?>
                                              </div>

                                              <div class="col-sm-6">
                                                <?php if ($row1['created_image'] != "Pending") { ?>
                                                <h5 style="color: maroon; font-weight: bold; text-transform: uppercase;">Created Image </h5>
                                                    <img class="p-5" width="100%" src='<?php echo $image_src2; ?>'>
                                                <?php } ?>
                                              </div>
                                              <div class="col-sm-2 mt-5">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          Action
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <?php if ($row1['status'] == 'Accepted') { ?>
                                                            <?php if ($row1['payment'] != 'Pending') { ?>
                                                                <a class="dropdown-item" href="add_image.php?order_id=<?php echo $row1['order_id']; ?>"><i class="fas fa-image"></i> Add Created File</a>
                                                            <?php } ?>
                                                          <a class="dropdown-item" href="add_amount.php?order_id=<?php echo $row1['order_id']; ?>"><i class="fas fa-plus"></i> Add Amount</a>
                                                        <div class="dropdown-divider"></div>
                                                        <?php } ?>

                                                          <a class="dropdown-item" href="order_change.php?accept=<?php echo $row1['order_id']; ?>"><i class="fas fa-check-square"></i> Accept</a>
                                                          <a class="dropdown-item" href="order_change.php?reject=<?php echo $row1['order_id']; ?>"><i class="fas fa-window-close"></i> Reject</a>
                                                          <a class="dropdown-item" href="delete.php?order_id=<?php echo $row1['order_id']; ?>"><i class="fas fa-trash-alt"></i> Delete</a>
                                                        </div>
                                                      </div>
                                              </div>
                                            
                                            </div>
                                            <?php  $count++;
                                              
                                            
                                          }
                                       ?>

                          </div>`
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
