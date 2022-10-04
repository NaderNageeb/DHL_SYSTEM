<?php   include("header.php");        ?>

<?php

$get_admins = Get_admins();
$get_users = Get_users();

?>
<?php

if(isset($_GET['del_id'])){
  $del_user = $_GET['del_id'];

 Del_user($del_user);

}
?>


<main id="main" class="main">

<!-- <div class="pagetitle">
  <h1>Services</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item">Manage Services</li>
    </ol>
  </nav>
</div> -->
<!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Manage Users</h5>
        
<table class="table datatable" >
<!-- <table class="table table-borderless datatable" > -->

  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">User Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <?php 
  while ($rows = mysqli_fetch_array($get_admins)) {
    # code...
  ?>
  <tbody>
    <tr>
      <td><?php echo $rows['admin_id'];  ?></td>
      <td><?php echo $rows['admin_name'];  ?></td>
      <td><?php echo $rows['phone'];  ?></td>
      <!-- <t><?php // echo $rows['email'];  ?></td> -->
      <td><?php echo $rows['address'];  ?></td>
      <td><?php echo $rows['email'];  ?></td>

      <!-- <td></td> -->

    </tr>
  </tbody>
  <?php } ?>
</table>

</div>
</div>

</div>
</div>


      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Customer List</h5>
        
<table class="table table-bordered datatable" >
<!-- <table class="table table-borderless datatable" > -->

  <thead>
    <tr>
    <th scope="col">#id</th>
      <th scope="col">User Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php 
  while ($rows = mysqli_fetch_array($get_users)) {
    # code...
  ?>
  <tbody>
    <tr>
    <td><?php echo $rows['user_id'];  ?></td>
      <td><?php echo $rows['F_Name'].' '.$rows['L_Name'];  ?></td>
      <td><?php echo $rows['phone'];  ?></td>
      <!-- <t><?php // echo $rows['email'];  ?></td> -->
      <td><?php echo $rows['Address'];  ?></td>
      <td><?php echo $rows['Email'];  ?></td>
      <td><a href = "manage_users.php?del_id=<?php echo $rows['user_id']; ?>" class="badge bg-danger">Delete</td></a>

    </tr>
  </tbody>
  <?php  } ?>
</table>

</div>

</div>


        </div>
      </div>
    </div>

  </div>
</section>

</main><!-- End #main -->

















<?php   include("footer.php");        ?>

