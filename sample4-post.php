<?php
session_start();
if(isset($_POST["name"])){
  $_SESSION["name"] = $_POST["name"];
  $_SESSION["email"] = $_POST["email"];
}
header("Location: ./sample4.php");
?>
