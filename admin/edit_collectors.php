<?php   include("header.php");        ?>

<?php
if(isset($_GET['col_id'])){

    $col_id =  $_GET['col_id'];
    $get_col = Get_col_detil($col_id);
}
?>


<?php

if(isset($_POST['submit_2']))
{

    $user_name = $_POST['user_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $add = $_POST['add'];
    $gender = $_POST['gender'];
    $pass = $_POST['pass'];
    $col_id = $_POST['col_id'];

    Update_col($user_name,$phone,$email,$add,$gender,$pass,$col_id);
}







?>





<main id="main" class="main">
<section class="section">
      <div class="row">
        <div class="col-lg-14">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Collector Detils</h5>

              <form  action="" method="POST" >
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">User Name</label>
              <div class="col-sm-6">
              <input type="hidden" name="col_id"  value="<?php echo $_GET['col_id'] ;  ?>"  >  
              <input type="text" name="user_name" value="<?php echo $get_col['col_user_name']     ?>" required ="required" class="form-control" id="inputText">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-6">
                <input type="email" required ="required" value="<?php echo $get_col['col_email']     ?>" name="email" class="form-control" id="inputEmail">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $get_col['col_phone']     ?>" name="phone" required ="required" id="inputEmail">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
              <div class="col-sm-6">
                <!-- <input type="email" class="form-control" id="inputEmail"> -->
                <select name="gender" required ="required" class="form-control">
                  <option value="<?php echo $get_col['col_gender'] ; ?>"><?php echo $get_col['col_gender'];     ?></option>
                  <option value="male">Male</option>
                  <option value="fmale">Fmale</option>
                  <option value="other">Other</option>
</select>
              </div>
            </div>          
              <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-6">
                <input type="text" required ="required" value="<?php echo $get_col['col_address']     ?>" name="add" class="form-control" id="inputEmail">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-6">
                <input type="password" required ="required" value="<?php echo $get_col['col_password']     ?>" name="pass" class="form-control" id="inputEmail">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" name="submit_2" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form>
</div>
</div>
</div>
</div>
</div>

















































<?php   include("footer.php");        ?>
