
<?php

session_start();


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Websystems Group Project</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>




<!-- Admin user -->

<?php
if($_SESSION['login_user']== "jelectricsAdmin")
{?>

<div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background-color: rgb(0,0,0);">
            <div class="container"><a class="navbar-brand" href="index.php" style="padding: 0px;color: rgb(23,21,146);width: 200px;">J's Electronic's &amp; More</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="background-color: #171592;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="AboutUs.php">AboutUs</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="ContactUs.php">ContactUs</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Products.php">Products</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link" href="Admin.php">Admin Panel</a></li>
                    </ul><span class="navbar-text actions"> <a class="text-primary login" href="Logout.php">Log Out</a><a class="text-primary" role="button" href="#" >Welcome <?php echo $_SESSION['login_user'];?></a></span></div>
              </div>
	    </nav>
	

	
	</div>






<!-- Logged in user -->

<?php
}//end of if
elseif($_SESSION['login_user']!= NULL)
{?>

<div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background-color: rgb(0,0,0);">
            <div class="container"><a class="navbar-brand" href="index.php" style="padding: 0px;color: rgb(23,21,146);width: 200px;">J's Electronic's &amp; More</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="background-color: #171592;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="AboutUs.php">AboutUs</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="ContactUs.php">ContactUs</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Products.php">Products</a></li>
                    </ul><span class="navbar-text actions"> <a class="text-primary login" href="Logout.php">Log Out</a><a class="text-primary" role="button" href="#" >Welcome <?php echo $_SESSION['login_user'];?></a></span></div>
              </div>
	    </nav>
	

	
	</div>

	<?php

	 }//end of else if
	 else{
	
	
	?>
	

<!-- Guest User -->


<div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background-color: rgb(0,0,0);">
            <div class="container"><a class="navbar-brand" href="index.php" style="padding: 0px;color: rgb(23,21,146);width: 200px;">J's Electronic's &amp; More</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="background-color: #171592;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="AboutUs.php">AboutUs</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="ContactUs.php">ContactUs</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Products.php">Products</a></li>
                    </ul><span class="navbar-text actions"> <a class="text-primary login" href="Login.php">Log In</a><a class="btn btn-light bounce animated infinite action-button" role="button" href="Register.php" style="background-color: rgb(23,21,146);">Register</a></span></div>
              </div>
	    </nav>
	

	
	</div>

	<?php
} //end of else
	
	
	?>









	







    <div id="space"><div class="container">
	<div class="row">
      
        <div class="col-sm-3">
            <article class="col-item">
            	<div class="photo">
        			<div class="options-cart-round">
        				<button class="btn btn-default" title="Add to cart">
        					<span class="fa fa-shopping-cart"></span>
        				</button>
        			</div>
        			<a href="#"> <img src="https://unsplash.it/500/300?image=0" class="img-responsive" alt="Product Image" /> </a>
        		</div>
        		<div class="info">
        			<div class="row">
        				<div class="price-details col-md-6">
        					<p class="details">
        						Lorem ipsum dolor sit amet, consectetur..
        					</p>
        					<h1>Sample Product</h1>
        					<span class="price-new">$110.00</span>
        				</div>
        			</div>
        		</div>
        	</article>
            <p class="text-center">Hover over image</p>
        </div>
        <div class="col-sm-3">
            <article class="col-item">
        		<div class="photo">
        			<div class="options">
        				<button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="top" title="Add to wish list">
        					<i class="fa fa-heart"></i>
        				</button>
        				<button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="top" title="Compare">
        					<i class="fa fa-exchange"></i>
        				</button>
        			</div>
        			<div class="options-cart">
        				<button class="btn btn-default" title="Add to cart">
        					<span class="fa fa-shopping-cart"></span>
        				</button>
        			</div>
        			<a href="#"> <img src="https://unsplash.it/500/300?image=0" class="img-responsive" alt="Product Image" /> </a>
        		</div>
        		<div class="info">
        			<div class="row">
        				<div class="price-details col-md-6">
        					<p class="details">
        						Lorem ipsum dolor sit amet, consectetur..
        					</p>
        					<h1>Sample Product</h1>
        					<span class="price-new">$110.00</span>
        				</div>
        			</div>
        		</div>
        	</article>
            <p class="text-center">Hover over image</p>
        </div>
        <div class="col-sm-3">
        	<article class="col-item">
        		<div class="options">
        			<button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="top" title="Add to wish list">
        				<i class="fa fa-heart"></i>
        			</button>
        			<button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="top" title="Compare">
        				<i class="fa fa-exchange"></i>
        			</button>
        		</div>
        		<div class="photo">
        			<a href="#"> <img src="https://unsplash.it/500/300?image=0" class="img-responsive" alt="Product Image" /> </a>
        		</div>
        		<div class="info">
        			<div class="row">
        				<div class="price-details col-md-6">
        					<p class="details">
        						Lorem ipsum dolor sit amet, consectetur..
        					</p>
        					<h1>Sample Product</h1>
        					<span class="price-new">$110.00</span>
        				</div>
        			</div>
        		</div>
        	</article>
        </div>
        <div class="col-sm-3">
        	<article class="col-item">
        		<div class="photo">
        			<a href="#"> <img src="https://unsplash.it/500/300?image=0" class="img-responsive" alt="Product Image" /> </a>
        		</div>
        		<div class="info">
        			<div class="row">
        				<div class="price-details col-md-6">
        					<p class="details">
        						Lorem ipsum dolor sit amet, consectetur..
        					</p>
        					<h1>Sample Product</h1>
        					<span class="price-new">$110.00</span>
        				</div>
        			</div>
        			<div class="separator clear-left">
        				<p class="btn-add">
        					<i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
        				</p>
        				<p class="btn-details">
        					<a href="#" class="hidden-sm" data-toggle="tooltip" data-placement="top" title="Add to wish list"><i class="fa fa-heart"></i></a>
        					<a href="#" class="hidden-sm" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-exchange"></i></a>
        				</p>
        			</div>
        			<div class="clearfix"></div>
        		</div>
        	</article>
        </div>
	</div>
