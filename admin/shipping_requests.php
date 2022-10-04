<?php   include("header.php");        ?>

<?php

 $get_requests = Get_requests();

?>

<?php
if(isset($_GET['approve_id'])){
   $approve_id = $_GET['approve_id'];
   $user_id = $_GET['user_id'];

  Approve($approve_id,$user_id);
}

?>

<?php
if(isset($_GET['reject_id'])){
   $reject_id = $_GET['reject_id'];
   $user_id = $_GET['user_id'];

  Reject($reject_id,$user_id);
}

?>


<?php 

if(isset($_GET['del_id'])){

  $del_id=$_GET['del_id'];


  Del_req_admin($del_id);

}


?>







<main id="main" class="main">

<!-- <div class="pagetitle">
  <h1>Services</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item">Manage Services</li>
    </ol>
  </nav>
</div> -->
<!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Pending Shipping Requests
          </h5>
        
<table class="table  datatable  " >
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
      <!-- <th scope="col">Status</th> -->

      <th scope="col">Action</th>

    </tr>
  </thead>
  <?php
while ($rows = mysqli_fetch_array($get_requests)) {
  
?>
  <tbody>
    <tr>
    <!-- <td>Brandon Jacob</td>
    <td>Brandon Jacob</td> -->
    <td><?php echo $rows['service_name'];     ?></td>
    <td><?php echo $rows['F_Name'] .' '.$rows['L_Name'] ;     ?></td>
    <td><?php echo $rows['shipp_type'] ;     ?></td>

    <td><?php echo $rows['rec_cun'].' '.$rows['rec_add'];     ?></td>
    <td><?php echo $rows['ship_date'];     ?></td>
    <td><?php
        if ($rows['status']==0) {?>
          <!-- <span class="badge bg-warning">Pending</span> -->
      <a href="Shipping_requests_detils.php?request_id=<?php echo $rows['request_id'];?>" target="_blank" class="badge bg-warning">Detils</a>

          <?php
        }if($rows['status']==1){
          echo '<span class="badge bg-success">Approved</span>';
          ?>
          
      <a href="Shipping_requests_detils.php?request_id=<?php echo $rows['request_id'];?>" target="_blank" class="badge bg-warning">Detils</a>

<?php
        }if($rows['status']==2){
          echo '<span class="badge bg-danger">Rejected</span>';
          ?>
      <a href="Shipping_requests_detils.php?request_id=<?php echo $rows['request_id'];?>" target="_blank" class="badge bg-warning">Detils</a>
<?php
        }
?>

<a href="Shipping_requests.php?del_id=<?php echo $rows['request_id'];?>" onclick="return confirm('Delete This Request ? ')"    class="badge bg-danger" >Delete</a>

</td>
    
      
      <!-- <td>
      <a href="Shipping_requests.php?approve_id=<?php //echo $rows['request_id'];?>&user_id=<?php // echo $rows['user_id']; ?>" class="badge bg-success">Approve</a>
      <a href="Shipping_requests.php?reject_id=<?php  //echo $rows['request_id'];?>&user_id=<?php //echo $rows['user_id']; ?>" class="badge bg-danger" >Reject</a>
    </td> -->
      
    </tr>
    
  </tbody>
  <?php  } ?>
</table>

</div>

</div>

        </div>
      </div>

    </div>

  </div>
</section>

</main><!-- End #main -->



<?php   include("footer.php");        ?>

