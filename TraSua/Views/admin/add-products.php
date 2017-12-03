<?php 
// ma_sp	ten_sp	ma_loai_sp	hinh_anh	gia_ban	don_vi_ban	gioi_thieu


 ?>

<h2>Add new product</h2>
<form action="" method="get">
	<div class="form-group">
    <label for="product-image">Image:</label>
    <input type="file" name="product-image" class="form-control" id="product-image">
  </div>
  <div class="form-group">
    <label for="product-name">Product's name:</label>
    <input type="text" class="form-control" id="product-name" maxlength="100" placeholder="Enter product's name" name="product-name">
  </div>
  <div class="form-group">
    <label for="product-specification">Specification:</label>
    <select name="product-specification" id="product-specification" class="form-control">
      <?php 
        foreach ($dsloaisp as $item) {
       ?>
    	<option value=""><?=$item->ten_loai_sp?></option>
      <?php
       }
       ?>
    </select>
  </div>
  <div class="form-group">
    <label for="product-price">Price:</label>
    <input type="number" class="form-control" id="product-price" placeholder="Enter price" name="product-price">
  </div>
  <div class="form-group">
    <label for="product-intro">Introduction:</label>
    <textarea name="product-intro" class="form-control" id="product-intro" maxlength="200" placeholder="Write something about product" rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-danger">Create</button>
</form>