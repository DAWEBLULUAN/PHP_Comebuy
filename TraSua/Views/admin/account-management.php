<style>
	/*.lock-or-unlock{ margin-right: 10px; }*/
</style>
<div class="container">
	<?php 

		foreach ($results as $result) {
		?>

		<div class="col-xs-12 col-lg-4 one-order">
			<div class="w3-card-4">
				<div>
			    <header class="w3-container w3-light-grey w3-display-container">
			      <h4>
			      	<span><?=$result->ten_loai_tk?></span>
			      	<?php if(!$result->trang_thai) { ?>
			      	<i class="w3-text-red fa fa-ban" aria-hidden='true'></i>
			      	<?php } ?>
			      </h4>

			      <?php if($result->loai_tai_khoan != 'LTK001') { ?>
			      <span title="Lock the account" data-id='<?= $result->id ?>' data-active='<?= $result->trang_thai ?>' class="lock-or-unlock"><i class="w3-display-topright w3-display-hover fa <?php if($result->trang_thai) echo 'fa-lock'; else echo 'fa-unlock' ?>" aria-hidden="true"></i></span>
						
						<?php } ?>

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

					<div class="w3-container <?php if($result->loai_tai_khoan == 'LTK001') echo 'admin' ?>">
						<button class="w3-button w3-dark-grey change-type" data-action='upgrade' data-type='<?= $result->loai_tai_khoan ?>' data-id='<?= $result->id ?>'>Upgrade</button>
						<?php if($result->loai_tai_khoan == 'LTK002') { ?>
				    <button class="w3-button w3-dark-grey change-type" data-action='downgrade' data-type='<?= $result->loai_tai_khoan ?>' data-id='<?= $result->id ?>'>Downgrade</button>
				    <?php } ?>
			    </div>
			    <br>
			    
			    <a style="text-decoration: none;" class="w3-button w3-block w3-dark-grey" onclick='document.getElementById(<?php echo json_encode($result->id) ?>).style.display="block"'>View</a>
		    </div>
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
				<div class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-sm-3" for="account">Account:</label>
						<div class="col-sm-9">
							<input type="text" class="form-control account_id<?php echo $result->id ?>" placeholder="Enter account" name="account" value='<?=$result->ten_tk?>'>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="password">Password:</label>
						<div class="col-sm-9">          
							<input type="password" class="form-control password<?php echo $result->id ?>" placeholder="Enter password" name="password" value='<?php echo $result->mat_khau ?>'>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" >Created date:</label>
						<div class="col-sm-9">          
							<input type="text" class="form-control"  placeholder="Enter password" name="created_day" value='<?php echo date('d-m-Y',strtotime($result->ngay_tao)) ?>'>
						</div>
					</div>



					<!-- Button Update Account -->
					<div class="form-group">        
						<div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-default update-account" data-id = <?= $result->id ?>>Update</button>
						</div>
					</div>
					<!-- Button Update Account -->
				</div>
			</div>

			<div id='<?php echo $result->id."private-information"; ?>' class="w3-container city">
				<h1 class="text-center">Private Infomation</h1>
				<form class="form-horizontal">

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
							<button type="submit" class="btn btn-default update-user" data-id='<?php echo $result->ma_nguoi_dung ?>'>Update</button>
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
		text-align  : center;
		user-select : none;
	}
	.my-previous-page a, .my-next-page a{
		cursor: pointer;
	}


	.my-modal-content {
		margin:auto;background-color:#fff;position:relative;padding:0;outline:0;
	}

	.lock-or-unlock{
		cursor: pointer;
	}

	.lock-or-unlock i{
		right:10px; top: 10px;
	}

	.admin{
		pointer-events: none;
		opacity: 0;
	}

</style>


<script>

	$(document).ready(function() {

		// Update Account
		$("button.update-account").click(function() {
			id = $(this).attr('data-id');
			account = $(".account_id"+id).val();
			password = $(".password"+id).val();
			$.post('account.php?route=update', {id: id, account: account, password: password}, function(data) {
				alert("Updated");
				$("#page-content").html(data);
			});
		});


		//Update User Information:
		$("button.update-user").click(function() {
			user_id = $(this).attr('data-id');
			
		});






		// Lock or Unlock the account
		$("span.lock-or-unlock").click(function() {
			message = "";
			// active = ($(this).attr('data-active') == 1 ? 0:1);
			if($(this).attr('data-active') == 1) {
				active = 0;
				message = "Locked the account";
			} else {
				active = 1;
				message = "Unlocked the account";
			}
			// alert(active + " " + message);
			id = $(this).attr('data-id');
			$.post('account.php?route=lock', {id: id, active:active }, function(data) {
				alert(message);
				$("#page-content").html(data);
			});
			
		});

		//Upgrade or Downgrade.
		$("button.change-type").click(function() {
			id = $(this).attr('data-id');
			type = $(this).attr('data-type');
			action = $(this).attr('data-action');
			// alert(action);
			if(type == 'LTK002' && action == 'upgrade') {
				result = confirm("Wanna upgrade this account to Administrator? Be careful because the current Administrator account will be downgraded.");
				if(result) {
					$.post('account.php?route='+action, {id: id, type: type}, function(data) {
						/*optional stuff to do after success */
						$("#page-content").html(data);
					});
				}
			}
			else {
				$.post('account.php?route='+action, {id: id, type: type}, function(data) {
					/*optional stuff to do after success */
					$("#page-content").html(data);
				});
			}
			
		});

		//End Upgrade or Downgrade.

	});

	



	// Modal
	document.getElementsByClassName("tablink")[0].click();
	function openCity(evt, cityName) {
		var i, x, tablinks;
		x = document.getElementsByClassName('city');
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablink");
		for (i = 0; i < x.length; i++) {
			tablinks[i].classList.remove("w3-grey");
		}
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.classList.add("w3-grey");
	}


	// End Modal


</script>

