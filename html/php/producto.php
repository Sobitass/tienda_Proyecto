<?php
session_start();
if( !isset($_SESSION["AUTH"])) {
    include_once "./html/producto.php";
} else {
    require_once "./html/producto.php";
}