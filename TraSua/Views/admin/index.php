<?php 

	$page = 'admin-default';
	if(isset($_GET["page"]))
		$page = $_GET["page"];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="../Views/lib/css/BT/bootstrap.css">
	<!-- <link rel="stylesheet" href="../lib/css/BT/bootstrap.css"> -->
	<link rel="stylesheet" href="../Views/lib/css/FA/font-awesome.css">
	<link rel="stylesheet" href="../Views/lib/css/W3/W3.css">
	<link rel="stylesheet" href="../Views/lib/css/admin-masterpage.css">
	
</head>
<body>
	<div class="container">

		<!-- Header -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="page-header">
					<div class="row">
						<div class="col-xs-6">
<<<<<<< HEAD
							<h4>COMEBUY-LU</h4>
=======
							<h4><a href="../index.php">COMEBUY</a></h4>
>>>>>>> 49d2325db083410824dca5a010b53b26c6c426b7
						</div>
						<div class="col-xs-6">
							<h4 class="text-right">Luân- Ckó ấy haha</h4>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Content -->
		<div class="row">

			<!-- Left - Sidebar Menu -->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				
				<nav id="column_left">	
					<ul class="nav nav-list">
				  	<li><a href="?page=admin-default">Menu</a></li>	
				  	<!-- Shop -->
				  	<li class="my-menu-item">
				  		<a class="accordion-heading" data-toggle="collapse" data-target="#submenuShop">
				      		<span class="nav-header-primary">
				      			Shop 
				      			<span class="pull-right">
				      				<b class="fa fa-chevron-down"></b>
				      			</span>
				      		</span>
				    	</a>
				    	<ul class="nav nav-list collapse" id="submenuShop">
						    <li>
						      	<a href="?page=shop-info" class="accordion-heading" data-toggle="collapse" data-target="#submenuShop1">&nbsp;Infomation</a>
						    </li>
						    <li>
						      	<a class="accordion-heading" data-toggle="collapse" data-target="#submenuShop2">&nbsp;Something else about shop</a>
						    </li>
					    </ul>
				  	</li>
				  	<!-- End Shop -->

						<!-- Products -->
						<li class="my-menu-item">
				    	<a class="accordion-heading" data-toggle="collapse" data-target="#submenuProducts">
				      		<span class="nav-header-primary">Products <span class="pull-right"><b class="fa fa-chevron-down"></b></span></span>
				    	</a>

					    <ul class="nav nav-list collapse" id="submenuProducts">
					    	<li><a href="?page=products-tea" title="Title">&nbsp;&nbsp;Tea <span class="badge">12</span></a></li>
					    	<li><a href="?page=add-products" title="Title">&nbsp;&nbsp;Add new tea</a></li>
					    </ul>
				  	</li>


						<!-- End Products -->
						
						<!-- Account -->
				  	<li class="my-menu-item">
				  		<a class="accordion-heading" data-toggle="collapse" data-target="#submenuAccount">
				      		<span class="nav-header-primary">Account <span class="pull-right"><b class="fa fa-chevron-down"></b></span></span>
				    	</a>
				    	<ul class="nav nav-list collapse" id="submenuAccount">
						    <li>
						      	<a href="?page=account-management" class="accordion-heading" data-toggle="collapse" data-target="#submenuAccount1">&nbsp;Show all</a>
						    </li>
						    <li>
						      	<a class="accordion-heading" data-toggle="collapse" data-target="#submenuAccount2">&nbsp;Add new</a>
						    </li>
					    </ul>
				  	</li>
				  	<!-- End Account -->
						
						<!-- Order -->
				  	<li class="my-menu-item">
				  		<a class="accordion-heading" data-toggle="collapse" data-target="#submenuOrder">
				      		<span class="nav-header-primary">Orders<span class="pull-right"><b class="fa fa-chevron-down"></b></span></span>
				    	</a>
				    	<ul class="nav nav-list collapse" id="submenuOrder">
						    <li>
						      	<a href="?page=orders" class="accordion-heading" data-toggle="collapse" data-target="#submenuOrder1">&nbsp;Show all</a>
						    </li>
					    </ul>
				  	</li>
				  	<!-- End Order -->


					</ul>

				</nav>

			</div>
			<!-- Eend Left - Sidebar Menu -->

			<!-- Right Content -->
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div style="width: 100%; height: auto; background-color: #fff">

					<?php
						require $page.'.php';

					?>


				</div>
			</div>
			<!-- End Right Content -->

		</div>

	</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script src="../Views/lib/js/jquery-3.1.1.min.js"></script>
<script src="../Views/lib/js/bootstrap.min.js" crossorigin="anonymous"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->

<script>
	$(document).ready(function(){

  	var li = $('li.my-page-item');

  	$(li).click(function() {
  		$(this).siblings().removeClass('active');
  		$(this).addClass('active');
  	});

		$('.my-previous-page').click(function() {
	    li.each(function(i) {
        if ( $(this).hasClass('active') ) {
          if(i-1 >= 0){
            li.removeClass('active');
            li.eq(i-1).addClass('active');
          }
        }
	    });
		});

		$('.my-next-page').click(function() {
	    li.each(function(i) {
        if ( $(this).hasClass('active') ) {
          if(i+1 < li.length){
            li.removeClass('active');
            li.eq(i+1).addClass('active');
            return false;
          }
        }
	    });
		});


		$("li.my-menu-item").click(function(){
        $(this).find("a span span b").toggleClass('w3-red');
    });
		



	});

</script>

</body>
</html>


