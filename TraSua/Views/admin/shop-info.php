
<div class="container">
  <h2>Shop infomation</h2>
  <!-- <form action="" method="get"> -->
    <div class="form-group">
      <label for="shop-name">Name:</label>
      <input type="text" class="form-control" id="shop-name" maxlength="100" placeholder="Enter shop name" name="shop-name" value='<?= $_SESSION["shop"]->ten_cua_hang ?>'>
    </div>
    <div class="form-group">
      <label for="shop-phone">Phone number:</label>
      <input type="text" class="form-control" id="shop-phone" maxlength="13" placeholder="Enter phone number" name="shop-phone" value='<?= $_SESSION["shop"]->so_dien_thoai ?>'>
    </div>
    <div class="form-group">
      <label for="shop-email">Email:</label>
      <input type="email" class="form-control" id="shop-email" maxlength="50" placeholder="Enter email" name="shop-email" value='<?= $_SESSION["shop"]->email ?>'>
    </div>
    <div class="form-group">
      <label for="shop-address">Address:</label>
      <textarea name="shop-address" class="form-control" id="shop-address" maxlength="200" placeholder="Enter shop address" rows="5"><?= $_SESSION["shop"]->dia_chi ?></textarea>
    </div>
    <button type="submit" id="btn-submit-shop-info" data-route="shop" data-action="update" class="btn btn-danger">Update</button>
    <input type="hidden" id="shop-id"  value='<?= $_SESSION["shop"]->ma_cua_hang ?>'>
  <!-- </form> -->

</div>