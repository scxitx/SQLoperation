<?php
$pdo = new PDO('mysql:host=localhost;dbname=user1', 'root', '123');
$pdo->exec('set names utf8');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
?>