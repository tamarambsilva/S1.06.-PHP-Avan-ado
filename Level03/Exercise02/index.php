<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Monolog\Logger; // essas duas linhas estou dizendo quais classes do monolog quero usar
use Monolog\Handler\StreamHandler;

$log = new Logger("my_app"); // aqui estou criando o logger

$log->pushHandler(
    new StreamHandler("app.log", Logger::INFO)
);

$log->info("Application started");
$log->warning("This is a warning message");
$log->error("This is an error message");

echo "Log messages created successfully.";