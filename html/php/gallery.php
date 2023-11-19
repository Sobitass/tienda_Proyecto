<?php
session_start();
if( !isset($_SESSION["AUTH"])) {
    include_once "./html/gallery.php";
} else {
    require_once "./html/gallery.php";
}