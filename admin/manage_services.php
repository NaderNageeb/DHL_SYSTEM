<?php   include("header.php");        ?>

<?php $get_service = Get_service();          ?>


<?php
if(isset($_GET['del_id'])){

$del_id = $_GET['del_id'];

global $conn;

$sqli = "UPDATE `service` SET `service_del` = 1 where `service_id`=$del_id"; 

$query = mysqli_query($conn,$sqli);
if($query){

	echo "<script>alert('Updated Successfully');window.location = 'manage_services.php';</script>";

}else
echo "<script>alert('Updated Feild');</script>";
echo $sqli;




}







?>








<main id="main" class="main">

<div class="pagetitle">
  <h1>Services</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item">Manage Services</li>
      <!-- <li class="breadcrumb-item active">Tooltips</li> -->
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Services</h5>
        
<table class="table table-secondary table-light datatable" >
<!-- <table class="table table-borderless datatable" > -->

  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Service Name</th>
      <th scope="col">Descroption</th>
      <th scope="col">Policy</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <?php while($rows = mysqli_fetch_array($get_service)) {
    
    ?>
  <tbody>  
  <tr>
      <td><?php echo $rows['service_id'];     ?></td>
      <td><?php echo $rows['service_name'];     ?></td>
      <td><?php echo $rows['service_desc'];     ?></td>
      <td>    <?php echo $rows['service_policy'];     ?></td>
      <td><img src="../images/<?php echo $rows['service_photo']; ?>" alt="Image" width="50" height="50"></td>
      
      <!-- <td><span class="badge bg-primary">EDIT</span> -->
      <td><a href="edit_service.php?service_id=<?php echo $rows['service_id'];?>" target="_blank" class="badge bg-primary">EDIT</a>

      <!-- <span class="badge bg-danger">DELETE</span> -->
      <a href="manage_services.php?del_id=<?php echo $rows['service_id'];?>" class="badge bg-danger">DELETE</a>
    
    </td>
      

    
   
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

