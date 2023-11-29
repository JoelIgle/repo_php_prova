<?php

//Contrasenya i usuari per a accedir a la BD
return [
    'database' => [
        'user' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'databasetype' => $_ENV['DB_CONNECTION'],
        'host' => $_ENV['DB_HOST'],
        'name' => $_ENV['DB_DATABASE'],
    ]
];

