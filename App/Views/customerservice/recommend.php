<!DOCTYPE html>
<html>
<head>
<style>
.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.card {
  flex: 0 0 300px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 10px;
  text-align: center;
  font-family: arial;
  background-color: #f2f2f2;
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Thêm hiệu ứng chuyển đổi và đổ bóng */
}

.card:hover {
  transform: scale(1.05); /* Phóng to card khi rê chuột vào */
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2); /* Tăng độ đổ bóng khi rê chuột vào */
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
</style>
</head>
<body>

<h2 style="text-align:center">Danh sách Gói Dịch Vụ</h2>

<div class="container">
    <?php foreach ($packages as $package) { ?>
        <div class="card">
            <h3><?php echo $package['name']; ?></h3>
            <p class="price">Giá Tiền: <?php echo $package['price']; ?>$$</p>
            <p>Thời hạn: <?php echo $package['duration']; ?> Ngày</p>
            <p><button>Mua Hàng</button></p>
        </div>
    <?php } ?>
</div>

<h5>Các Dịch Vụ Tương Tự</h5>

<div class="container">
    <?php foreach ($remainingPackages as $package) { ?>
        <div class="card" style="background-color: #ffcc00;">
            <h3><?php echo $package['name']; ?></h3>
            <p class="price">Giá Tiền: <?php echo $package['price']; ?>$$</p>
            <p>Thời hạn: <?php echo $package['duration']; ?> Ngày</p>
            <p><button>Mua Hàng</button></p>
        </div>
    <?php } ?>
</div>

</body>
</html>