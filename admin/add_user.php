<?php     include("header.php");        ?>

<?php
if(isset($_POST['submit'])){

 $user_name = $_POST['user_name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $add = $_POST['add'];
 $gender = $_POST['gender'];
 $pass = $_POST['pass'];

 Add_user($user_name,$phone,$email,$add,$gender,$pass);

}
?>


<?php
if(isset($_POST['submit_2'])){

 $user_name = $_POST['user_name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $add = $_POST['add'];
 $gender = $_POST['gender'];
 $pass = $_POST['pass'];

 Add_Collector($user_name,$phone,$email,$add,$gender,$pass);

}
?>



<main id="main" class="row">
<!-- <div class="pagetitle">
  <h1>Users</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">admin</a></li>
      <li class="breadcrumb-item">Users</li>
     
    </ol>
  </nav>
</div> -->

<!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-11">

      <div class="card">
        <div class="card-body">
            
          <h5 class="card-header">ADD Admin</h5>
          <br>
          <br>

          <!-- Horizontal Form -->
          <form  action="add_user.php" method="POST" >
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">User Name</label>
              <div class="col-sm-6">
                <input type="text" name="user_name" required ="required" class="form-control" id="inputText">
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-6">
                <input type="email" required ="required" name="email" class="form-control" id="inputEmail">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
              <div class="col-sm-6">
                <input type="number" class="form-control" name="phone" required ="required" id="inputEmail">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
              <div class="col-sm-6">
                <!-- <input type="email" class="form-control" id="inputEmail"> -->
                <select name="gender" required ="required" class="form-control">
                  <option value="">Select Gender</option>
                  <option value="male">Male</option>
                  <option value="fmale">Fmale</option>
                  
</select>
              </div>
            </div>   
            
            
              <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-6">
                <input type="text" required ="required" name="add" class="form-control" id="inputEmail">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-6">
                <input type="password" required ="required" name="pass" class="form-control" id="inputEmail">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End Horizontal Form -->

        </div>
      </div>



      <div class="card">
        <div class="card-body">
            
          <h5 class="card-header">ADD Collector</h5>
          <br>
          <br>

          <!-- Horizontal Form -->
          <form  action="add_user.php" method="POST" >
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">User Name</label>
              <div class="col-sm-6">
                <input type="text" name="user_name" required ="required" class="form-control" id="inputText">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-6">
                <input type="email" required ="required" name="email" class="form-control" id="inputEmail">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="phone" required ="required" id="inputEmail">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
              <div class="col-sm-6">
                <!-- <input type="email" class="form-control" id="inputEmail"> -->
                <select name="gender" required ="required" class="form-control">
                  <option value="">Select Gender</option>
                  <option value="male">Male</option>
                  <option value="fmale">Fmale</option>
                  
</select>
              </div>
            </div>          
              <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-6">
                <input type="text" required ="required" name="add" class="form-control" id="inputEmail">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-6">
                <input type="password" required ="required" name="pass" class="form-control" id="inputEmail">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" name="submit_2" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form>
          
          <!-- End Horizontal Form -->

        </div>
      </div>






<?php   include("footer.php");        ?>
