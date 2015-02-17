<!DOCTYPE html>
<html lang="en">
<head>
	<title>Our Mess Expense</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/me-custom.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<script src="js/jquery.js"></script>
	<script src="js/custom.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
	
	<script>
	$(function() {
	$( "#meDate" ).datepicker();
	$( "#anim" ).change(function() {
	$( "#meDate" ).datepicker( "option", "showAnim", $( this ).val() );
	});
	});
	</script>
</head>
<body>
	<div class="me-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Our Mess Expenses</h1>
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
						<li><a href="">menu 4</a></li>
						<li><a href="">menu 5</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="me-right">
					<h1>Cost Description Entry</h1>
					<form action="" class="form-horizontal" method="post">
						<div class="form-group">
							<label for="name" class="control-label col-xs-2">Name</label>
							<div class="col-xs-10">
								<input type="text" class="form-control" name="mmName" id="mmName" placeholder="Mess Member Name">
							</div>
						</div>
						<div class="form-group">
							<label for="date" class="control-label col-xs-2">Date</label>
							<div class="col-xs-10">
								<input type="text" class="form-control" name="meDate" id="meDate" size="30">
							</div>
						</div>
						<div class="form-group">
							<label for="product" class="control-label col-xs-2">Products Name</label>
							<div class="col-xs-10">
								<input type="text" class="form-control" name="mepName" id="mepName" placeholder="Products Name">
							</div>
						</div>
						<div class="form-group">
							<label for="pp" class="control-label col-xs-2">Products Price</label>
							<div class="col-xs-10">
								<input type="text" class="form-control" name="mepPrice" id="mepPrice" placeholder="Products Price">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-offset-2 col-xs-10">
							<button type="button" name="meBTN" id="meBTN" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</form>
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