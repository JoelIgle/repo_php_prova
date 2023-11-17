<?php

require 'config.php';
require 'helpers.php';
require 'Task.php';

$dbh = connectDB($config);

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

$greeting = greet();



//$greeting = 'Hola ' . $_GET['name'] . ' ' . $_GET['cognom'] . '!';



