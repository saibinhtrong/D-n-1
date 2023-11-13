<?php
session_start();
include_once "model/pdo.php";
include "View/header.php";
include "global.php";

if ((isset($_GET['act'])) && $_GET['act'] != "") {
    $act = $_GET['act'];
   
} else {
    include "View/home.php";
}
include "View/footer.php";
