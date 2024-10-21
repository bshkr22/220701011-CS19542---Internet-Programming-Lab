<?php
$servername = "localhost";
$username = "";
$password = "";
$db="";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FAQ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" href="f1 logo.png">
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Show FAQ</h1>
</div>
  


<?php

$sql="select * from faqs";
$result=mysqli_query($conn,$sql);
//$i=0;
$faqs=mysqli_fetch_all($result)
/* 
// fetch all FAQs from database
$sql = "SELECT * FROM faqs";
$statement = $conn->prepare($sql);
$statement->execute();
$faqs = $statement->fetchAll(); */

?>
<div class="container mt-5">
<div class="accordion" id="accordionExample">
                <?php foreach ($faqs as $faq): ?>
                    <div class="accordion-item">
                   <h2 class="accordion-header" id="headingOne">
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
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>



</body>
</html>
