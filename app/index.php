<?php

require  'helpers.php';
require 'Task.php';
require 'config.php';
//$task = new  Task(1,'comprar pa','a la panaderia',0);


$user = $config['database']['user'];
$pass = $config['database']['password'];
$type = $config['database']['databasetype'];
$host = $config['database']['host'];
$name = $config['database']['name'];
$dsn = "$type:host=$host;dbname=$name";


try {
    $dbh = new PDO($dsn, $user, $pass);
}catch (\Exception $e){
    echo "Error de connexió a la base de dades!: ";
}

$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

$greeting = greet();



//$greeting = 'Hola ' . $_GET['name'] . ' ' . $_GET['cognom'] . '!';



