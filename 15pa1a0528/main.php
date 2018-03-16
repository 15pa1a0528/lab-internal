<?php
include "connect.php";
if(isset($_POST["REG"])){
    header("location:reg.php");
}
?>
<?php
include "connect.php";
if(isset($_POST["LOG"])){
    header("location:login.php");
}
?>

<html>
<head>
<title>feedback
</title>
<link  rel="stylesheet" href="main.css" >
</head>
<body>
<div id="k">
 <h1>AMAZON
 </h1>

<header>
<ul>
<li><form  action="" method="POST">
  <input type="submit" value="REGISTER" name="REG" >
</form></li>
<li>
<form action="" method="POST">
  <input type="submit" value="LOGIN" name="LOG" >
</form>
</li>
</header>
</div>
<form action="" method="POST">
 <ul>
   <div id="l">
 <img src="iphone.jpg" alt="iphone" width="400px"/></br>
 <img src="dishes.jpg" alt="dishes" width="400px"/></br>
 <?php
            include "connect.php";
            $qry ="SELECT * FROM `upload` WHERE 1;";
            $sql = mysqli_query($conn,$qry) or die('cfailed');
            if(mysqli_num_rows($sql)>0){
                while($row=mysqli_fetch_assoc($sql))
                    echo $row['file']."NAME:".$row['name']."</br>"."DESCRIPTION".$row['des']."</br>";     
            }
        ?>
 </ul>
</div>
</form>
</body>
</html>