<?php

// Importamos las clases e enums que vamos  utilizar
require_once "Subject.php";
require_once "ResourceType.php";
require_once "Resource.php";

// Criamos um recurso utilizando valores permitidos pelos enums
$resource = new Resource(
    "PHP Basics",
    Subject::PHP,
    "https://www.php.net/",
    ResourceType::WEB_ARTICLE
);

echo $resource;