<?php

use Framework\App;

require '../app/helpers.php';

// WHISGFULL PROGRAMMING
$tasks = App::get('database')->selectAll('tasks');

$greeting = greet();

require '../resources/views/index.blade.php';





