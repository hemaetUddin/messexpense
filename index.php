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
						<!-- <ul class="mMembers">
							<li class="wow slideInLeft"><a href="me_rinto.php">Rinto |</a></li>
							<li class="wow bounceInUp"><a href="me_faruk.php">Faruk |</a></li>
							<li class="wow slideInRight" data-wow-offset="10"><a href="me_monirul.php">Monirul</a></li>
						</ul> -->
					</p>
					<a href="#destination"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="me-main-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Login Panel</h1>
					<div class="me-log-panel">
						<form action="me_loggedin.php" class="form-horizontal" method="post">
							<div class="form-group">
								<label for="name" class="control-label col-xs-4">Name or E-mail <span class="me-required"></span></label>
								<div class="col-xs-8 bs-docs-example">
									<input type="text" class="form-control" name="uname" id="uname" placeholder="Username or Email">
								</div>
							</div>
							<div class="form-group">
								<label for="date" class="control-label col-xs-4">Password <span class="me-required"></span></label>
								<div class="col-xs-8">
									<input type="text" class="form-control" name="password" id="password" placeholder="Username or Email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-offset-2 col-xs-9 animated bounce">
									<button type="submit" name="meBTN" id="meBTN" class="btn btn-primary">Login</button>
								</div>
							</div>
						</form>
					</div>
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