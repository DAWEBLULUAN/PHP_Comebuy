<center><h3>Chỉnh sửa sản phẩm</h3></center>
<form action="quanly_sp?route=confirmEdit" method="post" enctype="multipart/form-data">
	<div class="form-group col-lg-6">
    <label for="product-image">Chọn hình ảnh:</label>
    <input type="file" name="product-image" class="form-control" id="product-image">
  </div>
  <div class="form-group col-lg-6">
    <label for="product-name">Tên sản phẩm:</label>
    <input type="text" class="form-control" id="product-name" value="<?php echo $sp->ten_sp?>" maxlength="100" placeholder="Enter product's name" name="product-name">
  </div>
  <div class="form-group col-lg-6 ">
    <label for="product-specification">Loại sản phẩm:</label>
    <select name="product-specification" id="product-specification" class="form-control">
      <?php 
        foreach ($dsloaisp as $item) {
       ?>
    	<option value=<?=$item->ma_loai_sp?>><?=$item->ten_loai_sp?></option>
      <?php
       }
       ?>
    </select>
  </div>
  <div class="form-group col-lg-6">
    <label for="product-price">Giá:</label>
    <input type="number" class="form-control" id="product-price" value="<?php echo $sp->gia_ban ?>" placeholder="Enter price" name="product-price">
  </div>
  <div class="form-group col-lg-12">
    <label for="product-intro">Giới thiệu:</label>
    <textarea name="product-intro" class="form-control" id="product-intro" maxlength="200" placeholder="Write something about product" rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-danger">Xác nhận</button>
</form>