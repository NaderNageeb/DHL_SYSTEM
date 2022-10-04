<?php include('include/header.php');    ?>
<!-- <section class="section"> -->
      <!-- Page Header Start -->
      <?php
if(isset($_GET['request_id'])){

    $request_id =  $_GET['request_id'];
   $user_id  = $_SESSION['user_id'];
    $get_shipping = Get_shipping_detils_user($request_id,$user_id);
}
?>



      <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Shippment Detils</h1>
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





    <!-- <main id="main" class="main"> -->
    <center>
<section class="section">
    
      <div class="row">
          
        <div class="col-lg-14">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Shipping Detils</h5>


              <form action = "" method="POST">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Shipping Date</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" readonly value="<?php echo $get_shipping['ship_date']; ?>" id="inputText">
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

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Notification</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" readonly value="<?php echo $get_shipping['admin_feedback']; ?>" id="inputText">
                  </div>
                </div>

                </div>

</div>

</div>

<br>
<br>
<br>
<br>



<?php include('include/footer.php');    ?>