<?php
 
    // connect with database
    $conn = new PDO("mysql:host=localhost;dbname=formula1", 'root', '');
 
    // fetch all FAQs from database
    $sql = "SELECT * FROM faqs";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $faqs = $statement->fetchAll();
 
?>
<!DOCTYPE html>
<html>
<head>
        <title>FAQ</title>
        <link rel="icon" href="f1 logo.png">
<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

<!-- include CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />

<style>
.round{
  border: 1px solid gray;
  border-radius: 8px;
  padding: 5px;
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
            <a class="nav-link text-light" href="ada_pongada.php">Race</a>
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
<div class="container-fluid p-3 bg-dark text-white text-center">
<h1>FAQ</h1>
</div>

<div class="container mt-5">
<div class="accordion" id="accordionExample">
                <?php foreach ($faqs as $faq): ?>
                    <div class="accordion-item">
                   <h2 class="accordion-header round" id="headingOne">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $faq['id'] ?>" aria-expanded="true" aria-controls="collapse<?php echo $faq['id'] ?>">
                   <?php echo $faq['question']; ?>
                </button>
                    </h2>
                <div id="collapse<?php echo $faq['id'] ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
             <div class="accordion-body">
             <?php echo $faq['answer']; ?>
              </div>
             </div>
             </div>
             <br>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
