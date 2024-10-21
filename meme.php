<?php
$conn= mysqli_connect("localhost","root","","formula1");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

    <link rel="icon" href="f1 logo.png">
    <title>MEME</title>

  <style>
    .container .card {
      border: 0.5px solid black;
    }
  </style>

  </head>
  
  
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="index.php"><img src="f1 logo.png" width="40" height="30" class="d-inline-block align-top mx-2">Formula 1</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="true" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="teams.php">Teams</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-light" href="race_details.php">Race</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="f1_slang.php">Terminologies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="table.php">Race outcomes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="meme.php">Meme</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="show_faq.php">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <?php
      $rows = mysqli_query($conn, "SELECT * FROM img ORDER BY id DESC")
      ?>
      
      <div class="container-fluid p-3 bg-dark text-white text-center">
<h1>MEME</h1>
</div>
    <div class="container">
    <div class="row my-3">
    <?php foreach ($rows as $row) : ?>
        <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="card mt-4">
            
            <img src="upload/<?php echo $row["image"]; ?>" class="card-img-top" width="300" height="300"/> 
            <div class="card-body">
                <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                
            </div>
        </div>
        
    </div>
    <?php endforeach; ?>
    </div>
    
  </body>
</html>
