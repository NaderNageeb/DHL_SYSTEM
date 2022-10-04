<?php include('admin/function.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DHL SUDAN </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="include/img/DHL-icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <!-- <link href="include/css/google.font.css?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" crossorigin> -->

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS and datatable Files -->
  <link href="include/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="include/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="include/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="include/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="include/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="include/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="include/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- Vendor CSS and datatable Files -->

    <!-- Icon Font Stylesheet -->
    <link href="include/css/all.min.css" rel="stylesheet">
    <link href="include/css/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="include/lib/animate/animate.min.css" rel="stylesheet">
    <link href="include/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="include/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="include/css/style.css" rel="stylesheet">
</head>

<body>
 
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-warning navbar-light shadow border-top sticky-top p-0 "  >
        <a href="index" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-yellow"><img src="include/img/DHL-Symbol.png" width="200px" height="100px" style="border:none;" alt=""   ></h2>
            
            
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <?php    
                if (isset($_SESSION['user_id'])) {         ?>
                <a href="shipments">
                          <a class="nav-link nav-icon"  href="shipments">
            <i  class="bi bi-bell"></i>
            <span  class="badge bg-primary badge-number"><?php include("include/user_notification");    ?></span> </a>
            </a> 
            <!-- End Notification Icon -->
                    <a href="#" class="nav-item nav-link" style="color:red;">Welcome <?php echo $_SESSION['user_name'];   ?> </a>

                    <a href="index" class="nav-item nav-link ">Home</a>
                    <a href="about" class="nav-item nav-link">About</a>
                    <a href="service" class="nav-item nav-link">Services</a>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                    <a href="shipments" class="nav-item nav-link">Shipments</a>

                    <a href="logout" class="nav-item nav-link">Logout</a>

       <?php }else{ ?>
                <a href="index" class="nav-item nav-link ">Home</a>
                <a href="about" class="nav-item nav-link">About</a>
                <a href="service" class="nav-item nav-link">Services</a>
                <a href="register" class="nav-item nav-link">Register</a>
                <a href="contact" class="nav-item nav-link">Contact</a>
                <a href="login" class="nav-item nav-link">login</a>
           
<?php } ?>
</div>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="price" class="dropdown-item">Pricing Plan</a>
                        <a href="feature" class="dropdown-item">Features</a>
                        <a href="quote" class="dropdown-item">Free Quote</a>
                        <a href="team" class="dropdown-item">Our Team</a>
                        <a href="testimonial" class="dropdown-item">Testimonial</a>
                        <a href="404" class="dropdown-item">404 Page</a>
                    </div>
                </div> -->

            <!-- <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-headphones text-primary me-3"></i>+012 345 6789</h4> -->
        </div>
    </nav>
    <!-- Navbar End -->
