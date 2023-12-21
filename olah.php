<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css" />
    <title>Sugestion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div>

      <h2 class = "text-center fw-bold mt-5">
        Recomended Food
      </h2>
      <p class = "text-center mt-3 mb-5">
        Add Sugestion
      </p>
      
      <form action="proses.php" method="POST">
        
        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="rekomendasi" class="col-sm-2 col-form-label">Place</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="rekomendasi" name="rekomendasi">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="sosial" class="col-sm-2 col-form-label">Social</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="sosial" name="sosial">
          </div>
        </div>
        
        <div class="mb-3 row">
          <button type='submit' class='btn btn-primary' name='btnProses' value='tambah'>Add</button>
        </div>
        
      </form>
    </div>
      
      
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>