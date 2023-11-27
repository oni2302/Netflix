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
  transition: transform 0.3s ease, box-shadow 0.3s ease;
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
<script>
  function sortByPrice() {
    var container = document.getElementById('packages-container');
    var cards = container.getElementsByClassName('card');

    var sortedCards = Array.from(cards).sort(function(a, b) {
      var priceA = parseInt(a.getElementsByClassName('price')[0].innerHTML.replace(/\D/g, ''));
      var priceB = parseInt(b.getElementsByClassName('price')[0].innerHTML.replace(/\D/g, ''));
      return priceA - priceB;
    });

    container.innerHTML = '';
    sortedCards.forEach(function(card) {
      container.appendChild(card);
    });
  }

  function sortBySolution() {
    var container = document.getElementById('packages-container');
    var cards = container.getElementsByClassName('card');

    var sortedCards = Array.from(cards).sort(function(a, b) {
      var solutionA = a.getElementsByTagName('h3')[0].innerHTML.toUpperCase();
      var solutionB = b.getElementsByTagName('h3')[0].innerHTML.toUpperCase();
      return solutionA.localeCompare(solutionB);
    });

    container.innerHTML = '';
    sortedCards.forEach(function(card) {
      container.appendChild(card);
    });
  }

  function sortByDuration() {
    var container = document.getElementById('packages-container');
    var cards = container.getElementsByClassName('card');

    var sortedCards = Array.from(cards).sort(function(a, b) {
      var durationA = parseInt(a.getElementsByTagName('p')[1].innerHTML.replace(/\D/g, ''));
      var durationB = parseInt(b.getElementsByTagName('p')[1].innerHTML.replace(/\D/g, ''));
      return durationA - durationB;
    });

    container.innerHTML = '';
    sortedCards.forEach(function(card) {
      container.appendChild(card);
    });
  }
</script>
</head>
<body>

<h2 style="text-align:center">Danh sách Gói Dịch Vụ</h2>

<div class="sort-options">
  <a href="#" onclick="sortByPrice()">Theo Giá</a>
  <a href="#" onclick="sortBySolution()">Theo Solution</a>
  <a href="#" onclick="sortByDuration()">Theo Thời gian</a>
</div>

<div class="container" id="packages-container">
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

<div class="container" id="remaining-packages-container">
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