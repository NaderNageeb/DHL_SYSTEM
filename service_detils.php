<?php include('include/header.php');    ?>

<?php

if(isset($_GET['service_id'])){
    $service_id = $_GET['service_id'];
   $get_service = Get_service_detils($service_id);
}else {?>
    <script>window.location = 'index.php';</script>

    <?php
}

?>

<?php
if (isset($_POST['submit'])) {
    $user_id  = $_SESSION['user_id'];
    $service_id  = $_POST['service_id'];
    $type = $_POST['type'];

    $rec_coun = $_POST['rec_coun'];
    $rec_add = $_POST['rec_add'];
    $rec_phone = $_POST['rec_phone'];
    $date = $_POST['date'];
    $service_price = $_POST['service_price'];
    $kilo_price = $_POST['kilo_price'];
    $rec_name = $_POST['rec_name'];
    $kilo_user = $_POST['kilo_user'];

    $total_1 = $kilo_user * $kilo_price;

    $total = $total_1 + $service_price;

    

    
    User_request($rec_name,$user_id,$service_id,$type,$rec_coun,$rec_add,$rec_phone,$date,$total);

}



?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Service Detils</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Service</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">service_detils</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


  <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                    <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="" id="message" Readonly="Readonly" style="height: 100px"></textarea>
                                        <label for="message"><h5>Policy : </h5>
                                         <p><h4><?php echo '<pre>'. $get_service['service_policy'] .'<pre>' ;   ?></h4></p></label>
                                    </div>
                                </div>
                        <img class="position-absolute img-fluid w-100 h-50" src="images/<?php echo $get_service['service_photo'];   ?>" style="object-fit: cover;" alt="">
                        
                    </div>
                    
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <h6 class="text-secondary text-uppercase mb-3">About Us</h6> -->
                    <h1 class="mb-5"><?php echo $get_service['service_name'];   ?></h1>
                    <p class="mb-5"><?php echo $get_service['service_desc'];   ?></p>

                    <div class="col-md-8">
                        <form action = "service_detils.php?service_id=<?php echo $service_id; ?>" method="POST">
                      


                                    <div class="form-floating" >
                                        <input type="text" class="form-control" name="type" required="required"  id="name" placeholder="">
                                        <label for="name">Type Of Shipment</label>
                                    </div>
                                </div>
                                <br>

                                
                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="rec_name" required="required" placeholder="">
                                        <label for="email">Receiver Name</label>
                                    </div>
                                </div>
<br>
                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="rec_coun" required="required" placeholder="">
                                        <label for="email">Receiver Country</label>
                                    </div>
                                </div>
                                <br>
                                
                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="rec_add" id="email" required="required" >
                                        <label for="email">Receiver Address</label>
                                    </div>
                                </div>
                                <br>

                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" required="required" name="rec_phone">
                                        <label for="email">Receiver Phone</label>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" class="form-control"  required="required" value="<?php echo $_GET['service_id'];  ?>"  name="service_id"  >

                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" min="<?php echo date("Y-m-d");    ?>" required="required" max="2030-12-31"  name="date"  >
                                        <label for="email">Shipment Date</label>
                                    </div>
                                </div>
                                <br>

                                <div class="col-md-8">
                                    <div class="form-floating">
                                        <input type="text" id="service_price"  value="<?php   echo $get_service['price'];    ?>"  readonly="readonly" class="form-control"  required="required"   name="service_price"  >
                                        <label for="email">Service Price</label>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-8">
                        <!-- <form action = "service_detils.php?service_id=<?php //echo $service_id; ?>" method="POST"> -->
                        <div class="form-floating" > 
                                        <!-- <input type="text" class="form-control" id="mySelect" onchange="myFunction()" name="kilo_user" required="required"  id="name" placeholder=""> -->
                                        <select class="form-control" id="mySelect"  onchange="myFunction()" name="kilo_user" required="required">
                                            <option value ="" selected>Select Weight </option>
                                            <?php  for ($i=1; $i < 1000; $i++) { ?>
                                                
                                                <option value="<?php echo $i;  ?>"><?php echo $i;  ?> Kg</option>
<?php
                                           }            ?>

<p id="demo"><span> </span> </p>

                                        </select>
                                        <label for="name">Shipment Weight </label>
                                    </div>
                                </div>






                                <br>
                                
                                <div class="col-md-8">
                                    <div class="form-floating">
                                <input type="text" value= "<?php echo $get_service['kilo_price']; ?>"readonly="readonly" class="form-control"  required="required"   name="kilo_price"  >
                                <label for="email">KG Price</label>
                                    </div>
                                </div>
<br>
<h2>  Total : <span id="msg"> </span></h2>
                    <!-- <p class="mb-5" id="msg" ></p> -->
                    <!-- <h2>Grand Total<span ></span></h2> -->
            <input type="hidden" id="gtotal" value="<?php echo $get_service['kilo_price'];  ?>" >
<?php
// $kilo_price = $get_service['kilo_price'];
// $service_price = $get_service['price'];
// //$user_kilo = $_POST['kilo_user'];
// $total_1 = $user_kilo * $kilo_price;
// $total = $total_1 + $service_price; 

?>
            <!-- <input type="hidden" name="total_price" value="<?php //echo $total;  ?>" > -->

                                
                                <br>


                                    <script>
function myFunction() {
    var y,z,x,total,Msg;
    // y = user select
 y = document.getElementById("mySelect").value;
// z = kilo price
 z=document.getElementById("gtotal").value;
//x = service price
 x=document.getElementById("service_price").value;

 total_1=(parseInt(z)*parseInt(y));

 total=(parseInt(total_1)+parseInt(x));

 
//  Msg=document.getElementById("msg").innerHTML = total + " " + "SDG ";

 Msg=document.getElementById("msg").innerHTML = total + " " + "$";

 
  var b = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "Delivery Charge: " + b  + " " +"SDG ";

  
}

</script>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" onclick="return confirm('You Agree For DHL Policy ?')" name="submit" type="submit">Get Service</button>
                                </div>
</form>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->







    <!-- Team End -->
        
    <?php include('include/footer.php');    ?>