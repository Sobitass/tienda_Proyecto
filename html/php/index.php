<?php
session_start();
if( !isset($_SESSION["AUTH"])) {
    include_once "./html/login.php";
} else {
    require_once "./html/login.php";
}