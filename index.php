<?php include('include/header.php');    ?>
<?php $get_service = Get_service();          ?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="include/img/green-logistic.jpg" style="height: 700px;"  alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For Your <span class="text-primary">Logistics</span> Solution</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2"></p>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="include/img/g0-core-covid.jpg" style="height: 700px;" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For Your <span class="text-primary">Transport</span> Solution</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2"></p>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="include/img/images1.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                    <h1 class="mb-5">Quick Transport and Logistics Solutions</h1>
                    <p class="mb-5">When Adrian Dalsey, Larry Hillblom and Robert Lynn founded DHL in 1969, they didn’t know they would revolutionize the world of logistics. Today, DHL is the world’s leading logistics company. Our 400,000 people in over 220 countries and territories work every day to help you cross borders, reach new markets and grow your business.
                         Or simply send a letter to your loved ones.</p>
                    <!-- <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                            <h5>Global Coverage</h5>
                            <p class="m-0"></p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                            <h5>On Time Delivery</h5>
                            <p class="m-0"></p>
                        </div>
                    </div> -->
                    <!-- <a href="" class="btn btn-primary py-3 px-5">Explore More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Services</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4">

            <?php while($rows = mysqli_fetch_array($get_service)) {?>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="images/<?php echo $rows['service_photo']; ?>"  alt="">
                        </div>
                        <?php if(isset($_SESSION['user_id'])){ ?>
                        <a  href="service_detils.php?service_id=<?php echo $rows['service_id'];    ?>" h4 class=""><?php echo $rows['service_name'];   ?></a>
                        <?php }else{ ?>
                            <a  href="login.php" h4 class=""><?php echo $rows['service_name'];   ?></a>

                            <?php } ?>

                        <p><?php echo $rows['service_desc'];   ?></p>
                        <p> Service Price : <?php echo $rows['price'];   ?> $</p>
                        <p> KG Price : <?php echo $rows['kilo_price'];   ?> $</p>

                        
                        

                    </div>
                </div>
<?php } ?>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">IMPORTANT INFORMATION</h6>
                    <h1 class="mb-5">We Are Trusted Logistics Company Since 1990</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <i class=""></i>
                        <div class="ms-4">
                            <h5>Green Logistics</h5>
                            <p class="mb-0">By the year 2050 we want to reduce all logistics-related emissions to zero – a highly ambitious goal. Our mission as the leading mail and logistics company is to connect people and improve lives.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                        <i class=""></i>
                        <div class="ms-4">
                            <h5>Our Divisions</h5>
                            <p class="mb-0">DHL connects people in over 220 countries and territories worldwide. Driven by the power of more than 400,000 employees, we deliver integrated services and tailored solutions for managing and transporting letters, goods and information.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <i class=""></i>
                        <div class="ms-4">
                            <h5>Insights and Innovation</h5>
                            <p class="mb-0">To enable collaboration, the company brings together customers, research and academic institutions, industry partners, and logistics experts within the DHL business divisions. As a thought leader in the logistics industry, DHL structurally invests in trend research and solution development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="include/img/glo.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
    <!-- Testimonial End -->
    <?php include('include/footer.php');    ?>

