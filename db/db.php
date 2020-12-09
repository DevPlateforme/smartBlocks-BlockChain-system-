<?php
//db connexion 

$dsn = 'mysql:dbname=BLOCKCHAIN;host=127.0.0.1';

$user = 'root';

$password = '';


 $db = new PDO($dsn, $user, $password);

