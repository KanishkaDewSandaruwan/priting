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
                                                        <h4>Service</h4>
                                                        <span>Service List</span>
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
                                                        <li class="breadcrumb-item"><a href="">Service</a>
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
                                                                            <th class="border-top-0 text-white">Title</th>
                                                                            <th class="border-top-0 text-white">Description</th>
                                                                            <th class="border-top-0 text-white">Unit</th>
                                                                            <th class="border-top-0 text-white">Price</th>
                                                                            <th class="border-top-0 text-white">Available</th>
                                                                            <th class="border-top-0 text-white">Image</th>
                                                                            <th class="border-top-0 text-white">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <?php 
                                                                    $count=1;
                                                                      $viewquery = " SELECT * FROM service";
                                                                      $viewresult = mysqli_query($con,$viewquery);

                                                                     ?>
                                                                    <tbody>
                                                                      <?php while($row = mysqli_fetch_assoc($viewresult)) { 

                                                                            $image = $row['image'];
                                                                            $image_src = "../upload/service/".$image;?>
                                                                        <tr>
                                                                            <td><?php echo $row['title']; ?></td>
                                                                            <td><?php echo $row['description']; ?></td>
                                                                            <td><?php echo $row['unit']; ?></td>
                                                                            <td><?php echo $row['price']; ?></td>
                                                                            <td><?php echo $row['available']; ?></td>
                                                                            <td><img width="100px" src='<?php echo $image_src; ?>'></td>
 
                                                                            <td>
                                                                              <div class="dropdown">
                                                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                  Action
                                                                                </button>
                                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                  <a class="dropdown-item" href="edit_service.php?service_id=<?php echo $row['service_id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                                                                                  <a class="dropdown-item" href="delete.php?service_id=<?php echo $row['service_id']; ?>"><i class="fas fa-trash-alt"></i> Delete</a>
                                                                                </div>
                                                                              </div>
                                                                            </td>
                                                                        </tr>
                                                                        <?php   $count++; } ?>
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
                <h1 style="font-family: \"Times New Roman\",Times, serif; text-align:center" class ="text-primary text-center" >Add New Service</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Title</b></label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                      </div>
                    </div>

                     <label for="title" class="a"><b>About Description</b></label><br><br>
                    <textarea id="summernote" name="editordata"></textarea>
                        <script>
                          $('#summernote').summernote({
                            placeholder: 'Details About this Package',
                            tabsize: 2,
                            height: 120,
                            toolbar: [
                              ['style', ['style']],
                              ['font', ['bold', 'underline', 'clear']],
                              ['color', ['color']],
                              ['para', ['ul', 'ol', 'paragraph']],
                            ]
                          });
                        </script><br><br>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Unit</b></label>
                        <input type="text" class="form-control" name="unit" placeholder="Unit">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Price</b></label>
                        <input type="number" class="form-control" name="price" placeholder="Price">
                      </div>
                    </div>

                    <br>
                      Select Service Image to upload:<br>
                        <input type="file" name="file" /><br><br>
                    
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="inputState"><b>Availability</b></label>
                        <select id="inputState" name="available" class="form-control">
                          <option selected></option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                      </div>

                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
                                    <?php
                                    if(isset($_POST['submit'])){
                                      if(isset($_FILES['file']) && !empty($_FILES['file']['name'])) { 

                                      $title = $_REQUEST['title'];
                                      $desc = $_REQUEST['editordata'];
                                      $unit = $_REQUEST['unit'];
                                      $price = $_REQUEST['price'];
                                      $available = $_REQUEST['available'];

                                      $name = $_FILES['file']['name'];
                                      $target_dir = "../upload/service/";
                                      $target_file = $target_dir . basename($_FILES["file"]["name"]);
                                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                      $extensions_arr = array("jpg","jpeg","png","gif");

                                            if(!empty($title)){
                                              if(!empty($desc)){
                                                if(!empty($unit)){
                                                    if(!empty($price)){
                                                        if(!empty($available)){

                                                                  $q4 = "SELECT * FROM service WHERE title='$title'";
                                                                  $res4 = mysqli_query($con,$q4);

                                                                  if(mysqli_num_rows($res4)>0)
                                                                  {
                                                                    echo '<script>alert("Product Service Alrady Saved.");
                                                                    </script>';
                                                                  }
                                                                  else{
                                                                    if (in_array($imageFileType,$extensions_arr)) {

                                                                            move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

                                                                            $q1="INSERT INTO service(title,description,unit,price,image,available) values('$title','$desc','$unit','$price','$name','$available')";
                                                                                  $res1=mysqli_query($con,$q1);
                                                                                  if ( $res1)
                                                                                  {

                                                                                       echo '<script>alert("Service Save is Scussessfully.");window.location.href="service.php"; </script>';
                                                                                  }else{
                                                                                    echo "<script>alert(\"Service Save is Not Scussess\");</script>";
                                                                                  }

                                                                    }
                                                                  }
                                                            }else{ echo "<script>alert(\"Please Select Availability\"); window.location.href='service.php';</script>";}
                                                        }else{ echo "<script>alert(\"Please Enter Price\"); window.location.href='service.php';</script>";}
                                                    }else{ echo "<script>alert(\"Please Enter Unit\"); window.location.href='service.php';</script>";}
                                                }else{ echo "<script>alert(\"Please Enter Service Description\"); window.location.href='service.php';</script>";}
                                              }else{ echo "<script>alert(\"Please Enter Service Title\"); window.location.href='service.php';</script>";}
                                      }else{ echo "<script>alert(\"Please Select Image\"); window.location.href='service.php';</script>";}
                                  } ?>
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
