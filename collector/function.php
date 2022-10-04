<?php
session_start();
///LocalConnectionz//////
$conn = mysqli_connect("localhost","root","","dhl");

mysqli_set_charset($conn,'UTF8');
mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,'SET CHARACTER SET utf8');
if($conn){
//    echo  "connection done";
// echo $alert = alerts(1,"connection done"); 
}
else
{
	echo "Error,".mysqli_connect_error($conn);
	die;
}

$alert = '';

function alerts($type,$message)
{
	switch($type)
	{
		case 1: {$res = '<div class="alert alert-success bg-primary text-light border-0 alert-dismissible fade in" role="alert" style="text-align:center">'.$message.'</div>';break;}//Green
		case 2: {$res = '<div class="alert alert-info bg-primary text-light border-0 alert-dismissible fade in" role="alert" style="text-align:center">'.$message.'</div>';break;}//Blue
		case 3: {$res = '<div class="alert alert-warning bg-primary text-light border-0 alert-dismissible fade in" role="alert" style="text-align:center">'.$message.'</div>';break;}//Yellow
		case 4: {$res = '<div class="alert alert-danger bg-primary text-light border-0 alert-dismissible fade in" role="alert" style="text-align:center">'.$message.'</div>';break;}//Red	
	}
	return $res;
}

function Login_admin($username,$pass){
global $conn;

$sql = "SELECT * FROM `collectors` where `col_user_name` = '$username' and `col_password` = '$pass'"; 
if ($query = mysqli_query($conn, $sql)) {
	if (mysqli_num_rows($query)) {
		$row = mysqli_fetch_array($query);
		$_SESSION['col_id'] = $row['collecter_id'];
		$_SESSION['col_name'] = $row['col_user_name'];
		 header("Location:users-profile.php");


		// echo"<script>window.location = './users-profile.php';</script>";
		
	}else{
		//header("Location:index.php?wrongpass");
		// return false;
        // echo "<script>alert('Wrong User Name Or Password');window.location = './index.php';</script>";
		echo "<script>alert('Wrong User Name Or Password');</script>";
	}
}

}




function Add_user($user_name,$phone,$email,$add,$gender,$pass){

global $conn;

	 $query_check = "SELECT * FROM `admin` where `admin_name`='$user_name' ";


	if($query_check = mysqli_query($conn,$query_check))
	If(mysqli_num_rows($query_check))
	{
	 echo "<script>alert('The User Already Exists');</script>";
	//echo '<div class="alert alert-warning bg-primary text-light border-0 alert-dismissible fade in" role="alert" style="text-align:center">Exist</div>';
	}
	else{
	 $query = "insert into admin(admin_name,phone,email,address,gender,pass)
	 values ('$user_name','$phone','$email','$add','$gender','$pass')";
	 if(mysqli_query($conn,$query)){
		 
		 echo "<script>alert('User Added Successfully');window.location = 'add_user.php';</script>";
	 }else{
		  echo "<script>alert('User Added Faild');</script>";
	 }
	}
	 

}


function Add_Collector($user_name,$phone,$email,$add,$gender,$pass){

	global $conn;
	
		 $query_check = "SELECT * FROM `collectors` where `col_user_name`='$user_name' ";
	
	
		if($query_check = mysqli_query($conn,$query_check))
		If(mysqli_num_rows($query_check))
		{
		 echo "<script>alert('The Collector Already Exists');</script>";
		//echo '<div class="alert alert-warning bg-primary text-light border-0 alert-dismissible fade in" role="alert" style="text-align:center">Exist</div>';
		}
		else{
		 $query = "insert into collectors(col_user_name,col_phone,col_email,col_address,col_gender,col_password)
		 values ('$user_name','$phone','$email','$add','$gender','$pass')";
		 if(mysqli_query($conn,$query)){
			 
			 echo "<script>alert('Collector Added Successfully');window.location = 'add_user.php';</script>";
		 }else{
			  echo "<script>alert('Collector Added Faild');</script>";
		 }
		}
		 
	
	}













function Del_req($del_id){
	
	global $conn;

	$sql = "UPDATE requests set `req_del` = 1 where `request_id` = '$del_id'";
if($query = mysqli_query($conn,$sql)){
	echo "<script>alert('Deleted Successfully');window.location = './shipments.php';</script>";
}else{
	 echo "<script>alert('Deleted Faild');</script>";
}

}

