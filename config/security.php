<?php 
session_start();
if(!isset($_SESSION['USERNAME'])){
    header("Location:index");
    exit();
}