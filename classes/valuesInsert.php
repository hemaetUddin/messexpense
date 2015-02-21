<?php 
include'../common/config.php';

if(isset($_POST['meSubmit'])){
	$mmName = $_POST['mmName'];
	$meDate = $_POST['meDate'];
	$mepName = $_POST['mepName'];
	$mepPrice = $_POST['mepPrice'];
	// echo $mepPrice;
	// die();
	// echo $mmName.$meDate.$mepName.$mepPrice;

	$myQuery = "INSERT INTO `costkeeping`  VALUES (' ','$mmName', '$meDate','$mepName','$mepPrice',CURRENT_TIMESTAMP);";
	$result = $db->query($myQuery);
	// if($result){
	// 	echo "S";
	// }else{
	// 	echo "W";
	// }

// function update(){
// 	$selQ = "select * from costkeeping";
// 	$
// }

	$selectQuery = "SELECT stot from total WHERE name = '$mmName'";
	$result1 = $db->query($selectQuery);
	while(list($stot)=$result1->fetch_row()){
	 $expricetotal = $stot + $mepPrice;
	 
	 $upQuquery = "UPDATE total SET stot=$expricetotal WHERE name= '$mmName'";
	 $upResult =$db->query($upQuquery);  

	if($upResult){echo "Successful";}else{echo "wrong";};
		}


	
}