function Del_user($del_user){
	global $conn;

	 $sql = "UPDATE users set `del_user` = 1 where `user_id` = $del_user";
if($query = mysqli_query($conn,$sql)){
	echo "<script>alert('Deleted Successfully');window.location = 'manage_users.php';</script>";
}else{
	 echo "<script>alert('Deleted Faild');</script>";
}

}
 
function Del_user_col($del_user){
	global $conn;

	 $sql = "UPDATE collectors set `col_del` = 1 where `collecter_id` = $del_user";
if($query = mysqli_query($conn,$sql)){
	echo "<script>alert('Deleted Successfully');window.location = 'manage_collectors.php';</script>";
}else{
	//  echo "<script>alert('Deleted Faild');</script>";
	 echo $sql;
}

}









function Approve($approve_id,$user_id){
global $conn;

$sql = "UPDATE requests set `status` = 1 where `request_id` = $approve_id and `user_id` = $user_id";
if($query = mysqli_query($conn,$sql)){
echo "<script>alert('Approved Successfully');window.location = 'shipping_requests.php';</script>";
}else{
 echo "<script>alert('Approved Faild');</script>";
}

}


function Approve_notification($approve_id,$user_id,$admin_id){
	global $conn;

	$sql = "UPDATE requests set `status` = 3  where `request_id` = $approve_id and `user_id` = $user_id and `collecter_id`= $admin_id";
	if($query = mysqli_query($conn,$sql)){
	echo "<script>alert('Collected Successfully');window.location = 'shipping_requests.php';</script>";
	}else{
	 echo "<script>alert('Collected Faild');</script>";
	 echo $sql;
	}
	
}

function Arrived($approve_id,$user_id,$admin_id){
	global $conn;

	$sql = "UPDATE requests set `status` = 5  where `request_id` = $approve_id and `user_id` = $user_id and `collecter_id`= $admin_id";
	if($query = mysqli_query($conn,$sql)){
	echo "<script>alert('Arrived Successfully');window.location = 'shipping_requests.php';</script>";
	}else{
	 echo "<script>alert('Arrived Faild');</script>";
	 echo $sql;
	}
	
}













function Reject($reject_id,$user_id){
	global $conn;
	
	$sql = "UPDATE requests set `status` = 2 where `request_id` = $reject_id and `user_id` = $user_id";
	if($query = mysqli_query($conn,$sql)){
	echo "<script>alert('Rejected Successfully');window.location = 'shipping_requests.php';</script>";
	}else{
	 echo "<script>alert('Rejected Faild');</script>";
	}
	
	}
	

function Reject_notification($reject_id,$user_id,$admin_id,$feedback){
	global $conn;

	$sql = "UPDATE requests set `status` = 4 ,`admin_feedback` = '$feedback' where `collecter_id` = $admin_id  and `request_id` = $reject_id and `user_id` = $user_id";
	if($query = mysqli_query($conn,$sql)){
	echo "<script>alert('Rejected Successfully');window.location = 'shipping_requests.php';</script>";
	}else{
	 echo "<script>alert('Rejected Faild');</script>";
	 echo $sql;
	}
	
	}





function Login_user($email,$pass){
	global $conn;

	$sql = "SELECT * FROM `users` where `Email` = '$email' and `Pass` = '$pass' and `del_user`=0"; 
	if ($query = mysqli_query($conn, $sql)) {
		if (mysqli_num_rows($query)) {
			$row = mysqli_fetch_array($query);
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['user_name'] = $row['F_Name'].' '. $row['L_Name'] ;
			//header("Location:index.php");
		echo"<script>window.location = './index.php';</script>";
			
		}else{
			//header("Location:index.php?wrongpass");
			// return false;
			// echo "<script>alert('Wrong User Name Or Password');window.location = './index.php';</script>";
			echo "<script>alert('Wrong User Name Or Password');</script>";
		}
	}
	

}


function Get_service(){
	global $conn;
$sql = "SELECT * FROM `service` where service_del  = 0 order by service_id ASC ";
if($query = mysqli_query($conn,$sql))
	{
	return $query;	
	}
else
	{
	echo $sql;die;
	}


}


function Get_user_request($user_id){
	global $conn;
$sql = "SELECT * FROM `requests`r , `service`s where r.service_id = s.service_id   and r.`user_id`= $user_id and r.req_del = 0 order by r.request_id desc ";
if($query = mysqli_query($conn,$sql))
	{
	return $query;	
	}
else
	{
	echo $sql;die;
	}

}


