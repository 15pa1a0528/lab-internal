<?php
include "connect.php";
session_start();
 
if(isset($_POST["log"])){
    $mail=$_POST["mail"];
    $pass1=$_POST["pass1"];
    $qry="SELECT email FROM `reg` where email='$mail'and pass1='$pass1' ";
    $res=mysqli_query($conn,$qry);
    if(mysqli_num_rows($res)>0){
        echo "login successfully";
        header("location:fb.php");
    }
       
}

?>
<?php
include "connect.php";
if(isset($_POST["REG"])){
    header("location:reg.php");
}
?>


<html>
<head>
<title>login
</title>
<link rel="stylesheet" href="login.css"/>
<style>
body{
    background-image:url("products.jpg");
}
</style>
</head>
<body style="background-image:url("products.jpg");">
    <label  style="text-align:center;">LOGIN</label></br>
<form action="" method="POST">

Email:&nbsp<input type="email" name="mail"/></br></br>
PASSWORD1:<input type="password" name="pass1"/></br></br>
<input type="submit" value="LOGIN" name="log"/></br></br>
<form></br>
<form  action="" method="POST">
    not yet registered: 
  <input type="submit" value="REGISTER" name="REG" >
</form>
</body>
</html>
<?php
