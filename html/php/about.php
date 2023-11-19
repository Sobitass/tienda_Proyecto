<?php
session_start();
if( !isset($_SESSION["AUTH"])) {
    include_once "./html/about.php";
} else {
    require_once "./html/about.php";
}