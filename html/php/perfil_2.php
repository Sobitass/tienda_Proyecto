<?php
session_start();
if( !isset($_SESSION["AUTH"])) {
    include_once "./html/perfil_2.php";
} else {
    require_once "./html/perfil_2.php";
}