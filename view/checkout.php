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


    <title>Checkout</title>
  </head>

  <body class="custom-font">
    <div class="container-fluid py-3 custom-bg" id="custom-bg">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="home.php"><img src="../images/Logo_Transparan_Yellow.png" width="48px"><span style="font-weight:bold;">Bajoel Snack</span></a>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" style="font-weight:600;" href="product.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" style="font-weight:600;" href="#">Cart</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle show" href="#" id="dropdown05" data-bs-toggle="dropdown" aria-expanded="true" style="font-weight:600;">Profile</a>
              <ul class=" dropdown-menu show" aria-labelledby="dropdown05" data-bs-popper="none">
                <li><a class="dropdown-item" href="profile.php">See profile</a></li>
                <li><a class="dropdown-item" href="home.php?logout=true">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mb-5 pb-5">
      <main>
        <div class="py-5 ">

          <h2>Checkout form</h2>
          <!-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> -->
        </div>

        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span style="color: #FFCE00;">Your cart</span>
              <!-- <span class="custom-bg badge rounded-pill">3</span> -->
            </h4>

            <ul class="list-group mb-3">

              <!-- Product -->
              <?php
            include "../action/getKeranjang.php";
            if ($sql->num_rows > 0) {
              $length = $sql->num_rows;
              $index = 0;
              $totalbayar = 0;
              while ($result = mysqli_fetch_array($sql)) {
                $indexname = 'product' . $index;
                $inibuatnama = $result['id_produk'];
                $totalperproduk = $result['harga_produk'] * $result['jumlah'];
                $totalbayar = $totalbayar + $totalperproduk;
            ?>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0"><?php echo $result['nama_produk'] ?></h6>
                  <small class="text-muted">@Rp<?php echo $result['harga_produk'] ?> x<?php echo $result['jumlah'] ?></small>
                </div>
                <span class="text-muted">Rp<?php echo $totalperproduk ?></span>
              </li>
              <?php
                $index = $index + 1;
              }
              ?>

              <?php

            }
            ?>

              <!-- <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Promo code</h6>
                  <small>EXAMPLECODE</small>
                </div>
                <span class="text-success">−$5</span>
              </li> -->
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (Rp)</span>
                <strong>Rp<?php echo $totalbayar ?></strong>
              </li>
            </ul>

            <form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </form>
          </div>
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate="">
              <div class="row g-3">
                <!-- <div class="col-sm-12">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="Username" required="">
                    <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div> -->

                <!-- <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                  <input type="email" class="form-control" id="email" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div> -->
                <form method="POST" action="../action/checkoutCart.php">
                  <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="alamat" class="form-control" id="address" placeholder="Sunan Kali Jaga Dalam, Malang" required />
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
                  <h4 class=" mt-3">Payment</h4>
                  <div class="my-3">
                    <div class="form-check">
                      <input id="credit" name="pembayaran" type="radio" class="form-check-input" checked="" required="" value="MEBAY01" />
                      <label class="form-check-label" for="credit">COD</label>
                    </div>
                    <div class="form-check">
                      <input id="debit" name="pembayaran" type="radio" class="form-check-input" required="" value="MEBAY02" />
                      <label class="form-check-label" for="debit">Transfer</label>
                    </div>
                  </div>
                  <hr class="my-3">

                  <button class="w-100 btn btn-lg" style="background-color: #FFCE00;" name="btn-checkout" type="submit">Continue to checkout</button>
                </form>

                <!-- <div class="col-md-5">
                  <label for="country" class="form-label">Country</label>
                  <select class="form-select" id="country" required="">
                    <option value="">Choose...</option>
                    <option>Indonesia</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select class="form-select" id="state" required="">
                    <option value="">Choose...</option>
                    <option>California</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="zip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required="">
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div> -->
              </div>

              <!-- <hr class="my-4">

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
              </div>

              <hr class="my-4"> -->


              <!-- 
              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div> -->


            </form>
          </div>
        </div>
      </main>
    </div>

    <footer class="text-center text-white">
      <div class="container border-rounded-8">
        <div class="text-center text-light p-3 bg-dark">
          © 2022 Copyright:
          <a class="text-light text-decoration-none" href="">Bajoel Snack</a>
        </div>
      </div>
    </footer>



    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
  </body>

</html>
