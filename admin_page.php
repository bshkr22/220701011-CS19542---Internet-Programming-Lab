<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    

<style>

img.background {
      position: absolute;
      left: 0px;
      top: 0px;
      z-index: -1;
      width: 100%;
      height: 100%;
      filter: blur(5px);
      }
.con {
  height: 100%;
  width: 100%;
  display: flex;
  position: fixed;
  align-items: center;
  justify-content: center;
}
p{
    color: red;
}

</style>
    <title>Formula 1</title>
    <link rel="icon" href="f1 logo.png">
</head>
<body>
    <div class="container-fluid">
        <!-- name bar-->
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand" href="#">
              <img src="/f1_images/fia_logo.png" width="50" height="40" alt="" class="d-inline-block align-top mx-2">Fédération Internationale de l'Automobile
            </a>
            <form class="form-inline">
               <input type="button" class="btn btn-danger my-2 my-sm-0" onclick="login_page()" value="Login"/>
               
           </form>
        </nav>  
    </div>

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
  <br>

<div class="con"> 
<img class="background" src="f1-race.png" alt="Aleq">
<p class="display-1 my-auto" align="center"><b>Welcome Admin</b></p>
</div>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script> 

<script>
function login_page(){
    window.location.replace(" login.php");
}


</script>
</body>
</html>
