<?php
 
    // connect with database
    // fill in the details of the database to establish the connection
    $conn = new PDO("mysql:host=localhost;dbname=formula1", "root", "");
 
    // check if insert form is submitted
    if (isset($_POST["submit"]))
    {
        // create table if not already created
        $sql = "CREATE TABLE IF NOT EXISTS faqs (
            id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
            question TEXT NULL,
            answer TEXT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
        $statement = $conn->prepare($sql);
        $statement->execute();
 
        // insert in faqs table
        $sql = "INSERT INTO faqs (question, answer) VALUES (?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([
            $_POST["question"],
            $_POST["answer"]
        ]);
    }
 
    // [query to get all FAQs]
    $sql = "SELECT * FROM faqs ORDER BY id DESC";
$statement = $conn->prepare($sql);
$statement->execute();
$faqs = $statement->fetchAll();
 
?>
<!DOCTYPE html>
<head>
    <title>Add FAQ</title>
<link rel="icon" href="f1 logo.png">
<!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

<!-- jquery cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
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
<!-- layout to add query -->
<div class="design">
        <!-- To add FAQ -->
         
        <form method="POST" action="add.php">
            <!-- question --->
            <h3>Add FAQ</h3><hr>
                <label for="ques">Enter Question</label>
                <input type="text" name="question" required />
            

            <!-- answer -->
            
                <label for="ans">Enter Answer</label>
                <textarea name="answer" id="answer" required></textarea>
           

            <!-- submit button-->
            <input type="submit" name="submit" class="form-btn" value="Add FAQ" />

        </form>
    
</div>

</body>
</html>
