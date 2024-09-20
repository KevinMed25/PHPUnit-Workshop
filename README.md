# PHPUnit-Workshop
Ejemplo práctico de la herramienta PHP Unit para realizar pruebas unitarias

# Caso de estudio
El objetivo de este caso de estudio es el de aplicar y demostrar las funcionalidades de la herramienta framework PHPUnit, para esto se considera el siguiente sistema simplificado de comercio electrónico uttilizando clases en PHP. El sistema permite al cliente agregar productos a un carritos de compra, calcular el costo total el carrito de compras y aplica impuestos al crear la orden.

  ## Casos de uso:
  * Un cliente agrega una computadora portátil y un mouse a su carrito y realiza el pago. El total antes de impuestos es de $1050, y con una tasa impositiva del 10%, el monto final debería ser de $1155.
  * Un cliente intenta pagar con un carrito vacío y recibe un mensaje de error que dice: "No se puede procesar un carrito vacío".
  ## Características clave y reglas de negocio:
  * Los objetos de producto se pueden agregar a un carrito.
  * El carrito realiza un seguimiento de todos los productos agregados y puede devolver el precio total y el número de artículos en el carrito.
  * Se puede crear un pedido desde un carrito, aplicando una tasa impositiva (el valor predeterminado es 10%).
  * Si el carrito está vacío, la clase Order lanzará una excepción al calcular el total con impuestos.
  ## Escenarios de casos de prueba:
  * Probando un carrito vacío.  
  * Pruebas con un solo producto.
  * Probando múltiples productos.
  * Pruebas con diferentes tipos impositivos.
  * Probar el manejo de excepciones al procesar un carro vacío.
   
# Instrucciones para uso en codespace
- Ingresa el comando para correr todos los tests.<br>
`vendor/bin/phpunit --bootstrap vendor/autoload.php tests`

- Comando para realizar un solo Test.php <br>
`./vendor/bin/phpunit tests/CartTest.php`

- En caso de ausencia de carpeta vendor, correr el comando. <br>
`composer require --dev phpunit/phpunit`

- Troubleshooting <br>
En caso de no encontrar clases, comando depuración de autoload: 
`composer dump-autoload`

# Instrucciones para uso en local
- Instalar PHPUnit utilizando composer, usar el comando: <br>
   `composer require --dev phpunit/phpunit`

-  Ejecutar las pruebas con el comando: <br>
   `vendor/bin/phpunit --boostrap vendor/autoload.php tests`

# Otros comanddos de ejecución
- Para filtrar o ejecutar un test específico: <br>
  `vendor/bin/phpunit --bootstrap vendor/autoload.php tests --filter 'testSomething'`
- Comando para tener un checklist de los test realizados, modificable con la libreria TestDox <br>
  `vendor/bin/phpunit --bootstrap vendor/autoload.php tests --testdox`
- [Visita la documentación de PHPUnit](https://docs.phpunit.de/en/11.3/index.html)
