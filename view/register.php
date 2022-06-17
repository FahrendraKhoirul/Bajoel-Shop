<html lang="en">

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
    <!-- Section: Design Block -->
    <section class="text-center">
      <!-- Background image -->
      <div class="p-5 bg-image" style="
        background-image: url(../images/pattern.png);
        height: 300px;
        "></div>
      <!-- Background image -->

      <div class="container py-5 h-100">


        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -220px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
          <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">


              <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <form method="POST" action="../action/addUser.php">
                  <h3 class="mb-3">Sign Up Now</h3>

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Fullname</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" name="fullname" aria-describedby="inputGroup-sizing-default" />
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                    <input type="email" class="form-control" aria-label="Sizing example input" name="email" aria-describedby="inputGroup-sizing-default" />
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Link Photo</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" name="foto" aria-describedby="inputGroup-sizing-default" />
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" name="jeniskelamin" aria-describedby="inputGroup-sizing-default" />
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Address</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" name="alamat" aria-describedby="inputGroup-sizing-default" />
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">No Handphone</span>
                    <input type="number" class="form-control" aria-label="Sizing example input" name="telepon" aria-describedby="inputGroup-sizing-default" />
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                    <input type="password" class="form-control" aria-label="Sizing example input" name="password" aria-describedby="inputGroup-sizing-default" />
                  </div>

                  <button name="btn-addUser" class="w-100 btn btn-lg mb-3" style="background-color: #FFCE00;" type="submit">Register</button>
                  <a class="w-100 fs-5" style="text-decoration: none; color: #FFCE00;" href="login.php">Login</a>
                </form>
              </div>

            </div>
          </div>
        </div>
    </section>
    <!-- Section: Design Block -->
    </div>



    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
  </body>

</html>
