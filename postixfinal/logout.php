<?php
session_start();
unset($_SESSION["cid"]);
unset($_SESSION["email"]);
header("Location:index.html");
?>
