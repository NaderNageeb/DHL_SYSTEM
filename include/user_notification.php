<?php  

if (isset($_SESSION['user_id'])) {
	$user_id =$_SESSION['user_id'];
    $conn = mysqli_connect("localhost", "root", "", "dhl");
    $sql = "SELECT COUNT(request_id) As c from requests where `user_id` = $user_id and `admin_id` !=0  and user_view = 0 and req_del = 0 ";
    $query = mysqli_query($conn, $sql);
    $values = mysqli_fetch_assoc($query);
    $num_rows = $values['c'];
    echo $num_rows;
}



	?>
