<?php
require_once "config.php";
require_once "classes/PreviewProvider.php";
require_once "classes/CategoryContainers.php";
require_once "classes/Entity.php";
require_once "classes/EntityProvider.php";

if (isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
}

$userLoggedIn = $_SESSION["userLoggedIn"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Reeceflix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css"/>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/274e754baf.js" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</head>
<body>
<div class='wrapper'>
