<?php   include("header.php");        ?>

<?php
if(isset($_GET['service_id'])){

    $req_id =  $_GET['service_id'];
    $get_shipping = Get_service_detil($req_id);
}
?>


<?php

if(isset($_POST['submit']))
{

  $service_id = $_POST['service_id'];
  $service_name = $_POST['service_name'];
  $price = $_POST['price'];
  $kg_price = $_POST['kg_price'];
  $policy = $_POST['policy'];
  $service_desc = $_POST['service_desc'];

  Update_service($service_id,$service_name,$price,$kg_price,$policy,$service_desc);
}







?>





<main id="main" class="main">
<section class="section">
      <div class="row">
        <div class="col-lg-14">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Service Detils</h5>


              <form action = "" method="POST">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="service_name" value="<?php echo $get_shipping['service_name']; ?>" id="inputText">
                  </div>
                </div>


     <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Discription</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="service_desc" value="<?php echo $get_shipping['service_desc']; ?>" id="inputText">
                  </div>
                </div>


                
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="price" value="<?php echo $get_shipping['price']; ?>" id="inputText">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">KG Price</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kg_price" value="<?php echo $get_shipping['kilo_price']; ?>" id="inputText">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Policy </label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="policy" value="<?php echo $get_shipping['service_policy']; ?>" id="inputText">
                  </div>
                </div>
                
        



<input type="hidden" class="form-control" name="service_id" value="<?php echo $get_shipping['service_id'];?>" id="inputText">



                <center>
<button type="submit" class="badge bg-success" name="submit" value=""  >UPDATE</button>


                <!-- <a href="Shipping_requests.php?approve_id=<?php //echo $get_shipping['request_id'];?>&user_id=<?php //echo $get_shipping['user_id']; ?>" class="badge bg-success">Approve</a>
                 <a href="Shipping_requests.php?reject_id=<?php //echo $get_shipping['request_id'];?>&user_id=<?php // echo $get_shipping['user_id']; ?>" class="badge bg-danger" >Reject</a> -->
</center>
</form>
                

</div>
</div>
</div>
</div>
</div>

















































<?php   include("footer.php");        ?>
