<?php
$conn=mysqli_connect('localhost','root','','formula1');
if(isset($_POST['submit'])){

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $date = $_POST['dob'];
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $country = $_POST['con_residence'];

  $select = " SELECT * FROM users WHERE email = '$email' && pass = '$pass' ";

  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0){

     $error[] = 'user already exist!';
  }
  else if($pass!=$cpass){
    
    ?>
    <script>
      alert('Password not matched');
    </script>
    <?php
    
  }
  else{

        $insert = "INSERT INTO users(id,name,dob,country, email, pass) VALUES(1,'$name','$date','$country','$email','$pass')";
        $success=mysqli_query($conn, $insert);
        if($success)
        ?>
    <script>
      alert('inserted');
    </script>
    <?php
        header('location:login.php');
     
  }

};
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" href="f1 logo.png">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
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
        margin-bottom: 10px;
        
      }
      .design form input,
      .design form select{
        width: 100%;
        padding: 10px 15px;
        font-size: 17px;
        margin: 8px 0;
        background: #eee;
        border-radius:  5px;
      }

      .design form select option{
        background: #fff;
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

      .design form .error-msg{
        margin:10px 0;
        display: block;
        background: crimson;
        color:#fff;
        border-radius: 5px;
        font-size: 20px;
        padding:10px;
        }
        * {
  box-sizing: border-box;
}

    </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="f1 logo.png" alt="" width="120" height="90" class="d-inline-block align-top mx-2">      
    </a>
  </div>
</nav>
   <div class="design">
   
      <form action="" method="post">
         <h3>Register</h3><hr>
         <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            };
         };
         ?>
         <label for="Name">Name</label>
         <input type="text" name="name" placeholder="Name" required>
         <label for="dob">Date of birth</label>
         <input type="text" name="dob" placeholder="(YYYY/MM/DD) required">
         <label for="residence">Country of residence</label>
         <select name="con_residence" placeholder="Select">
         <option value="in" class="text-muted">Select</option>
            <option value="in">India</option>
            <option value="us">United States</option>
            <option value="ca">Canada</option>
            <option value="us">United States</option>
         </select>
         <label for="email">Email address</label>
         <input type="email" name="email"  placeholder="Email address" required>
         <label for="pass">Password</label>
         <input type="password" name="password" required placeholder="**********">
         <label for="pass">Confirm password</label>
         <input type="password" name="cpassword" required placeholder="**********">
         
         <input type="submit" name="submit" value="REGISTER" class="form-btn">
         <p>Already have an account? <a href="login.php">Login</a></p>
      </form>
   
   </div>
</body>
</html>
