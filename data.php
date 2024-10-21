<?php
// fill in the details of your database username,password,database_name
$conn= mysqli_connect("localhost","root","","formula1");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Meme</title>
    <link rel="icon" href="f1 logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
  </head>

  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="admin_page.php"><img src="f1 logo.png" width="40" height="30" class="d-inline-block align-top mx-2">Formula 1</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="true" href="admin_page.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="add.php">Add FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="admin_view_faq.php">View FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="im.php">Upload Meme</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="data.php">View Meme</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container" style="margin-top:50px; margin-bottom:50px;">
  <div class="row">
    <div class="offset-md-2 col-md-8">
    <table class="table table-bordered" style="margin-left: auto; margin-right: auto;">
      <thead>
        <th>#</th>
        <th>Caption</th>
        <th>Image</th>
      </thead>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM img ORDER BY id DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td> <img src="upload/<?php echo $row["image"]; ?>" width = 200 height=200 title="<?php echo $row['image']; ?>"> </td>
      </tr>
      <?php endforeach; ?>
    </table>
    </div>
</div>
  </div>
  </body>
</html>
