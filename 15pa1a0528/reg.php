<?php
include "connect.php";
if(isset($_POST["LOG"])){
    header("location:login.php");
}
?>
<?php
include "connect.php";
session_start();
 
if(isset($_POST["reg"])){
    $name=$_POST["name"];
    $mail=$_POST["mail"];
    $pass1=$_POST["pass1"];
    $pass2=$_POST["pass2"];
    $qry="INSERT INTO `reg` (`name`,`email`,`pass1`,`pass2`) VALUES ('$name','$mail','$pass1','$pass2')";
    mysqli_query($conn,$qry);
    if($pass1==$pass2){
        echo "register success";
        header("location:login.php");
    }
}

?>

<html>
<head>
<title>register
</title>
<link rel="stylesheet" href="reg.css"/>
</head>
<body style="background-image:url("products.jpg");">
    <label style="text-align:center;">REGISTER</label>
    
<form action="reg.php" method="POST">
</br></br>
NAME:<input type="text" required name="name"/></br></br>
Email:&nbsp<input type="email"required  name="mail"/></br></br>
PASSWORD1:<input type="password" required  name="pass1"/></br></br>
PASSWORD2:<input type="password" required  name="pass2"/></br></br>
<input type="submit" value="register" name="reg"/></br>
</form>
<form action="" method="POST">
 already registerd:
  <input type="submit" value="LOGIN" name="LOG" >
</form>
</form>
</body>
</html>

