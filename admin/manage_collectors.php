<?php   include("header.php");        ?>

<?php

$get_admins = Get_admins();
$get_users = Get_users();
$get_col  = Get_collectors();

?>
<?php

if(isset($_GET['del_id'])){
 
 $del_user = $_GET['del_id'];

 Del_user_col($del_user);

}
?>


<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Manage collectors</h5>
        
<table class="table datatable" >
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
  while ($rows = mysqli_fetch_array($get_col)) {
    # code...
  ?>
  <tbody>
    <tr>
      <td><?php echo $rows['collecter_id'];  ?></td>
      <td><?php echo $rows['col_user_name'];  ?></td>
      <td><?php echo $rows['col_phone'];  ?></td>
      <!-- <t><?php // echo $rows['email'];  ?></td> -->
      <td><?php echo $rows['col_address'];  ?></td>
      <td><?php echo $rows['col_email'];  ?></td>
      <td>
      <a href = "manage_collectors.php?del_id=<?php echo $rows['collecter_id']; ?>" class="badge bg-danger">Delete</a>
      <a href = "edit_collectors.php?col_id=<?php echo $rows['collecter_id']; ?>" class="badge bg-primary" target="_blank">Edit</a>

      </td>

    </tr>
  </tbody>
  <?php } ?>
</table>

</div>
</div>

</div>
</div>

        </div>
      </div>
    </div>

  </div>
</section>

</main><!-- End #main -->

















<?php   include("footer.php");        ?>

