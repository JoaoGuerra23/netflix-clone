<?php
ob_start(); // Turns on output buffering
session_start();

date_default_timezone_set("Europe/London");


try {
    $con = new PDO("mysql:dbname=sandbox;host=sql-master1", "sandbox", "sandbox");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    exit("Connection Failed: " . $e->getMessage());
}