<?php
session_start();
if( !isset($_SESSION["AUTH"])) {
    include_once "./html/cotizar.php";
} else {
    require_once "./html/cotizar.php";
}