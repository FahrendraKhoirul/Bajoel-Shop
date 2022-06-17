<html lang="en">
  <?php

session_start();
if (!isset($_SESSION['bajoel_shop'])) {
  header("Location: login.php");
}

include "../action/getUserdata.php";

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
    <div class="container-fluid py-3 custom-bg" id="">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#"><img src="../images/Logo_Transparan_Yellow.png" width="48px"><span style="font-weight:bold;">Bajoel Snack</span></a>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" style="font-weight:600;" href="product.php">Product</a>
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
    <div class="px-4 pt-5 my-5 text-center ">
      <h1 class="display-4 fw-bold">Hai, <?php echo $fullname ?> </h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Lets buy Bajoel product and dont forget to share with other.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
          <a href="product.php"><button type="button" style="background-color: #FFCE00; font-weight:bold ;" class="btn btn-lg px-4 me-sm-3 ">Buy</button></a>
          <a href="checkout.php"><button onclick="" type="button" style="border-color: #FFCE00; font-weight:500 ;" class="btn btn-lg px-4">Cart</button></a>
        </div>
      </div>
      <div>
        <div class="container px-5  ">
          <img src="../images/Frame 41.png" class="img-fluid hover-zoom border rounded-3 shadow-lg mb-4" alt="Example image" loading="lazy">
        </div>
      </div>
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
