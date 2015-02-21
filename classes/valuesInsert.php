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

	$selQ = "SELECT stot from total WHERE name = '$mmName'";
	$ree = $db->query($selQ);

	while(list($stot)=$ree->fetch_row()){
	 $expricetotal = $stot + $mepPrice;
	 // echo $expricetotal. "\r\n";
	 // $expricetotal2 =$expricetotal + $mepPrice;
	 // echo $expricetotal2. "\r\n"; 

	$upQuquery = "UPDATE total SET stot=$expricetotal WHERE name= '$mmName'";
	$r =$db->query($upQuquery);  

	if($r){echo "Successful";}else{echo "wrong";};
		}


	
}