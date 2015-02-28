<?php
include'common/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Our Mess Expense</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/me-custom.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/wow.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
	<script>
 		new WOW().init();
	</script>
</head>
<body>
	<div class="me-header">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<p class="me-header-text wow bounceInDown">Our Mess Expenses</p>
						<p>
							<ul class="mMembers">
								<li class="wow slideInLeft"><a href="me_rinto.php">Rinto |</a></li>
								<li class="wow bounceInUp"><a href="me_faruk.php">Faruk |</a></li>
								<li class="wow slideInRight" data-wow-offset="10"><a href="me_monirul.php">Monirul</a></li>
							</ul>
						</p>
						<a href="#destination"></a>
					</div>
				</div>
			</div>
		</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="me-left">
					<h1>this is left side</h1>
					<ul class="me-left-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="me_rinto.php">Rinto</a></li>
						<li><a href="me_monirul.php">Monirul</a></li>
						<li><a href="me_faruk.php">Faruk</a></li>
						<li><a href="deposite.php">Deposit</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="me-right">
					<h1>Cost Description Of Monirul</h1>
					<?php 
						$myQuery = "select * from costkeeping where mmName='Monirul'";
						$result = $db->query($myQuery);
						echo "<table class='responsive' width='100%' border='1'><tr><th>ID</th><th>Name</th><th>Date</th><th>Product Name</th><th>Product price</th>";
						while(list($id,$mmName,$meDate,$mepName,$mepPrice,$time)=$result->fetch_row()){
							echo "<tr><td>".$id."</td><td>".$mmName."</td><td>".$meDate."</td><td>".$mepName."</td><td>".$mepPrice."</td>";
						}

						// $toQuery = "SELECT mmName, SUM(mepPrice) FROM costkeeping GROUP BY mmName";
						$sQuery ="SELECT SUM(mepPrice) FROM costkeeping where mmName = 'Monirul'";
						$results = $db->query($sQuery);
						while(list($total)=$results->fetch_row()){
						echo"<tr><td colspan='4'>Total</td><td>". $total."</td></tr>";
					}

						echo "</table>";
					?>

				</div>
			</div>
		</div>
	</div>

	<div class="me-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>This is footer</h1>
				</div>
			</div>
		</div>
	</div>
	
	<script src="js/bootstrap.js"></script>
	<script src="js/npm.js"></script>
</body>
</html>