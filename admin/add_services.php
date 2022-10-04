<?php     include("header.php");        ?>

<?php
if(isset($_POST['add'])){
  move_uploaded_file($_FILES['service_photo']['tmp_name'], "../images/".$_FILES['service_photo']['name']);
  $service_desc = $_POST['service_desc'];
  $policy = $_POST['policy'];
  $price = $_POST['price'];
  $kilo_price = $_POST['kilo_price'];

  $service_name = $_POST['service_name'];

  
  $query_check = "SELECT * FROM `service` where `service_name` = '$service_name' and `service_desc`='$service_desc' and `service_policy`='$policy' ";
	if($query_check = mysqli_query($conn,$query_check))
	If(mysqli_num_rows($query_check))
	{
		echo "<script>alert('This Service Exists');</script>";
   }else{
   $query = "insert into service(`service_name`,`service_desc`,`service_policy`,`service_photo`,`price`,`kilo_price`) value ('$service_name','$service_desc','$policy','{$_FILES['service_photo']['name']}','$price',$kilo_price)";
   if(mysqli_query($conn,$query)){
		 
 		echo "<script>alert('Service Added Successfully');window.location = './add_services.php';</script>";
      
  	 }else{
 		  echo "<script>alert('Service Added Faild');window.location = './add_services.php';</script>";
      }
    }


}


?>





<main id="main" class="row">

<!-- <div class="pagetitle">
  <h1>Services</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">admin</a></li>
      <li class="breadcrumb-item">Services</li>
    </ol>
  </nav>
</div> -->
<!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-11">

      <div class="card">
        <div class="card-body">
            
          <h5 class="card-header">ADD SERVICE</h5>
          <br>
          <br>


          <!-- Horizontal Form -->
          <form action = "add_services.php" method = "POST" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-4">
                <input type="text" name= "service_name" required="required" class="form-control" id="inputText">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="service_desc" required="required" id="inputEmail">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label"> Price</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="price" required="required" id="inputEmail">
              </div>
            </div>


            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">KG Price</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="kilo_price" required="required" id="inputEmail">
              </div>
            </div>


            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Policy</label>
              <div class="col-sm-4">
                <textarea type="text" class="form-control" name="policy" required="required" id="inputPassword"></textarea>
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">service photo</label>
              <div class="col-sm-4">
                <input type="file" class="form-control" required="required" name="service_photo" id="inputEmail">
              </div>
            </div>

            <!-- <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-4">
                <input type="email" class="form-control" id="inputEmail">
              </div>
            </div> -->

            <div class="text-center">
              <button type="submit" name = "add" class="btn btn-primary">ADD</button>
              <button type="reset" class="btn btn-secondary">Clear</button>
            </div>
          </form><!-- End Horizontal Form -->

        </div>
      </div>


<?php   include("footer.php");        ?>
