<div id="my-footer">

	<div class="footer">

		<div class="container">
			
			<!-- Footer Logo -->
			<div class="logo foot col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="/Project/TraSua">
					<img src="Views/img/icons/comebuy-logo1.png" alt="comebuy-logo1.png">
				</a>
				<a href="index.php">
					<div class="site_name"><?= $_SESSION["shop"]->ten_cua_hang ?></div>
				</a>

			</div>
			<!-- End Footer Logo -->

			<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
				
				<!-- Menu -->
				<ul class="menu foot">
					<?php include 'Views/parts/menu-items.php'; ?>
				</ul>
				<!-- End Menu -->

			</div>

			<!-- Contact Us -->
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

				<div class="footer_captions">

					CONTACT US

					<ul>
						<li><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $_SESSION["shop"]->dia_chi ?></li>
						<li><i class="fa fa-phone" aria-hidden="true"></i><?= $_SESSION["shop"]->so_dien_thoai ?></li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i><?= $_SESSION["shop"]->email ?></li>
					</ul>

				</div>

			</div>
			<!-- End Contact Us -->

			<!-- Ask a question -->
			<div class="col-sm-8 col-xs-12">

				<div class="footer_captions mt" id="contact_form">
					CONTACT
				</div>
				<form action="mail.php" method="POST">
					<div class="input-group" style="margin-top: 20px !important;">
						<input type="text" placeholder="Your E-Mail" name="email" class="question">
						<div class="underline"></div>
					</div>
					<div class="input-group" style="margin-top: 20px !important;">
						<input type="text" placeholder="Your Message" name="message" class="question">
						<div class="underline"></div>
					</div>

					<div class="main_button foot" style="margin-top: 20px !important;">
						<input type="submit" value="SEND" style="width: 200px !important">
					</div>
					<!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">

						

					</div> -->

				</form>
				

			</div>
			<!-- End Ask a question -->

			<!-- Button -->
			
			<!-- End Button -->

		</div>

	</div>

	<!-- Copyright -->
	<div class="copyright">

		<div class="container">

			<div class="col-lg-4">Copyright © 2017. All rights reserved.</div>
			<div class="col-lg-4 w3-wide"><?= $_SESSION["shop"]->ten_cua_hang ?></div>

			<!-- Icons-links -->
			<ul>
				<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
			</ul>
			<!-- End Icons-links -->

		</div>

	</div>
	<!-- End copyright -->

</div>

</div>
	
	<script src="Views/lib/js/jquery-3.1.1.min.js"></script>
	<script src="Views/lib/js/scripts.min.js"></script>
	<script src="Views/lib/js/my-js.js"></script>
	<script>
		var clock = $('.countdown').FlipClock(3600 * 24 * 5, {
			clockFace: 'DailyCounter',
			countdown: true,
			showSeconds: false,
			showMinutes: false
		});
	</script>
</body>
</html>