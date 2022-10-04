<?php include('include/header.php');    ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Registeration</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Registeration</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<?php
if (isset($_POST['register'])) {
 $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $add = $_POST['add'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
     $email = $_POST['email'];
      $pass = $_POST['pass'];
       $country = $_POST['country'];
       $date = $_POST['date'];
       $query_check = "SELECT * FROM users where `email` = '$email' and `F_Name` = '$f_name' ";
       	if($query_check = mysqli_query($conn,$query_check))
       	If(mysqli_num_rows($query_check))
       	{
       	echo "<script>alert('This User Exists');</script>";
       	}
       	else{
               
       		 $query = "insert into users(`F_Name`,`L_Name`,`Email`,`phone`,`Address`,`Gender`,`country`,`birth_of_date`,`Pass`)
       		values ('$f_name','$l_name','$email','$phone','$add','$gender','$country','{$date}','$pass')";
       	 if(mysqli_query($conn,$query)){
                
       		echo "<script>alert('Registration Successfully');window.location = './login.php';</script>";
       	 }else{
       		  echo "<script>alert('Registration Faild');</script>";
       		  echo $query;
       	 }
       	}
           

 //Register($f_name,$l_name,$add,$phone,$gender,$email,$pass,$country,$date);

 }


?>

    <!-- Register Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3"></h6>
                    <h1 class="mb-5">Registeration Now !!</h1>
                    <p class="mb-5"></p>
                    <div class="d-flex align-items-center">
                        <i class=""></i>
                        <div class="ps-4">
                            <h6>Call for any Help!</h6>
                            <h3 class="text-primary m-0">+012 345 6789</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <form action="register.php"  method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" onkeydown="return /[a-z]/i.test(event.key)"  name="f_name" required ="required" placeholder="Your First Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="l_name" onkeydown="return /[a-z]/i.test(event.key)"  required ="required" placeholder="Your Last Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" name="email" required ="required" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="number" class="form-control border-0" name="phone" required ="required" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0"  name="gender" required ="required" style="height: 55px;">
                                        <option value="">Gender</option>
                                        <option value="male">Male</option>
                                        <option value="fmale">Fmale</option>
                                        
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" required ="required" name="add" placeholder="Address" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                  <input type="date" class="form-control border-0" min="1970-01-01"  max="2000-12-31" required ="required" name="date" placeholder="Birth Date" style="height: 55px;">Birth Date
                                </div>
                                <div class="col-12 col-sm-6">
                                <input type="country" class="form-control border-0" required ="required" onkeydown="return /[a-z]/i.test(event.key)"  name="country" placeholder="country" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                <input type="password" class="form-control border-0" required ="required" name="pass" placeholder="Password" style="height: 55px;">
                                </div> 
                            
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name="register" type="submit">Register</button>
                                </div>
                                
                                <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register End -->
        
    <?php include('include/footer.php');    ?>
