<?php
include "connect.php";
if(isset($_POST["logo"])){
    header("location:logout.php");
}
?>
<?php
    include "connect.php";
    
        if (isset($_POST['sub'])) {
            $file_name = $_FILES['file']['name'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $nm = $_POST['name'];
            $des = $_POST['des'];
            move_uploaded_file($file_tmp,"uploads/".$file_name) or die("error moving file");
            $qry = "INSERT INTO `upload`(`file`, `name`, `des`) VALUES ('$file_name','$nm','$des')";
            $sql = mysqli_query($conn,$qry) or die('cfailed');
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="fb.css"/>
</head>
    <body>
    <h2>Upload the Product</h2>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file"><br>
            Name:<input type="text" name="name"><br>
            Description:<textarea name="des" cols="30" rows="10"></textarea>
            <input type="submit" name="sub" value="Upload">
            </form>
            <form  action="" method="POST">
  
  <input id type="submit" value="LOGOUT" name="logo" >
</form>
    </body>
</html>