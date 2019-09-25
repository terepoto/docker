<?php
include './index.html';
include './db.php';

$db = new DB('db', 'database', 'root', 'password');

if ($db->connection()) {
    echo '<h2>Mysql接続成功</h2>';
}
