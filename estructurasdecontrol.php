<?php
//condicional si
if ($a > $b) {
  echo "a es mayor que b";
}

//otra forma de usar el si
$var = true ? 1:0; 

//condicional si o no 
if ($a > $b) {
  echo "a es mayor que b";
} else {
  echo "a NO es mayor que b";
}

/* estructura while  primera forma */

$i = 1;
while ($i <= 10) {
    echo $i++;  /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */
}
//estructura while 2 forma 
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;

// hacer mientras do - while 
$i = 0;
do {
    echo $i;
} while ($i > 0);

// formas del PARA 

/* ejemplo 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

/* ejemplo 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

/* ejemplo 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

/* ejemplo 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

?>
