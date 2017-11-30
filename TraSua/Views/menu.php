<?php

	
	require 'parts/header.php';


 ?>

			<header class="menu_page_header">



				<style>
body {font-family: Arial;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>

				<div class="container">

					<!-- Navigation Menu here -->
					<?php include_once 'parts/body.navbar.php'; ?>
					<!-- End Navigation menu -->
					
					<!--Caption-->
					<div class="caption menu_page">
						
						<h1 class="title_menu col-lg-12 col-md-12 col-sm-12 col-xs-12">Our Menu</h1>

						<div class="undertext menu col-lg-12 col-md-12 col-sm-12 col-xs-12">
							~ Taste our hot bavarages ~
						</div>

						<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 angle_down"><a href="#angle" class="angle"><i class="fa fa-angle-down" aria-hidden="true"></i></a></div>

					</div>
					<!--End Caption-->

				</div>
				<!--  -->
				
				<!--  -->
			</header>
		</div>
		<!-- END HEADER -->
		<!-- CONTENT -->
		<div id="my-content">

			<div class="main_menu">
				
				<div class="container">
					<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Tab1')">Tab1</button>
  <button class="tablinks" onclick="openCity(event, 'Tab2')">Tab2</button>
  <button class="tablinks" onclick="openCity(event, 'Tab3')">Tab3</button>
   <button class="tablinks" onclick="openCity(event, 'Tab4')">Tab4</button>
  <button class="tablinks" onclick="openCity(event, 'Tab5')">Tab5</button>
  <button class="tablinks" onclick="openCity(event, 'Tab6')">Tab6</button>
</div>

<!-- Tab 1 -->
<div id="Tab1" class="tabcontent">
<!--  -->
<div class="container">

<?php 
for ($i=0; $i < 10; $i++) { 
 ?>
<div style="float: left;width: 23%;margin:1%;margin-top: 5%;">
									<img src="Views/img/freddie-marriage-168317.png" alt="coffe cup">

									<ul>
										<li class="item_name">Regular Coffee</li>
										<li class="item_description">Coffee with vanila</li>
									</ul>

									<div class="line">. . . . . . . . .</div>
									<!-- Prices -->
									<div class="price">20.00<sup>$</sup>

									<button type="button" class="btn btn-warning"> + </button>
									</div>
									<!-- End Prices -->
									<br>							
</div>
<?php 
}
 ?>
</div>
  <!--  -->

</div>
<!-- End -Tab1 -->

<div id="Tab2" class="tabcontent">
  <h3>Tab2</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tab3" class="tabcontent">
  <h3>Tab3</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Tab4" class="tabcontent">
  <h3>Tab4</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Tab5" class="tabcontent">
  <h3>Tab5</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Tab6" class="tabcontent">
  <h3>Tab6</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
					
				</div>
				

				<!-- End Cold Coffee section -->

			</div>
			
			<!-- Event section -->
			
			<!-- End Event section -->

			<!-- Blog section -->
			
			<!-- End Blog section -->

		</div>
		<!-- END CONTENT -->

		<!-- FOOTER -->
		<?php include_once 'parts/footer.php'; ?>
