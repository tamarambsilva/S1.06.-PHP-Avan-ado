<?php

echo "Constantes Predefinidas/Predefined constants: <br><br>";

echo "PHP Version: " . PHP_VERSION . "<br><br>";

echo "Operational System: " . PHP_OS_FAMILY . "<br><br>"; // tipo de sistema operacional

echo "Largest supported integer value: " . PHP_INT_MAX . "<br><br>"; // Mostra o maior número inteiro que o PHP consegue representar na configuração atual.

echo "Directory separator: " . DIRECTORY_SEPARATOR . "<br><br>"; // Ela informa qual caractere o sistema operacional utiliza para separar pastas em um caminho.




echo "___________________<br><br> Constantes Magicas / Magic constants: <br><br>";
// Mostra informaçao do arquivo atual
echo "Current file: " . __FILE__ . "<br><br>";

// Mostra o diretorio
echo "Current directory: " . __DIR__ . "<br><br>";

// Mostra o numero de linhas
echo "Current line: " . __LINE__ . "<br><br>";

// Criando uma funçao
function showInformation()
{
    // Mostra o nome da funçao
    echo "Función actual: " . __FUNCTION__ . "<br><br>";
}

showInformation();

/* 

Constantes Magicas:
__FILE__ mostra o caminho completo do arquivo.
__DIR__  mostra a pasta onde o arquivo está.
__LINE__  mostra o número da linha onde está sendo utilizado.
__FUNCTION__  mostra o nome da função atual.

Dif entre const e metodo:

Constante = guarda um valor.
Método = executa uma ação.
*/