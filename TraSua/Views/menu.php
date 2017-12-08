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
    width: 16.66666%;
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
				
<!-- teapresso- milk tea - ceam teaccino- other tea- fruit tea - ice blended -->
<div class="tab">
  <button class="tablinks" id="LSP001" onclick="openCity(event,'LSP001')">TEAPRESSO</button>
  <button class="tablinks" id="LSP002" onclick="openCity(event,'LSP002')">MILK TEA</button>
  <button class="tablinks" id="LSP003" onclick="openCity(event,'LSP003')">CREAM TEACCINO</button>
  <button class="tablinks" id="LSP004" onclick="openCity(event,'LSP004')">OTHER TEA</button>
  <button class="tablinks" id="LSP005" onclick="openCity(event,'LSP005')">FRUIT TEA</button>
  <button class="tablinks" id="LSP006" onclick="openCity(event,'LSP006')">ICE BLENDED</button>
</div>
<!--  -->

<!--  -->
<div id="phan_trang"></div>


<script>

	x = <?php echo json_encode($maloai) ?>;
	document.getElementById(x).click(); // default click tab 1 
	// 

	function openCity(evt,maloaiF) {
  	  var i, tablinks;
 	   tablinks = document.getElementsByClassName("tablinks");
  	  for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active","");
    	} evt.currentTarget.className += " active";
// đoạn trên là hiệu ứng các thử ở menutop tab
// đoạn dưới là ajax xài jquery
  	 	 var loaisp = maloaiF;
  	 	 var indexTrangg =1;
  	 	 
  	  $.get("phantrang_sp.php",{maloai:loaisp,indexT:indexTrangg},function(data){
  	  	$("#phan_trang").html(data);
 	   })
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
