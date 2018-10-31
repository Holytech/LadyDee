<?php
	include('submit.php');
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LadyDee Restaurant</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	<script src="//use.edgefonts.net/bebas-neue.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	

</head>

<body>
    <?php
		include 'header.php';
	?>

		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Contact Us</h1>
					</div>
				</div>
			</div>
		</div>
        

        <div class="section">
	    	<div class="container">
	        	<div class="row">
					<h3>Get in Touch with Us</h3>
					</hr>
	        		<div class="col-sm-6">
	        			<p class="contact-us-details">
	        				<b>Address:</b> Mokola, Ibadan. Nigeria.<br/>
	        				<b>Phone:</b> +44 123 654321<br/>
	        				<b>Fax:</b> +44 123 654321<br/>
	        				<b>Email:</b> <a href="mailto:info@LadydeeNigerianDishes.com">info@Ladydee9jaDishes.com</a>
	        			</p>
	        		</div>
	        		<div class="col-sm-6">
						<form method="POST">
							<?php
								if($sent){
									echo '<h3>Message Successfully Recorded</h3>';
								}
							?>
	        				<div class="row">
	        				    <div class="col-sm-6 form-group">
	        				        <input class="form-control" value="<?php $name ?>" id="name" name="names" placeholder="Name" type="text" required>
	        				    </div>
	        				    <div class="col-sm-6 form-group">
	        				        <input class="form-control" value="<?php $email ?>" id="email" name="email" placeholder="Email" type="email" required>
	        				    </div>
	        				</div>
	        				<textarea class="form-control" value="<?php $mess ?>" id="comments" name="comments" placeholder="Enter your message here" rows="5" style="resize: none; height: 200px;"></textarea><br>
	        				<div class="row">
	        				    <div class="col-sm-12 form-group">
	        				        <button class="btn btn-success btn-lg pull-right" name="send" type="submit"><i class="glyphicon glyphicon-send"></i> Send</button>
	        				    </div>
	        				</div>
						</form>
	        		</div>
	        	</div>
	    	</div>
	    </div>

	    <?php
			include 'footer.php';
		?>
		
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/scrolling-nav.js"></script>	
</body>
</html>