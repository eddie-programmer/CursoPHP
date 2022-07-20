<?php 

/* Operadores Aritméticos:

+	Suma
-	Resta
*	Multiplicación
/	División

-- */

// $numero = 10;
// $numero2 = 6;

// $resultado = $numero + $numero2;
// echo $resultado;

/* Operadores de Asignación:

=
+=
-=
*=
/=

-- */

// $numero = 10;
// $numero2 = 5;

// // $numero = $numero + 7;
// $numero += 7;
// echo $numero;

/* Operadores de Comparación:

==          IGUAL
===         IDENTICO
!=, <>      DIFERENTE
!==
>
<
>=
<=

-- */
// $numero = '10'; // String
// $variable = 'true';

// if ($variable < true) {
// 	echo "string";
// }

/* Operadores Lógicos:

and, &&
or, ||
xor
!

-- */
// $numero = 10;

// if ($numero >= 10 && $numero < 20) {
// 	echo "Ejecuta";
// }

/* Operadores de Incremento / Decremento:

++$x
$x++
--$x
$x--

-- */

$numero = 10;
// $numero = $numero + 1;
// $numero += 1;

 echo $numero-5; //lee, decrementa //muestra variable con decremento
 echo "<br />"; //espacio
 echo $numero.'</br>'; 
 echo --$numero.'</br>'; //Decrementa -1 y decrementa a nuestra variabl y la imprime con el decremento

/* Operadores de Cadenas:
.
.=

-- */

$texto = 'Cadena de Texto'.'</br>';
$texto .= ' Una segunda Cadena de Texto'.'</br>'; // .= concatena la variable del texto . texto

echo $texto;

?>