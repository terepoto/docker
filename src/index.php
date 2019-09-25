<?php
include './index.html';
include './db.php';

$db = new DB('db', 'database', 'root', 'password');
$conn = $db->connection();
