<?php
session_start();
if (isset($_SESSION["point"])):
$point = $_SESSION["point"];
$point = $point + 1;
$_SESSION["point"] = $point;?>
<?php echo $point; ?>回目の訪問です
<?php else:
$_SESSION["point"] = 1;?>
初訪問です
<?php endif; ?>
