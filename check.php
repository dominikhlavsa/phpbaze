<?php
session_start();

if(!isset($_SESSION['id'])){
    echo('ma daj vamo');
    die();
}


