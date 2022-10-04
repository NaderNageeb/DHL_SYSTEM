<?php include('include/header.php');    ?>
<!-- <section class="section"> -->
      <!-- Page Header Start -->
      <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">My Shippment</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



<?php
if(isset($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];
 
 $get_user_req = Get_user_request($user_id);
}else{
  ?>
<script>window.location = 'index.php';</script>
  <?php
}
?>

<?php 

if(isset($_GET['del_id'])){

  $del_id=$_GET['del_id'];


  Del_req($del_id);

}


?>



<br>
<br>
<section class="section">

  <div class="row">
    <di class="col-lg-10">

      <div class="card" > 
        <div class="card-body" style="margin: right 30px;">
<center>

          <h5 class="card-title">My Shipments</h5>
        
<table class="table table-secondary table-light datatable" >
<!-- <table class="table table-borderless datatable" > -->

  <thead>
    <tr>
      <!-- <th scope="col">#id</th> -->
      <th scope="col">Service Name</th>
      <th scope="col">Shipment Type</th>
      <th scope="col">Receiver country</th>
      <th scope="col">Receiver Name</th>
      <th scope="col">Total Price</th>
      <!-- <th scope="col">Notification</th> -->

       <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <?php while($rows = mysqli_fetch_array($get_user_req)) {
       
    ?>
  <tbody>  
  <tr>
      <td><?php echo $rows['service_name'];     ?></td>
      <td><?php echo $rows['shipp_type'];     ?></td>
      <td><?php echo $rows['rec_cun'];     ?></td>
      <td><?php echo $rows['rec_name'];     ?></td>
      <td><?php echo $rows['total_price'];     ?> USD</td>


      <!-- <td><?php //if($rows['admin_feedback']==0)echo "No Notification"; else echo $rows['admin_feedback'];     ?></td> -->

      <td>
      <?php
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
       </td>
      <!-- <span class="badge bg-danger">DELETE</span> -->
     <!-- <td><a href="shipments.php?del_id=<?php // echo $rows['request_id']; ?>"> <span class="badge bg-danger" onclick="return confirm('Delete This Request ? ')">Delete</span> -->
     <td><a href="shipments_view.php?request_id=<?php echo $rows['request_id']; ?>"> <span class="badge bg-secondary">View</span>
    
    </td></a>
    
    </td>
      

    
   
   </tr>
  </tbody>
  <?php  } ?> 
</table>

</div>
</div>


</div>

<br>
<br>
<br>
<br>



<?php include('include/footer.php');    ?>
