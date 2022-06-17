<html lang="en">
  <?php

session_start();
if (isset($_SESSION['bajoel_shop'])) {
  header("Location: hone.php");
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

  <body class="custom-font text-center">
    <section class="vh-100" style="background-color: #FFCE00;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <form method="POST" action="../action/loginUser.php">
                  <h3 class="mb-5">Sign in</h3>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" name="email" aria-describedby="inputGroup-sizing-default" />
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                    <input type="password" class="form-control" aria-label="Sizing example input" name="password" aria-describedby="inputGroup-sizing-default" />
                  </div>

                  <button class="w-100 btn btn-lg mb-3" name="btn-login" style="background-color: #FFCE00;" type="submit">Login</button>

                  <a class="w-100 fs-5" style="text-decoration: none; color: #FFCE00;" href="register.php">Register</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
  </body>

</html>
