<?php
include "connect.php";
if(isset($_POST["logo"])){
    header("location:logout.php");
}
?>
<?php
include "connect.php";
session_start();
if(isset($_POST["submit"])){
    $name=$_POST["imgname"];
    $text=$_POST["feedback"];
    $qry="INSERT INTO `fbuser` (`imgname`,`feedback`) VALUES ('$name','$text')";
    mysqli_query($conn,$qry);
}

?>

<html>
<head>
<title>feedback
</title>
<link rel="stylesheet" href="fbuser.css"/>
<style>
body{
    background-image:url("products.jpg");
}
</style>
</head>
<body style="background-image:url("products.jpg");">
<form action="fbuser.php" method="POST">
<legend>REGISTER</legend>
image name:<input type="text" name="imgname"/></br></br>
feedback:</br><textarea name="feedback" col=50 row=50></textarea></br></br>
<input type="submit" value="upload" name="submit"/>
</form>
<form  action="" method="POST">
  
  <input id type="submit" value="LOGOUT" name="logo" >
</form>
</body>
</html>