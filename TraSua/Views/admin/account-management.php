
<div class="row">
	<?php 

		foreach ($results as $result) {
		?>

		<div class="col-xs-12 col-lg-6 one-order">
			<div class="w3-card-4">
				<form action="" method="post">
			    <header class="w3-container w3-light-grey w3-display-container">
			      <h4><?=$result->ten_loai_tk?></h4>
			      <a href="javascript: void(0)"><i class="w3-display-topright w3-display-hover fa fa-close" style="right:5px; top: 5px;" aria-hidden="true"></i></a>
			    </header>
			    <div class="w3-container">
			    	<br>
			    	<table>
			    		<tr>
			    			<td>Account:&nbsp;</td>
			    			<td>&nbsp;<?=$result->ten_tk?></td>
			    		</tr>
			    		<tr>
			    			<td>Full name:&nbsp;</td>
			    			<td>&nbsp;<?=$result->ten_nguoi_dung?></td>
			    		</tr>
			    		<tr>
			    			<td>Phone number:&nbsp;</td>
			    			<td>&nbsp;<?=$result->so_dien_thoai?></td>
			    		</tr>
			    		<tr>
			    			<td>Address:&nbsp;</td>
			    			<td>&nbsp;<?=$result->dia_chi?></td>
			    		</tr>
			    	</table>
			    </div>
			    <br>
			    <div class="w3-container">
				    <button class="w3-button w3-dark-grey">Upgrade</button>
				    <button class="w3-button w3-dark-grey">Downgrade</button>
			    </div>
			    <br>
			    <a style="text-decoration: none;" class="w3-button w3-block w3-dark-grey" onclick='document.getElementById(<?php echo json_encode($result->id) ?>).style.display="block"'>View</a>
		    </form>
		  </div>
		</div>
		
		<?php 
		}
		?>




</div>

<div class="row">
	<div class="col-xs-8 col-xs-offset-2 my-pagination">
		<ul class="pagination">
	    <li class="page-item my-previous-page"><a class="page-link">Previous</a></li>
	    <li class="page-item my-page-item active"><a class="page-link" href="#">1</a></li>
	    <li class="page-item my-page-item"><a class="page-link" href="#">2</a></li>
	    <li class="page-item my-page-item"><a class="page-link" href="#">3</a></li>
	    <li class="page-item my-next-page"><a class="page-link">Next</a></li>
	  </ul>
	</div>
</div>


