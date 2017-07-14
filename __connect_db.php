<?php
$mysqli = new mysqli('localhost', 'root', 'admin', 'tastea');

$mysqli->query("SET names utf8");

if(! isset($_SESSION)){
    session_start();
}