function Get_admins(){
	global $conn;
	$sql = "SELECT * FROM `admin`";
	if($query = mysqli_query($conn,$sql))
		{
		return $query;	
		}
	else
		{
		echo $sql;die;
		}
	
}

function Get_collectors(){
	global $conn;
	$sql = "SELECT * FROM `collectors` where col_del = 0";
	if($query = mysqli_query($conn,$sql))
		{
		return $query;	
		}
	else
		{
		echo $sql;die;
		}
	
}





function Get_users(){
	global $conn;
	$sql = "SELECT * FROM `users` where del_user = 0";
	if($query = mysqli_query($conn,$sql))
		{
		return $query;	
		}
	else
		{
		echo $sql;die;
		}
	
}


function Get_shipping_detils($req_id){

	global $conn;
	 $sql = "SELECT * FROM `requests`r,`service`s,`users`u where r.user_id = u.user_id and r.request_id = '$req_id' and r.service_id=s.service_id";
	if($query = mysqli_query($conn,$sql))
	{   
	$res  = mysqli_fetch_array($query);
	return $res;	
	}
else
	{
	echo $sql;die;
	}


}



function Get_service_detil($req_id){

	global $conn;
	$sql = "SELECT * FROM `service` where service_id = $req_id and service_del =  0";
	if($query = mysqli_query($conn,$sql))
	{   
	$res  = mysqli_fetch_array($query);
	return $res;	
	}
else
	{
	echo $sql;die;
	}


}


function Get_col_detil($col_id){

	global $conn;
	$sql = "SELECT * FROM `collectors` where collecter_id  = $col_id and col_del =  0";
	if($query = mysqli_query($conn,$sql))
	{   
	$res  = mysqli_fetch_array($query);
	return $res;	
	}
else
	{
	echo $sql;die;
	}


}


function Update_col($user_name,$phone,$email,$add,$gender,$pass,$col_id){

	global $conn;
	
	 $sqli = "UPDATE `collectors` SET `col_user_name` = '$user_name',`col_phone`= '$phone',`col_email`= '$email',`col_gender` = '$gender' ,`col_address` = '$add' , `col_password`='$pass' where `collecter_id` = '$col_id' "; 
	
	$query = mysqli_query($conn,$sqli);
	if($query){
	
		echo "<script>alert('Updated Successfully');window.location = 'manage_collectors.php';</script>";
	
	}else
	 echo "<script>alert('Updated Feild');</script>";
	echo $sqli;
	
	}
	


function Update_service($service_id,$service_name,$price,$kg_price,$policy,$service_desc){

global $conn;

$sqli = "UPDATE `service` SET `service_name` = '$service_name',`service_desc`= '$service_desc',`service_policy`= '$policy',`price` = '$price' ,`kilo_price` = '$kg_price' where `service_id`=$service_id"; 

$query = mysqli_query($conn,$sqli);
if($query){

	echo "<script>alert('Updated Successfully');window.location = 'manage_services.php';</script>";

}else
echo "<script>alert('Updated Feild');</script>";
echo $sqli;

}









function Get_shipping_detils_user($request_id,$user_id){

	global $conn;

	 $sqli = "UPDATE `requests` SET `user_view` = 1 where `request_id` = '$request_id' and `user_id` = $user_id ";
	 if($query_1 = mysqli_query($conn,$sqli)){

	$sql = "SELECT * FROM `requests`r,`service`s where r.request_id = '$request_id' and r.user_id = $user_id and r.service_id=s.service_id";
	if($query = mysqli_query($conn,$sql))
	{   
	$res  = mysqli_fetch_array($query);
	return $res;	
	}
else
	{
	echo $sql;die;
	}

	 }
}














function Get_service_detils($service_id){
	global $conn;
	$sql = "SELECT * FROM `service` where `service_id` = '$service_id'";
	if($query = mysqli_query($conn,$sql))
	{   
	$res  = mysqli_fetch_array($query);
	return $res;	
	}
else
	{
	echo $sql;die;
	}
	
}

function Admin_data($user_id){
	
	global $conn;
	$sql = "SELECT * FROM `admin` where `admin_id` = $user_id";
	if($query = mysqli_query($conn,$sql))
	{   
	$res  = mysqli_fetch_array($query);
	return $res;	
	}
else
	{
	echo $sql;die;
	}

}


