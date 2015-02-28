<?php
include'common/config.php';
$user = $_POST['uname'];
$pass = $_POST['password'];

$myquery = "SELECT * FROM users WHERE username='".$user ."' AND password ='".$pass."' LIMIT 1";
$result = $db->query($myquery);
// while (list($id,$name,$pass)=$result->fetch_row()) {
// 	echo $id;
// }


$num_rows = $result->num_rows;
if($num_rows!=0){
	echo "You have successfully loggedin";
	header('location: me_home.php');
	// exit();
}else{
	header('Location: index.php');
	echo "Invalid Credentials";
}

include'index.php';

?>