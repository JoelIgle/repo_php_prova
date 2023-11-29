<?php

use Framework\App;
//use framework\Database\Database;

//require 'config.php';

require 'app/helpers.php';

//require 'app/Models/Task.php';
//
//require 'framework/Database/Database.php';

// WHISGFULL PROGRAMMING
$tasks = App::get('database')->selectAll('tasks');

//$tasks = Database::selectAll('tasks');

$greeting = greet();






