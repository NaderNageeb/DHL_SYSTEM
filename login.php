<?php include('include/header.php');    ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Login</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Login</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
<?php    
if(isset($_POST['login'])){
$email = $_POST['email'];
$pass = $_POST['pass'];

Login_user($email,$pass);
}

?>




    <!-- Register Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3"></h6>
                    <h1 class="mb-5">LOGIN</h1>
                    <!-- <p class="mb-5"> </p> -->
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
                        <form action="login.php"  method="POST">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="email" class="form-control border-0" name="email" required ="required" placeholder="Your Email" style="height: 55px;">
                                </div>
                                   <div class="col-12">
                                <input type="password" class="form-control border-0" required ="required" name="pass" placeholder="Password" style="height: 55px;" >
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name="login" type="submit">Login</button>
                                </div>
                                <div class="col-12">
                      <p class="small mb-0">I Dont Have Account? <a href="register.php">Registration</a></p>
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
