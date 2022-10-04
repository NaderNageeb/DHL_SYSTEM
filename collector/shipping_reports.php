<?php   include("header.php");        ?>

<?php
if(isset($_POST['submit'])){

   $user_name = $_POST['user_name'];
   $date = $_POST['date'];
   $date2 = $_POST['date2'];
   $status = $_POST['status'];
if($user_name == "" && $date == "" && $status == "" && $date2 == ""){

echo "<script>alert('No Thing Selected'); </script>";
$get_requests = Get_reports($user_name,$date,$status,$date2);
}else{

  $get_requests = Get_reports($user_name,$date,$status,$date2);

}


}

?>



<main id="main" class="main">

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Shipping Reports</h5>

          <form  action="" method="POST" >

          <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Customer Name</label>
              <div class="col-sm-4">
                <input type="text"  name="user_name" class="form-control" id="inputEmail">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Shipping Date From</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" name="date"  id="inputEmail">
              </div>
            </div>


            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Shipping Date To</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" name="date2"  id="inputEmail">
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-4">
                <!-- <input type="email" class="form-control" id="inputEmail"> -->
                <select name="status"  class="form-control">
                  <option value="">Select Status</option>
                  <option value="0">Pending</option>
                  <option value="1">Approved</option>
                  <option value="2">Rejected</option>
                  <option value="3">Collected</option>
                  <option value="4">Rejected By Collactor</option>
                  <option value="5">Arrived</option>

</select>
              </div>
            </div>   
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-primary">Search</button>
              <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
            </div>
          </form>

<br>
<br>
<br>


<?php    
if(isset($_POST['submit'])){

?>
        <div id="printMe">
<table class="table  datatable"  >
<!-- <table class="table table-borderless datatable" > -->

  <thead>
    <tr>
      
    <th scope="col">Service</th>
      <th scope="col">Customer</th>

      <th scope="col">Shipment</th>
      <th scope="col"> TO </th>
      <!-- <th scope="col">Receiver</th> -->
      <!-- <th scope="col">Receiver Phone</th> -->
      <th scope="col">Shipment Date</th>
      <th scope="col">Status</th>

      <!-- <th scope="col">Action</th> -->
    </tr>
  </thead>
  <?php
while ($rows = mysqli_fetch_array($get_requests)) {
  // if(mysqli_num_rows($rows > 0))
?>
  <tbody>
    <tr>
    <td><?php echo $rows['service_name'];     ?></td>
    <td><?php echo $rows['F_Name'] .' '.$rows['L_Name'] ;     ?></td>
    <td><?php echo $rows['shipp_type'] ;     ?></td>

    <td><?php echo $rows['rec_cun'].' '.$rows['rec_add'];     ?></td>
    <td><?php echo $rows['ship_date'];     ?></td>
    <td><?php
        if ($rows['status']==0) {?>
          <span class="badge bg-warning">Pending</span>
      <!-- <a href="Shipping_requests_detils.php?request_id=<?php //echo $rows['request_id'];?>&user_id=<?php //echo $rows['user_id']; ?>" class="badge bg-warning">Pending</a> -->
          <?php
        }if($rows['status']==1){
          echo '<span class="badge bg-success">Approved</span>';
        }if($rows['status']==2){
          echo '<span class="badge bg-danger">Rejected</span>';
        }if($rows['status']==3){
          echo '<span class="badge bg-primary">Collected</span>';
        }if($rows['status']==5){
          echo '<span class="badge bg-success">Arrived</span>';
        }
        if($rows['status']==4){
          echo '<span class="badge bg-danger">Rejected By Collactor</span>';
        }
?>
      <a href="report_detils.php?request_id=<?php echo $rows['request_id'];?>" target="_blank" class="badge bg-warning">Details</a>


</td>
    
      
      <!-- <td> -->

        
      <!-- <a href="Shipping_requests.php?approve_id=<?php // echo $rows['request_id'];?>&user_id=<?php //echo $rows['user_id']; ?>" class="badge bg-success">Approve</a> -->
      <!-- <a href="Shipping_requests.php?reject_id=<?php //echo $rows['request_id'];?>&user_id=<?php //echo $rows['user_id']; ?>" class="badge bg-danger">Reject</a> -->
    
    
    <!-- </td> -->
    
  </tbody>
  <?php  } 

  ?>
</table>
      </div>
<center><button id="toggleButton" onclick="printDiv('printMe');" class="btn btn-success active">Print Table</button></center>
</div>
<?php

      }

?>
</div>
<script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
  

	</script>

        </div>
      </div>

    </div>

  </div>
</section>

</main><!-- End #main -->



<?php   include("footer.php");        ?>

