<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo.png" >
    <title>LadyDee Restaurant</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	<script src="//use.edgefonts.net/bebas-neue.js"></script>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
    <?php
    	include 'header.php';
    ?>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Our Blog</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<?php
						include 'connect.php';
						$sql = "SELECT * FROM blog";
						$records = mysql_query($sql);
						$imageName = mysql_real_escape_string($_FILES["image"]);
						while($post = mysql_fetch_assoc($records)){	
							echo '<div class="col-sm-4">';
								echo '<div class="blog-post blog-single-post">';
									echo '<div class="single-post-title">';
										echo '<h3>'.$post["title"].'</h3>';
									echo "</div>";
									echo '<div class="single-post-info">';
										echo '<i class="glyphicon glyphicon-time">'.$post["date"].'</i>';
									echo "</div>";
									echo '<div class="single-post-content">';
										echo '<p>'.$post["brief"].'</p>';
										echo '<a href="blog-post.html" class="btn" name="zobo">Read more</a>';
									echo "</div>";
								echo "</div>";
							echo "</div>";
						}						
					?>
				</div>
			</div>
	    </div>

	    <?php
			include 'footer.php';
		?>
<script src="js/bootstrap.min.js"></script>
</body>
</html>