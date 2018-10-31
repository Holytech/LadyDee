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
	
<style type="text/css">
	.grid figure{
		height: 170px;
		display: flex;
		justify-content: center;
	}
</style>
</head>

<body>
    <?php
    	include 'header.php';
    ?>


	
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/slides/1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Welcome to LadyDee Official Website</h2>
                                    <p class="animation animated-item-2">Are you looking for the picture or name for particular dish? </p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="gallery.php">Check Out Our Food Gallery</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">A virtual home for the best cooking recipe</h2>
                                    <p class="animation animated-item-2">Are you looking for the recipe to cook a particular food? You are at the right place. </p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="blog.php">Check out our Blog
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">A must be for cooks and chef</h2>
                                    <p class="animation animated-item-2">Catch up with the latest news and tips on food and Health</p>
                                    <br>
									<a class="btn btn-md animation animated-item-3" href="blog.php">Food Blog</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section>


        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	        		<div class="section-title">
	        		<h1>Our Values</h1>
	        		</div>

	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-home"></i>
		        			<h3>Home Of Recipes</h3>
		        			<p>We provide you with easiest and fastest method to prepare a delicious meal for friends and family</p>
		        			<a href="#" class="btn">Recipes</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-briefcase"></i>
		        			<h3>Wide Range Of Service</h3>
		        			<p>The services we render covers wide range. We rech out to people both inside and outside the country</p>
		        			<a href="#" class="btn">Read more</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-globe"></i>
		        			<h3>Blog Post</h3>
		        			<p>We provide you with the latest gist or news in town about food. We also get you Health tips about food</p>
		        			<a href="blog.php" class="btn">Read Blog</a>
		        		</div>
	        		</div>
	        	</div>
	        </div>
	    </div>


<hr>

        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	
				<div class="section-title">
				<h1>Our Food Gallery</h1>
				</div>
		
		
			<ul class="grid cs-style-3">
	        	<div class="col-md-4 col-sm-6">
					<figure href="img/portfolio/4.jpg">
						<img src="img/portfolio/4.jpg" alt="Egusi Soup">
						<figcaption>
							<h3>Egusi Soup</h3>
						</figcaption>
					</figure>
	        	</div>	
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/portfolio/1.jpg" alt="Amala, ewedu and gbegiri">
						<figcaption>
							<h3>Amala, ewedu and gbegiri</h3>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/portfolio/2.jpg" alt="Beans">
						<figcaption>
							<h3>Beans</h3>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/portfolio/5.jpg" alt="Fried Chicken">
						<figcaption>
							<h3>Fried Chicken</h3>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/portfolio/3.jpg" alt="Cat Fish Pepper Soup" class="img-responsive">
						<figcaption>
							<h3>Cat Fish Pepper Soup</h3>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/portfolio/6.jpg" alt="Fried Rice and Chicken">
						<figcaption>
							<h3>Fried Rice and Chicken</h3>
						</figcaption>
					</figure>
				</div>
			</ul>
	        	</div>
	        	<div class="row text-center" style="margin-top: 50px;">
	        		<a href="gallery.php"><button class="btn btn-success btn-lg">MORE <i class="icon icon-picture"></i></button></a>
	        	</div>
	        </div>
	    </div>
			
<hr>

	    <?php
	    	include 'footer.php';
	    ?>


<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/scrolling-nav.js"></script>	
</body>
</html>