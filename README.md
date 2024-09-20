# PHPUnit-Workshop
Ejemplo práctico de la herramienta PHP Unit para realizar pruebas unitarias
# Instrucciones
1. Ingresa el comando para correr todos los tests.

vendor/bin/phpunit --bootstrap vendor/autoload.php tests

2. En caso de ausencia de carpeta vendor, correr el comando.

composer require --dev phpunit/phpunit

3. Troubleshooting

En caso de no encontrar clases, comando depuración de autoload

composer dump-autoload
