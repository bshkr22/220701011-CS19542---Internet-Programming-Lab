<?php
$conn= mysqli_connect("localhost","","","");
if(isset($_POST['submit'])){
    $name=$_POST["name"];
    if($_FILES["image"]["error"]==4){
        echo "<script> alert('Image Does not exist'); </script>";
    }
    else{
        $fileName=$_FILES["image"]["name"];
        $fileSize=$_FILES["image"]["size"];
        $tempName=$_FILES["image"]["temp_name"];

        $validImageExtension=['jpg','jpeg','png'];
        $imageExtension =explode('.',$fileName);
        $imageExtension=strtolower(end($imageExtension));
        if(!in_array($imageExtension,$validImageExtension)){
            echo "<script> alert('Invalid'); </script>"; 
        }
        else if($fileSize>1000000){
            echo "<script> alert('size large'); </script>"; 
        }
        else{
            $newImageName=uniqid();
            $newImageName.='.' . $imageExtension;
            move_uploaded_file($tempName,'upload/'.$newImageName);
            $query="INSERT INTO img VALUES('','$name','$newImageName')";
            mysqli_query($conn,$query);
            echo "<script>
            alert('Successfully added');
            document.location.href='data.php';
            </script>
            " ;
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Upload image</title>
        <link rel="icon" href="f1 logo.png">
        <style type="text/css">
          .formdesign{
            width: 50%;
            margin: auto;
            padding: 20px 15px;
          }
        </style>
    </head>

    <body>
        <div class="formdesign">
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" value="" required><br>
                <label for="image">Image: </label>
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""> <br><br>
                <button type="submit" name="button">Upload</button>
             </form>
        </div>
    </body>
</html>
