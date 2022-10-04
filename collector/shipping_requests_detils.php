<?php   include("header.php");        ?>

<?php
if(isset($_GET['request_id'])){

    $req_id =  $_GET['request_id'];
    $get_shipping = Get_shipping_detils($req_id);
}

?>




<?php
if(isset($_POST['approve'])){
     $approve_id = $_POST['request_id'];
    $user_id = $_POST['user_id'];
    // $feedback = 'Your Rqeuest has been Approved !! Thank You For Choosing DHL';
   $admin_id = $_SESSION['col_id'];

   Approve_notification($approve_id,$user_id,$admin_id);
}
?>



<?php
if(isset($_POST['arrived'])){
     $approve_id = $_POST['request_id'];
    $user_id = $_POST['user_id'];
    // $feedback = 'Your Rqeuest has been Approved !! Thank You For Choosing DHL';
   $admin_id = $_SESSION['col_id'];

   Arrived($approve_id,$user_id,$admin_id);
}
?>













<?php
if(isset($_POST['reject'])){
     $approve_id = $_POST['request_id'];
    $user_id = $_POST['user_id'];
    $feedback = 'Your Rqeuest has been Rejected For violating company regulations !! Thank You For Choosing DHL';
   $admin_id = $_SESSION['col_id'];

   Reject_notification($approve_id,$user_id,$feedback,$admin_id);
}

?>



<main id="main" class="main">
<section class="section">
      <div class="row">
        <div class="col-lg-14">

          <div class="card"  id="printMe">
            <div class="card-body">
              <h5 class="card-title">Shipping Detils</h5>


              <form action = "" method="POST">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Shipping Date</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" readonly value="<?php echo $get_shipping['ship_date']; ?>" id="inputText">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Customer Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" readonly value="<?php echo $get_shipping['F_Name'].' '.$get_shipping['L_Name'] ; ?>" id="inputText">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Customer Phone</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" readonly value="<?php echo $get_shipping['phone']; ?>" id="inputText">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Customer Address</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" readonly value="<?php echo $get_shipping['Address']; ?>" id="inputText">
                  </div>
                </div>

                <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Service</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" readonly value="<?php echo $get_shipping['service_name']; ?>" id="inputText">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">To</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" readonly value="<?php echo $get_shipping['rec_cun']; ?>" id="inputText">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Shipping Type</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" readonly value="<?php echo $get_shipping['shipp_type']; ?>" id="inputText">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Total Price</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" readonly value="<?php echo $get_shipping['total_price']; ?>" id="inputText">
                  </div>
                </div>



                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Receiver Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" readonly value="<?php echo $get_shipping['rec_name']; ?>" id="inputText">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Receiver Address</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" readonly value="<?php echo $get_shipping['rec_add']; ?>" id="inputText">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Receiver Phone</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" readonly value="<?php echo $get_shipping['rec_phone']; ?>" id="inputText">
                  </div>
                </div>
               <button id="toggleButton" onclick="printDiv('printMe');" class="btn btn-success active">Print Form</button>

                <?php
//if($get_shipping['admin_feedback']!==0){
?>
                <!-- <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Notification</label>
                  <div class="col-sm-4">

                  <select class="form-control" name="feedback" required  readonly="readonly" disabled="disabled" >
                    <option value="<?php //echo $get_shipping['admin_feedback'];  ?>" selected><?php //echo $get_shipping['admin_feedback'];  ?></option>
                  </select>
                     <input type="text" class="form-control" name="feedback" value="<?php //echo $get_shipping['admin_feedback'];?>" id="inputText"> 
                     </div>
                </div> -->
<?php
//}
 ?>


<?php
//if($get_shipping['status']==1){
?>
                <!-- <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Sign To </label>
                  <div class="col-sm-4">

                  <select class="form-control" name="col_id" required >
                  <option value=""> Select Collector</option> -->
<?php                          
// global $conn;
// $sql = "SELECT * FROM `collectors` where col_del = 0";
// if($query = mysqli_query($conn,$sql)){
//   while ($row = mysqli_fetch_array($query)) {
?>
                    

                    <!-- <option value="<?php //echo $row['collecter_id'];  ?>"><?php //echo $row['col_user_name'];  ?></option> -->

                    <?php
                    //   }
                    // }
                    
                    ?>
                  <!-- </select> -->
                     <!-- <input type="text" class="form-control" name="feedback" value="<?php //echo $get_shipping['admin_feedback'];?>" id="inputText"> -->
                     <!-- </div>
                </div> -->
<?php
//}
 ?>










                 
                

<input type="hidden" class="form-control" name="request_id" value="<?php echo $get_shipping['request_id'];?>" id="inputText">
<input type="hidden" class="form-control" name="user_id" value="<?php echo $get_shipping['user_id']; ?>"  id="inputText">

<?php
if($get_shipping['status']==1 || $get_shipping['status']==4){
?>
                <center>
<button type="submit" class="badge bg-success" name="approve" value="Approve"  >Collected</button>
<button type="submit" class="badge bg-danger" name="reject" onclick="return confirm('Reject This Request ? ')" value="Reject" >Reject</button>

                <!-- <a href="Shipping_requests.php?approve_id=<?php //echo $get_shipping['request_id'];?>&user_id=<?php //echo $get_shipping['user_id']; ?>" class="badge bg-success">Approve</a>
                 <a href="Shipping_requests.php?reject_id=<?php //echo $get_shipping['request_id'];?>&user_id=<?php // echo $get_shipping['user_id']; ?>" class="badge bg-danger" >Reject</a> -->
</center>
<?php
}
 ?>

<?php
if($get_shipping['status']==3){
?>
                <center>
<button type="submit" class="badge bg-success" name="arrived" value="Arrived">Arrived</button>
<!-- <button type="submit" class="badge bg-danger" name="reject" onclick="return confirm('Reject This Request ? ')" value="Reject" >Reject</button> -->

                <!-- <a href="Shipping_requests.php?approve_id=<?php //echo $get_shipping['request_id'];?>&user_id=<?php //echo $get_shipping['user_id']; ?>" class="badge bg-success">Approve</a>
                 <a href="Shipping_requests.php?reject_id=<?php //echo $get_shipping['request_id'];?>&user_id=<?php // echo $get_shipping['user_id']; ?>" class="badge bg-danger" >Reject</a> -->
</center>
<?php
}
 ?>










</form>
                

</div>
</div>
</div>
</div>
</div>

















































<?php   include("footer.php");        ?>
