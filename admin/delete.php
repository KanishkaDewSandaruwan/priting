<?php
require_once 'connection.php';

if(isset($_REQUEST['service_id']))
{
          $id = $_REQUEST['service_id'];

          $querygetcode="SELECT  * FROM service where service_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['service_id'];

            $query1="DELETE FROM service WHERE service_id='$a '";
            mysqli_query($con,$query1);

            header('location:service.php');
          
}
else if(isset($_REQUEST['m_id']))
{
          $id = $_REQUEST['m_id'];

          $querygetcode="SELECT  * FROM message where m_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['m_id'];

          $query1="DELETE FROM message WHERE m_id='$a '";
          mysqli_query($con,$query1);
          header('location:message.php');

}else if(isset($_REQUEST['order_id']))
{
          $id = $_REQUEST['order_id'];

          $querygetcode="SELECT  * FROM getorder where order_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['order_id'];

          $query1="DELETE FROM getorder WHERE order_id='$a '";
          mysqli_query($con,$query1);
          header('location:order.php');

}else if(isset($_REQUEST['image_id'])){
          $id = $_REQUEST['image_id'];

          $querygetcode="SELECT  * FROM galary where image_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['image_id'];

          $query1="DELETE FROM galary WHERE image_id='$a '";
          mysqli_query($con,$query1);
          header('location:gallery.php');
          
}

else if(isset($_REQUEST['customer_id']))
{
          $id = $_REQUEST['customer_id'];

          $querygetcode="SELECT  * FROM customer where customer_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['customer_id'];

              $query3="DELETE FROM getorder WHERE customer_id='$a'";
              mysqli_query($con,$query3);

              $query1="DELETE FROM customer WHERE customer_id='$a'";
              mysqli_query($con,$query1);

                      header('location:customer.php');
                
              
}
else{
  header('location:index.php'); 
}
?>