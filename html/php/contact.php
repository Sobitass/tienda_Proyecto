<?php
session_start();
if( !isset($_SESSION["AUTH"])) {
    include_once "./html/contact.php";
} else {
    require_once "./html/contact.php";
}