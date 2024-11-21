<?php
// session = loginnya suatu user

session_start();
session_destroy();
header("Location: login.php");

?>