<!DOCTYPE html>
<html>
<head>
<style>
.container {
  position: relative;
  left: 20%;
  top: 10%;
  height: 50%;
}

.card {
  flex: 0 0 300px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 10px;
  text-align: center;
  font-family: arial;
  background-color: #f2f2f2;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  width: 60%;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

h5 {
  padding-top: 10px;
}

.sort-options {
  text-align: center;
  margin-bottom: 20px;
}

.sort-options a {
  margin: 0 10px;
  text-decoration: none;
  color: #000;
  font-weight: bold;
}

.sort-options a:hover {
  color: #ff0000;
}
</style>
</head>
<div class="container">
  <?php foreach ($servicePackage as $value) { ?>
    <div class="card">
      <h3 style=" font-weight: bolder;"><?php echo $value['name']; ?></h3>
      <p><img style="width: 100%;"  src="<?php echo _WEB ?>/public/assets/images/brand/netflix-banner.jpg" alt=""></p>
      <p class="price">Giá Tiền: <?php echo $value['price']; ?> $$</p>
      <p>Thời hạn: <?php echo $value['duration']; ?> Ngày</p>
    </div>
    <br>
    <a style="font-weight: bolder; color:dimgray; text-decoration:underline;" href="<?php echo _WEB ?>/manageInfor/index">Quay lại</a>
  <?php } ?>
</div>