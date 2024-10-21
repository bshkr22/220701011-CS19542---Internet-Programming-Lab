<?php
 
    // connect with database

   // fill in the details of your database
   $conn = new PDO("mysql:host=localhost;dbname=formula1", "root", "");
   // [query to get all FAQs]
    $sql = "SELECT * FROM faqs ORDER BY id DESC";
$statement = $conn->prepare($sql);
$statement->execute();
$faqs = $statement->fetchAll();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="f1 logo.png">
        <title>View FAQ</title>
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
            <!-- table heading -->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Answer</th>
                    
                </tr>
            </thead>
 
            <!-- table body -->
            <tbody>
                <?php foreach ($faqs as $faq): ?>
                    <tr>
                        <td><?php echo $faq["id"]; ?></td>
                        <td><?php echo $faq["question"]; ?></td>
                        <td><?php echo $faq["answer"]; ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</body>
</html>
