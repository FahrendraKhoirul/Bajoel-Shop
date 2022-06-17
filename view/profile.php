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
          <a class="navbar-brand" href="home.php"><img src="../images/Logo_Transparan_Yellow.png" width="48px"><span style="font-weight:bold;">Bajoel Snack</span></a>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" style="font-weight:600;" href="product.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="font-weight:600;" href="checkout.php">Cart</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle show active" href="#" id="dropdown05" data-bs-toggle="dropdown" aria-expanded="false" style="font-weight:600;">Profile</a>
              <ul class=" dropdown-menu show " aria-labelledby="dropdown05" data-bs-popper="none">
                <li><a class="dropdown-item disabled" href="#">See profile</a></li>
                <li><a class="dropdown-item" href="home.php?logout=true">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container row mx-auto">
      <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" height="150px" src="<?php echo $foto ?>"><span> </span>
        </div>
      </div>
      <div class="col-md-5 border-right">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Profile Settings</h4>
          </div>
          <div class="row mt-3">
            <div class="col-md-12"><label class="labels">Name</label>
              <p class="fs-5" style="font-weight: 500;"><?php echo $fullname ?></p>
            </div>
            <div class="col-md-12"><label class="labels">Email</label>
              <p class="fs-5" style="font-weight: 500;"><?php echo $email ?></p>
            </div>
            <div class="col-md-12"><label class="labels">Address</label>
              <p class="fs-5" style="font-weight: 500;"><?php echo $alamat ?></p>
            </div>
            <div class="col-md-12"><label class="labels">No Handphone</label>
              <p class="fs-5" style="font-weight: 500;"><?php echo $telepon ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Change Password</h4>
          </div>
          <form method="POST">
            <div class="row mt-3">
              <div class="col-md-12">
                <label class="labels">Current Password</label>
                <input name="current_pass" type="text" class="form-control" placeholder="enter your current password" value="">
              </div>
              <div class="col-md-12">
                <label class="labels">New Password</label>
                <input id="txtPassword" name="new_pass" type="text" class="form-control" placeholder="enter your new password" value="">
              </div>
              <div class="col-md-12">
                <label class="labels">Retype New Password</label>
                <input id="txtConfirmPassword" name="retype_pass" type="text" class="form-control" placeholder="retype your new password" value="">
              </div>
            </div>

            <div class="mt-5 text-center"><button name="sub-updatepass" style="background-color: #FFCE00;" class="btn profile-button" id="btnSubmit" onclick="Validate()" type="button">Change Password</button></div>
          </form>
        </div>
      </div>
    </div>

    <div class="container mx-auto">
      <div class="p-3 px-5">
        <h4>Order History</h4>
        <!-- show table -->
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Date</th>
              <th scope="col">Product Name</th>
              <th scope="col">Quantity</th>
            </tr>
          </thead>
          <tbody>
            <?php

          include "../action/getPesanan.php";
          $std_num = 1;
          if (!empty($sql) && $sql->num_rows > 0) {
            while ($result = mysqli_fetch_array($sql)) {
              echo "<tr>";
              echo "<th>" . $std_num . "</th>";
              echo "<td>" . $result['tanggal_pesanan'] . "</td>";
              echo "<td>" . $result['nama_produk'] . "</td>";
              echo "<td>" . $result['jumlah'] . "</td>";
              echo "</tr>";
              $std_num++;
            }
          } else {
          }

          ?>
            <!-- <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr> -->
          </tbody>
        </table>
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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">...</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- <script type="text/javascript">
    $(function() {
      $("#btnSubmit").click(function() {
        var password = $("#txtPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword) {
          // alert("Passwords do not match.");
          return false;
        }
        return true;
      });
    });
    </script> -->
    <script type="text/javascript">
    // document.getElementByName("sub-updatepass").onclick = Validate();
    var el = document.getElementByName("sub-updatepass");
    if (el.addEventListener)
      el.addEventListener("click", doFunction, false);
    else if (el.attachEvent)
      el.attachEvent('onclick', doFunction);

    function Validate() {
      var password = document.getElementsById("txtPassword").value;
      var confirmPassword = document.getElementsByName("txtConfirmPassword").value;
      if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
      }
      return true;
    }
    </script>
  </body>

</html>
