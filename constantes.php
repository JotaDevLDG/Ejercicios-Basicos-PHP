// Nombres de constantes correctos
define("PRUEBA",     "contenido de la variable de prueba");
define("mesa",    "mesa");
define("FOO_BAR", "something more");

// Nombres de constantes incorrectos
define("2FOO",    "something");

// Esto es válido, pero debe evitarse:
// PHP podría cualquier día proporcionar una constante mágica 
// que rompiera el script
define("__FOO__", "something"); 