function col_data($user_id){
	
	global $conn;
	$sql = "SELECT * FROM `collectors` where `collecter_id` = $user_id";
	if($query = mysqli_query($conn,$sql))
	{   
	$res  = mysqli_fetch_array($query);
	return $res;	
	}
else
	{
	echo $sql;die;
	}

}


function Get_reports($user_name,$date,$status,$date2){
	global $conn;

	$user_id = $_SESSION['col_id'];

if($user_name =="" && $date == "" && $status == "" && $date2 == ""){
	$sql = "SELECT * FROM `users` u,`requests`r , `service`s , `collectors` c where r.collecter_id = c.collecter_id and c.collecter_id = $user_id  and  r.service_id = s.service_id  and r.`user_id`= u.user_id and r.req_del = 0  ";
}	

if($user_name !="" && $date == "" && $status == "" && $date2 == ""){
$sql = "SELECT * FROM `users` u,`requests`r , `service`s , `collectors` c where r.collecter_id = c.collecter_id and c.collecter_id = $user_id  and r.service_id = s.service_id  and r.`user_id`= u.user_id and u.F_Name LIKE '%$user_name%' and r.req_del = 0  ";
}

if($user_name =="" && $date != "" && $status == "" && $date2 == ""){
	$sql = "SELECT * FROM `users` u,`requests`r , `service`s , `collectors` c where r.collecter_id = c.collecter_id and c.collecter_id = $user_id  and r.service_id = s.service_id  and r.`user_id`= u.user_id and r.ship_date = '{$date}' and r.req_del = 0  ";
}

if($user_name =="" && $date == "" && $status == "" && $date2 != ""){
	$sql = "SELECT * FROM `users` u,`requests`r , `service`s , `collectors` c where r.collecter_id = c.collecter_id and c.collecter_id = $user_id  and r.service_id = s.service_id  and r.`user_id`= u.user_id and r.ship_date = '{$date2}' and r.req_del = 0  ";
}

if($user_name =="" && $date != "" && $status == "" && $date2 != ""){
	echo $sql = "SELECT * FROM `users` u,`requests`r , `service`s , `collectors` c where r.collecter_id = c.collecter_id and c.collecter_id = $user_id  and r.service_id = s.service_id  and r.`user_id`= u.user_id and r.ship_date BETWEEN '{$date}' and '{$date2}' and r.req_del = 0  ";
}

if($user_name =="" && $date == "" && $status != "" && $date2 == ""){
	$sql = "SELECT * FROM `users` u,`requests`r , `service`s , `collectors` c where r.collecter_id = c.collecter_id and c.collecter_id = $user_id  and r.service_id = s.service_id  and r.`user_id`= u.user_id and r.status = $status and r.req_del = 0  ";
}

if($user_name !="" && $date != "" && $status != "" && $date2 == ""){
	$sql = "SELECT * FROM `users` u,`requests`r , `service`s , `collectors` c where r.collecter_id = c.collecter_id and c.collecter_id = $user_id  and r.service_id = s.service_id  and r.`user_id`= u.user_id and r.ship_date = '{$date}' and u.F_Name LIKE '%$user_name%' and r.status = $status and r.req_del = 0  ";
}

if($query = mysqli_query($conn,$sql))
	{
	return $query;	
	}
else
	{
	//  echo $sql;die;
	 echo "<script>alert('No Data For This Search');window.location = 'shipping_reports.php';</script>";

	}

}









function Get_requests(){
	global $conn;
	$user_id = $_SESSION['col_id'];
	 
 $sql = "SELECT * FROM `users` u,`requests`r , `service`s , `collectors` c where c.collecter_id = r.collecter_id and r.collecter_id = $user_id and r.service_id = s.service_id and r.`user_id`= u.user_id and r.status = 1 and r.req_del = 0 order by r.request_id ASC ";
if($query = mysqli_query($conn,$sql))
	{
	return $query;	
	}
else
	{
	echo $sql;die;
	}

}


function Get_requests_col(){
	global $conn;
	$user_id = $_SESSION['col_id'];
 $sql = "SELECT * FROM `users` u,`requests`r , `service`s , `collectors` c where c.collecter_id = r.collecter_id and r.collecter_id = $user_id and r.service_id = s.service_id and r.`user_id`= u.user_id and r.status = 3 and r.req_del = 0 order by r.request_id ASC ";
if($query = mysqli_query($conn,$sql))
	{
	return $query;	
	}
else
	{
	echo $sql;die;
	}

}





























?>