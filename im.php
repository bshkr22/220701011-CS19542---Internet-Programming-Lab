<?php
// fill in the details of your database
$conn= mysqli_connect("localhost","root","","formula1");
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'upload/' . $newImageName);
      $query = "INSERT INTO img VALUES('', '$name', '$newImageName')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        
        document.location.href = 'im.php';
      </script>
      ";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload Meme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <style type="text/css">
          .design{
         min-height:100vh;
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 20px;
         padding-bottom: 60px;
         
      }
      .design form{
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
        background: #fff;
        text-align: left;
        width: 500px;
      }
      .design form input,
      .design form textarea{
        width: 100%;
        padding: 10px 15px;
        font-size: 17px;
        margin: 8px 0;
        background: #eee;
        border-radius:  5px;
      }

      .design form .form-btn{
        background: crimson;
        color: white;
        text-transform: capitalize ;
        font-size: 20px;
        cursor: pointer;
      }
      .design form h3{
        font-size: 30px;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 10px;
        
      }

      *{
        box-sizing: border-box;
      }
        </style>
        <link rel="icon" href="f1 logo.png">
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
            <a class="nav-link text-light" aria-current="true" href="admin_page.php">Home</a>
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

  <div class="design">
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
    <h3>Upload Meme</h3><hr>
      <label for="cap">Caption : </label>
      <input type="text" name="name" id = "name" required value=""> <br>
      <label for="image">Image : </label>
      <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
      <input type = "submit" name = "submit" class="form-btn" value="Upload"/>
    </form>
  </div>
  </body>
</html>
