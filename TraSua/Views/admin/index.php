<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>

	<link rel="icon" type="image/png" href="Views/img/icons/favicon.png" sizes="32x32">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="Views/lib/css/BT/bootstrap.css">
	<link rel="stylesheet" href="Views/lib/css/FA/font-awesome.css">
	<link rel="stylesheet" href="Views/lib/css/W3/W3.css">
	<link rel="stylesheet" href="Views/lib/css/admin-masterpage.css">

	<style>
		.dropdown-submenu {
    	position: relative;
		}
		.dropdown-submenu .submenu-title {
			outline: none;
		}
		.dropdown-submenu .dropdown-menu {
			top        : 0;
			left       : 100%;
			margin-top : -1px;
		}
	</style>
</head>
<body>


	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">COMEBUY</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">

					<li class="menu-item" data-route="shop" data-action=""><a href="#">Shop</a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tea <b class="caret"></b></a>

						<ul class="dropdown-menu">
							<li class="menu-item" data-route="quanly_sp" data-action=""><a href="#">Tea</a></li>
							<li class="menu-item"><a href="#">Menu1</a></li>
							<li class="menu-item"><a href="#">Menu1</a></li>
							<li class="menu-item"><a href="#">Menu1</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>

						<ul class="dropdown-menu">
							<li class="menu-item"><a href="#">Menu1</a></li>
							<li class="menu-item"><a href="#">Menu1</a></li>
							<li class="menu-item"><a href="#">Menu1</a></li>
							<li class="menu-item"><a href="#">Menu1</a></li>
						</ul>
					</li>


					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Multi-level menu <b class="caret"></b></a>

						<ul class="dropdown-menu">
							<li class="menu-item"><a href="#">Action</a></li>
							<li class="menu-item"><a href="#">Another action</a></li>
							<li class="menu-item"><a href="#">Something else here</a></li>
							<li class="menu-item"><a href="#">Separated link</a></li>

							<li class="dropdown-submenu">
								<a class="test submenu-title"  tabindex="-1" href="#">New dropdown<span class="fa fa-chevron-right w3-right"></span></a>
								<ul class="dropdown-menu">
									<li class="menu-item"><a tabindex="-1" href="#">2nd level dropdown</a></li>
									<li class="menu-item"><a tabindex="-1" href="#">2nd level dropdown</a></li>
									<!-- <li class="dropdown-submenu">
										<a class="test" href="#">Another dropdown <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">3rd level dropdown</a></li>
											<li><a href="#">3rd level dropdown</a></li>
										</ul>
									</li> -->
								</ul>
							</li>
						</ul>
					</li>


				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="admin.php"><i class="fa fa-refresh" aria-hidden='true'></i> Refresh</a></li>
					<li><a href=""><i class="fa fa-user"></i> Vũ Minh Luân</a></li>
					<li><a href="account.php?route=signout"><i class="fa fa-sign-out"></i> Sign out</a></li>
				</ul>

			</div><!-- /.navbar-collapse -->

		</div>
	</nav>

	<div id="page-content">
		<!-- <button id="btn-submit-shop-info">ABC</button> -->
	</div>


	<script src="Views/lib/js/jquery-3.1.1.min.js"></script>
	<script src="Views/lib/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->

	<script>
		$(document).ready(function(){



			// Multi-level-dropdown menu
			$('.dropdown-submenu a.test').on("click", function(e){
		    $(this).next('ul').toggle();
		    e.stopPropagation();
		    e.preventDefault();
		  });
		  // END Multi-level-dropdown menu


		  // Call to route - with - action
	    $("li.menu-item").click(function() {

	    	var route = $(this).attr('data-route');
	    	// alert(route);
	    	var action = $(this).attr('data-action');


	    	$.get(route+'.php?route='+action, function(data) {
		    	$("#page-content").html(data);
		    });
	    });
	    // Call to Route with  Action


		});

		$("#page-content").on('click', '#btn-submit-shop-info', function() {
			var route = $(this).attr('data-route');
    	var action = $(this).attr('data-action');


    	var id = $("#shop-id").val();
			var name = $("#shop-name").val();
			var phone = $("#shop-phone").val();
			var email = $("#shop-email").val();
			var address = $("#shop-address").val();

			// alert(route + " " + action + " " + id);

			$.get(route+'.php?route='+action,

				{id: id, name: name, phone: phone, email: email, address: address},

				function(data) {
	    		$("#page-content").html(data);
	    });

		});

		// function test() {
		// 	var x = document.getElementById("btn-submit-shop-info");
		// 	var classname = "asdasd";
  //   alert(classname);
  // }
	</script>
</body>
</html>