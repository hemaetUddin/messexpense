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
	$(function() {
	$( "#meDate" ).datepicker();
	$( "#anim" ).change(function() {
	$( "#meDate" ).datepicker( "option", "showAnim", $( this ).val() );
	});
	});
	</script>
	<script>
 		new WOW().init();
	</script>
	<script>
		$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});
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
					<h1 class="wow slideInLeft">this is left side</h1>
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
					<h1 class="wow slideInRight">Cost Description Entry</h1>
					<form action="" class="form-horizontal" method="post">
						<div class="form-group">
							<label for="name" class="control-label col-xs-2">Name</label>
							<div class="col-xs-10 bs-docs-example">
								<!-- <input type="text" class="form-control" name="mmName" id="mmName" placeholder="Mess Member Name"> -->
								<select class="selectpicker me-dropdown" name="mmName" id="mmName" data-style="btn-primary">
									<option value="Rinto">Rinto</option>
									<option value="Faruk">Faruk</option>
									<option value="Monirul">Monirul</option>
								</select>
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
							<div class="col-xs-offset-2 col-xs-10 animated bounce">
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
					<h1 class="animated rubberBand" data-wow-duration="2s" data-wow-delay="1s">This is footer</h1>
				</div>
			</div>
			<div>
				<span class="toppage" id="destination">^</span>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.js"></script>
	<script src="js/npm.js"></script>
	
</body>
</html>