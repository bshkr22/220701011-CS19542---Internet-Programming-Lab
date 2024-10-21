<?php
$conn=mysqli_connect('localhost','root','','formula1');
session_start();
if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
   
 
    $select = " SELECT * FROM users WHERE email = '$email' && pass = '$pass' ";
 
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
       $row = mysqli_fetch_array($result);
 
       if($row['email'] == 'admin@gmail.com'){
 
          header('location:admin_page.php');
 
       }elseif($row['email'] == $email){
 
          
          header('location:index.php');
 
       }
      
    }else{
        ?>
        <script>alert('incorrect email or password!');
       </script>
       <?php
    }
 
 };
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign in</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="icon" href="f1 logo.png">
    <style>
      .design{
         min-height:100vh;
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 20px;
         padding-bottom: 60px;
         background: #eee;
      }

      .design form{
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
        background: #fff;
        text-align: left;
        width: 500px;
      }
      .design form h3{
        font-size: 30px;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 10px;
        
      }
      .design form input{
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
      
      .design form p{
        margin-top: 10px;
        font-size: 20px;
        color: #333;
        text-align: center;
      }
      .design form p a{
       color:crimson;
      }

      
        * {
  box-sizing: border-box;
}

    </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="f1 logo.png" alt="" width="120" height="90" class="d-inline-block align-top mx-2">      
    </a>
  </div>
</nav>
   <div class="design">
   
      <form action="" method="post">
         <h3>SIGN IN</h3><hr>
         <label for="email">Email address</label>
         <input type="email" name="email" required placeholder="Enter your email address">
         <label for="pass">password</label>
         <input type="password" name="password" required placeholder="Enter your password">
         
         <input type="submit" name="submit" value="SIGN IN" class="form-btn">
         <p>Don't have an account yet? <a href="register.php">Register</a></p>
      </form>
   
   </div>
</body>
</html>