<!-- Modal Popup -->
<div class="container">
	<?php


	foreach ($results as $result) {
	?>



	<div id='<?php echo $result->id ?>' class="w3-modal">
		<div class="col-md-3"></div>
		<div class="w3-card-4 w3-animate-zoom my-modal-content col-sm-12 col-md-6">
			<header class="w3-container w3-blue"> 
				<span onclick='document.getElementById(<?php echo json_encode($result->id); ?>).style.display="none"' class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
				<h2><?php echo $result->ten_nguoi_dung; ?></h2>
			</header>

			<div class="w3-bar w3-border-bottom">
				<button class="tablink w3-bar-item w3-button" onclick='openCity(event, <?php echo json_encode($result->id."account"); ?>)'>Account</button>
				<button class="tablink w3-bar-item w3-button" onclick='openCity(event, <?php echo json_encode($result->id."private-information"); ?>)'>Infomation</button>
			</div>

			<div id='<?php echo $result->id."account"; ?>' class="w3-container city">
				<h1 class="text-center"><?=$result->ten_loai_tk?></h1>
				<form class="form-horizontal" action="" method="post">
					<div class="form-group">
						<label class="control-label col-sm-3" for="account">Account:</label>
						<div class="col-sm-9">
							<input type="text" class="form-control account_id<?php echo $result->id ?>" placeholder="Enter account" name="account" value='<?=$result->ten_tk?>'>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="password">Password:</label>
						<div class="col-sm-9">          
							<input type="text" class="form-control password<?php echo $result->id ?>" placeholder="Enter password" name="password" value='<?php echo $result->mat_khau ?>'>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="created-day">Created date:</label>
						<div class="col-sm-9">          
							<input type="date" class="form-control" id="created-day" placeholder="Enter password" name="created_day" value='<?php echo date('Y-m-d',strtotime($result->ngay_tao)) ?>'>
						</div>
					</div>
					<div class="form-group"> 
						<div class="col-sm-offset-3 col-sm-9">
							<div class="checkbox">
								<label><input class="active<?php echo $result->id ?>" type="checkbox" <?php if($result->trang_thai) echo "checked"; ?> value='active'> Active</label>
							</div>
						</div>
					</div>



					<!-- Button Update Account -->
					<div class="form-group">        
						<div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-default update-account" data-id = <?= $result->id ?>>Update</button>
						</div>
					</div>
					<!-- Button Update Account -->
				</form>
			</div>

			<div id='<?php echo $result->id."private-information"; ?>' class="w3-container city">
				<h1 class="text-center">Private Infomation</h1>
				<form class="form-horizontal" action="/action_page.php">

					<div class="form-group">
						<label class="control-label col-sm-3" for="name">Full name:</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="name" placeholder="Enter account" name="name" value='<?= $result->ten_nguoi_dung ?>'>
						</div>
					</div>

					<div class="form-group"> 
						<div class="col-sm-offset-3 col-sm-9">
							<div class="radio">
								<label><input type="radio" name="gender" <?php if($result->gioi_tinh) echo "checked" ?>> Male</label>
								<label><input type="radio" name="gender" <?php if($result->gioi_tinh != null && $result->gioi_tinh == false) echo "checked" ?>> Female</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3" for="birthday">Birthday:</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" id="birthday" placeholder="Enter account" name="birthday" value='<?php if($result->ngay_sinh) echo date('Y-m-d', strtotime($result->ngay_sinh)) ?>'>
						</div>
					</div>

					<div class="form-group">
				    <label class="control-label col-sm-3" for="email">Email:</label>
				    <div class="col-sm-9">
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value='<?= $result->email ?>'>
				    </div>
				  </div>

					<div class="form-group">
						<label class="control-label col-sm-3" for=phone">Phone number:</label>
						<div class="col-sm-9">          
							<input type="text" class="form-control" id="phone" placeholder="Enter password" name="phone" value='<?= $result->so_dien_thoai ?>'>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3" for="address">Address:</label>
						<div class="col-sm-9">          
							<input type="text" class="form-control" id="address" placeholder="Enter password" name="address" value='<?= $result->dia_chi ?>'>
						</div>
					</div>
					<!-- Button Update Information -->
					<div class="form-group">        
						<div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-default">Update</button>
						</div>
					</div>
					<!-- Button Update Information -->
				</form>


			</div>

			<div class="w3-container w3-light-grey w3-padding">
				<button class="w3-button w3-right w3-white w3-border" 
				onclick='document.getElementById(<?php echo json_encode($result->id) ?>).style.display="none"'>Close</button>
			</div>
		</div>
	</div>

	<?php
	}

	?>
	


</div>
<!-- End Modal Popup -->
	
<style>
	.one-order{
		height: auto;
	}
	.w3-card-4{
		margin: 10px 0px;
	}
	.my-pagination{
		text-align: center;
		user-select: none;
	}
	.my-previous-page a, .my-next-page a{
		cursor: pointer;
	}


.my-modal-content {
	margin:auto;background-color:#fff;position:relative;padding:0;outline:0;
}
</style>


<script>
	$(document).ready(function() {
		$("button.update-account").click(function() {
			id = $(this).attr('data-id');
			account = $(".account_id"+id).val();
			password = $(".password"+id).val();
			active = 0;
			if($(".active"+id).attr('checked')) {
				active = 1;
			}
			$.post('account.php?route=update', {id: id, account: account, password: password, active: active}, function(data) {
				/*optional stuff to do after success */
			});
		});
	});


	function onblurFunction(x) {
		// var dtp = document.getElementsByClassName("dtpBirthday");
		if(x.value == "")
			x.type = 'text';
	}

	document.getElementsByClassName("tablink")[0].click();

// Modal
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
// End Modal


</script>

