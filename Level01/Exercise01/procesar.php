
<?php

// Crea un formulario HTML con los campos deseados.
// El formulario especifica un documento PHP como acción.
// Los valores del formulario se obtienen mediante variables superglobales.
// Algunos valores se almacenan en variables de sesión.

session_start();

// Obtener los valores del formulario
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];

// Guardar algunos valores en la sesión
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;

// Mostrar los valores recibidos
echo "<h1>User data</h1>";

echo "<p>Name: " . $name . "</p>";
echo "<p>Email: " . $email . "</p>";
echo "<p>Age: " . $age . "</p>";

echo "<h2>Saved data</h2>";

echo "<p>Name: " . $_SESSION["name"] . "</p>";
echo "<p>Email: " . $_SESSION["email"] . "</p>";

