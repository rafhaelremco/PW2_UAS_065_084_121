<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Halaman Sign Up
            </div>
            <form action=" " method="post">
              <div class="card-body">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>
                      </span>
                      <input type="text" class="form-control" id="username" name="username" required placeholder="Masukkan Username" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2"/>
                        </svg>
                      </span>
                      <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan Password" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                    <div class="row mt-4 mb-3">
                      <button type="submit" class="btn btn-primary" name="btnDaftar">Sign Up</button>
                    </div>
                  </div>  
              </div>
            </form>
        </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<?php
include 'koneksi.php';
if(isset($_POST['btnDaftar'])){
    $username=$_POST['username'];
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);

    $query = mysqli_query($konek,"INSERT INTO user VALUES('$username','$password')");

    if ($query) {
        echo"
            <script>
                alert('Sign Up Success!');
                window.location.href = 'login.php';
            </script>
        ";
    }
}

?>