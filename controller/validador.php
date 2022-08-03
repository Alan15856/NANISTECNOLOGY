<?php
session_start();

if(empty($_SESSION['login'])){
    header("Location: ../login");   
} else{
    header("Locaion: ../home");
}
?>