<?php
    $pdo = new PDO('mysql:host=localhost;dbname=downsmaster', 'root', '');
    $pdo->exec("set names utf8");