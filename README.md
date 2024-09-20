# PHPUnit-Workshop
Ejemplo práctico de la herramienta PHP Unit para realizar pruebas unitarias

# Caso de estudio
El objetivo de este caso de estudio es el de aplicar y demostrar las funcionalidades de la herramienta framework PHPUnit, para esto se considera el siguiente sistema simplificado de comercio electrónico uttilizando clases en PHP. El sistema permite al cliente agregar productos a un carritos de compra, calcular el costo total el carrito de compras y aplica impuestos al crear la orden.

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

# Instrucciones para uso en local

## Instalación de PHPUnits por composer
* composer require --dev phpunit/phpunit

## Comando para realizar todos los test
* vendor/bin/phpunit --bootstrap vendor/autoload.php tests

## Alternativa para realizar un test por separado
* vendor/bin/phpunit --bootstrap vendor/autoload.php tests --filter 'testSomething'

