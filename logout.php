<?php
ob_clean();
ob_start();
session_start();
session_destroy();
header("location:login.php");
?>