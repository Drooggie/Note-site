<?php
$mysqli = new mysqli('localhost', 'root', 'mysql', 'todo bd', '3306');

if($mysqli->connect_error) {
    exit('Connection error');
}