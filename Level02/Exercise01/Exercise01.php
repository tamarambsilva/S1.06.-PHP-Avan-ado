<?php

require_once "Didatic.php";

// Create an educational resource
$resource = new Didatic(
    "PHP Class",
    Theme::PHP,
    "https://www.php.net",
    Type::VIDEO
);

// Display the resource data
echo "Name: " . $resource->name . "<br>";
echo "Theme: " . $resource->theme->value . "<br>";
echo "URL: " . $resource->url . "<br>";
echo "Type: " . $resource->type->value . "<br>";