</div><div class="container">
	<div class="row">
      
        <div class="col-sm-3">
            <article class="col-item">
            	<div class="photo">
        			<div class="options-cart-round">
        				<button class="btn btn-default" title="Add to cart">
        					<span class="fa fa-shopping-cart"></span>
        				</button>
        			</div>
        			<a href="#"> <img src="https://unsplash.it/500/300?image=0" class="img-responsive" alt="Product Image" /> </a>
        		</div>
        		<div class="info">
        			<div class="row">
        				<div class="price-details col-md-6">
        					<p class="details">
        						Lorem ipsum dolor sit amet, consectetur..
        					</p>
        					<h1>Sample Product</h1>
        					<span class="price-new">$110.00</span>
        				</div>
        			</div>
        		</div>
        	</article>
            <p class="text-center">Hover over image</p>
        </div>
        <div class="col-sm-3">
            <article class="col-item">
        		<div class="photo">
        			<div class="options">
        				<button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="top" title="Add to wish list">
        					<i class="fa fa-heart"></i>
        				</button>
        				<button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="top" title="Compare">
        					<i class="fa fa-exchange"></i>
        				</button>
        			</div>
        			<div class="options-cart">
        				<button class="btn btn-default" title="Add to cart">
        					<span class="fa fa-shopping-cart"></span>
        				</button>
        			</div>
        			<a href="#"> <img src="https://unsplash.it/500/300?image=0" class="img-responsive" alt="Product Image" /> </a>
        		</div>
        		<div class="info">
        			<div class="row">
        				<div class="price-details col-md-6">
        					<p class="details">
        						Lorem ipsum dolor sit amet, consectetur..
        					</p>
        					<h1>Sample Product</h1>
        					<span class="price-new">$110.00</span>
        				</div>
        			</div>
        		</div>
        	</article>
            <p class="text-center">Hover over image</p>
        </div>
        <div class="col-sm-3">
        	<article class="col-item">
        		<div class="options">
        			<button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="top" title="Add to wish list">
        				<i class="fa fa-heart"></i>
        			</button>
        			<button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="top" title="Compare">
        				<i class="fa fa-exchange"></i>
        			</button>
        		</div>
        		<div class="photo">
        			<a href="#"> <img src="https://unsplash.it/500/300?image=0" class="img-responsive" alt="Product Image" /> </a>
        		</div>
        		<div class="info">
        			<div class="row">
        				<div class="price-details col-md-6">
        					<p class="details">
        						Lorem ipsum dolor sit amet, consectetur..
        					</p>
        					<h1>Sample Product</h1>
        					<span class="price-new">$110.00</span>
        				</div>
        			</div>
        		</div>
        	</article>
        </div>
        <div class="col-sm-3">
        	<article class="col-item">
        		<div class="photo">
        			<a href="#"> <img src="https://unsplash.it/500/300?image=0" class="img-responsive" alt="Product Image" /> </a>
        		</div>
        		<div class="info">
        			<div class="row">
        				<div class="price-details col-md-6">
        					<p class="details">
        						Lorem ipsum dolor sit amet, consectetur..
        					</p>
        					<h1>Sample Product</h1>
        					<span class="price-new">$110.00</span>
        				</div>
        			</div>
        			<div class="separator clear-left">
        				<p class="btn-add">
        					<i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
        				</p>
        				<p class="btn-details">
        					<a href="#" class="hidden-sm" data-toggle="tooltip" data-placement="top" title="Add to wish list"><i class="fa fa-heart"></i></a>
        					<a href="#" class="hidden-sm" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-exchange"></i></a>
        				</p>
        			</div>
        			<div class="clearfix"></div>
        		</div>
        	</article>
        </div>
	</div>
</div></div>
    <div class="text-primary footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3></h3>
                        <ul>
                            <li></li>
                            <li></li>
                        </ul><a href="#">Contact Us</a></div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3></h3>
                        <ul>
                            <li></li>
                        </ul><a href="#">About Us</a></div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">J's Electronic's &amp; More © 2020</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
</body>

</html>