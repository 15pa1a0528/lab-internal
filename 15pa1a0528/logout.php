<?php
session_destroy();
header("location:main.php");
mysqli_close();
?>