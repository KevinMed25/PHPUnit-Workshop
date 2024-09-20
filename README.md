# PHPUnit-Workshop
Ejemplo práctico de la herramienta PHP Unit para realizar pruebas unitarias
# Instrucciones para uso en codespace
1. Ingresa el comando para correr todos los tests.

vendor/bin/phpunit --bootstrap vendor/autoload.php tests

2. Comando para realizar un solo Test.php

./vendor/bin/phpunit tests/CartTest.php

3. En caso de ausencia de carpeta vendor, correr el comando.

composer require --dev phpunit/phpunit

4. Troubleshooting

En caso de no encontrar clases, comando depuración de autoload

composer dump-autoload
