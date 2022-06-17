<html lang="en">
  <?php

session_start();
if (!isset($_SESSION['bajoel_shop'])) {
  header("Location: login.php");
}

if (isset($_GET['logout'])) {
  logout();
}
function logout()
{
  session_start();
  session_destroy();
  header("Location: login.php");
  echo "You are log out";
}

?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


    <title>Hello, world!</title>
  </head>

  <body class="custom-font">
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="home.php"><img src="../images/Logo_Transparan_Yellow.png" width="48px"><span style="font-weight:bold;">Bajoel Snack</span></a>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" style="font-weight:600;" href="#">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="font-weight:600;" href="checkout.php">Cart</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle show" href="#" id="dropdown05" data-bs-toggle="dropdown" aria-expanded="false" style="font-weight:600;">Profile</a>
              <ul class=" dropdown-menu show " aria-labelledby="dropdown05" data-bs-popper="none">
                <li><a class="dropdown-item" href="profile.php">See profile</a></li>
                <li><a class="dropdown-item" href="home.php?logout=true">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid overflow-hidden mb-3 mt-2 p-0" style="max-height: 40vh;">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000" style="background-color: black">
            <img src="../images/pattern.png" style="max-height: 40vh; width: 100%; object-fit: cover; ;
  opacity: 0.8;">
            <div class="carousel-caption" style="top:100px;">
              <h3 class="fw-bold fst-italic">Happy Shopping</h3>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000" style="background-color: black">
            <img src="../images/pattern.png" style="max-height: 40vh; width: 100%; object-fit: cover; opacity: 0.8;">
            <div class="carousel-caption" style="top:100px;">
              <h3 class="fw-bold fst-italic ">Dont forget to share with other.</h3>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <form method="POST" action="../action/updateCheckout.php">
      <div class="container mx-auto py-5 px-5">
        <div class="d-flex flex-wrap">

          <!-- Product -->
          <?php
        include "../action/getKeranjang.php";
        if ($sql->num_rows > 0) {
          $length = $sql->num_rows;
          echo $length;
          $index = 0;
          while ($result = mysqli_fetch_array($sql)) {
            $indexname = 'product' . $index;
            $inibuatnama = $result['id_produk'];
        ?>
          <!-- //card product -->
          <div class="card mx-3 my-3 box-custom" style="min-height: 338px; max-width: 200px;">
            <img src="../images/<?php echo $result['gambar_produk'] ?>" class="card-img-top mx-auto" alt="..." style="width: 188px; height: 188px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title"><?php echo $result['nama_produk'] ?></h5>
              <p class="card-text fw-bold text-wrap">Rp. <?php echo $result['harga_produk'] ?></p>
              <div class="d-flex " style="max-width: 200px">
                <input name="minus" type="button" class="box-custom btn px-3 me-2 custom-bg" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" value="-" />

                <div class="form-outline">
                  <input min="0" name="<?php echo $inibuatnama ?>" value="<?php echo $result['jumlah'] ?>" type="number" class="form-control fw-bold" />
                </div>
                <input type="button" name="plus" class="box-custom btn custom-bg px-3 ms-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" value="+" />

              </div>
            </div>
          </div>
          <?php
            $index = $index + 1;
          }
          ?>
          <!-- //print template yang quantiyi   -->
          <!-- <div class="card mx-3 my-3 box-custom" style="min-height: 338px; max-width: 220px;">
          <img src="../images/<?php echo $result['gambar_produk'] ?>" class="card-img-top mx-auto" alt="..." style="width: 188px; height: 188px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $result['nama_produk'] ?></h5>
            <p class="card-text fw-bold text-wrap"><?php echo $result['harga_produk'] ?></p>
            <div id="<?php echo $indexname ?>">
              <button type="button" style="min-width: 166px;" class="box-custom btn btn-block custom-bg " onclick="changeButton(this.id)"><i class="bi bi-cart-plus"></i> Add to cart</button>
            </div>

          </div>
        </div> -->
          <?php
          //     $index = $index + 1;
          //   }
          // }
        }
        ?>

        </div>
      </div>

      <div class="container my-5 d-grid">
        <button name="btn-updateKeranjang" type="submit" class="btn btn-lg py-3 custom-bg btn-block fw-bold">Checkout</button>
      </div>
    </form>


    <footer class="text-center text-white">
      <div class="container border-rounded-8">
        <div class="text-center text-light p-3 bg-dark">
          © 2022 Copyright:
          <a class="text-light text-decoration-none" href="">Bajoel Snack</a>
        </div>
      </div>
    </footer>

    <script>
    function changeButton(index) {
      var element = document.getElementById(index);
      element.removeChild(element.firstElementChild);
      // var button = document.createElement("button");
      // button.innerHTML += "button";
      console.log("button", button);
    }
    </script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
  </body>

</html>
