<?php
session_start();
if( !isset($_SESSION["AUTH"])) {
    include_once "./html/services.php";
} else {
    require_once "./html/services.php";
}