<?php
session_start();
if(isset($_POST["name"])){
  $_SESSION["name"] = $_POST["name"];
  $_SESSION["email"] = $_POST["email"];
  $_SESSION["ua"] = $_SERVER["HTTP_USER_AGENT"];
}
header("Location: ./sample5.php");
?>
