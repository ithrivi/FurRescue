<?php
session_start();
unset($_SESSION["login"]);
echo "<script>alert('Hello World')</script>";
header("Location:sign.php");
exit();
?>