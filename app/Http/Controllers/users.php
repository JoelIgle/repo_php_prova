<?php

use Framework\App;

$users = App::get('database')->selectAll('users');

require '../resources/views/usuaris.blade.php';