<?php
  /**
   * ?imprime en formato html
   */
  echo '<h1>Hello world</h1>';

  /**declara la variable iniciando con $ */
  $texto= "Mundo";

  /**imprime la variable con printf */
  printf("Hola %s", $texto);

  /**
   * ?sprintf devuelve la cadena
   */
  $mensaje= sprintf("Holaaa %s", $texto);
  echo $mensaje;

  $nombre="laura";

  /**
   * 
   * ?se declara una constante tipo texto*/

    define("Saludo","HOLA MUNDO");

    /**
   * 
   * ?se declara una constante tipo numerica*/

   define("edad",20);

   printf(edad);

   /**
    * TODO tipo de datos:
    */

    /**Boolean */
     $logueado = true;

    /**imprime */
     
    var_dump($logueado);

    /**Entero */

    $numero=20;
    var_dump($numero);

    /**String */

    $nombre="laura";

    var_dump($nombre);

    /**Float */

    $float= 20.1;
    var_dump($float);

    /**Array */

  $array=[];
  
  

/**
 * todo METODOS
 *-array_flip(): Intercambia las claves con sus valores correspondientes en un array.
 *-array_fill(): Rellena un array con un valor especificado.
 *array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
 *array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
 *array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
 *array_key_exists(): Comprueba si una clave existe en un array.
 *in_array(): Comprueba si un valor existe en un array.
 *array_rand(): Devuelve una o varias claves aleatorias de un array.
 *array_unique(): Elimina los valores duplicados de un array.
 *array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
 *array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
 *array_push(): Agrega uno o más elementos al final de un array.
 *array_pop(): Extrae y elimina el último elemento de un array.
 *array_reverse(): Revierte el orden de los elementos en un array.
 *array_sum(): Devuelve la suma de todos los valores de un array numérico.
 *array_product(): Devuelve el producto de todos los valores de un array numérico.
 *array_chunk(): Divide un array en fragmentos más pequeños.
 *array_keys(): Devuelve todas las claves de un array.
 *array_values(): Devuelve todos los valores de un array.
 *array_walk(): Aplica una función de devolución de llamada a cada elemento de un array.
 */


/*------------------------------------------------------------------------------------------------------------------------------------------------------ */

/**
 * todo CREACION DE ARRAY 
 */

 header('Content-Type: application/json');
$estudiantes= array(
  "laura"=>array(
    1=>"id",
    15=>"edad",
    "femenino"=>"genero"
    
    
  ),
  "Maria"=>array(
    "id"=>2,
    "edad"=>15,
    "genero"=>"femenino"
    
    
    )
  );
  
  print_r($estudiantes);
  /**
   * ?array_flip(): Intercambia las claves con sus valores correspondientes en un array.
   * en este caso intercambia los valores con sus claves de estudiante (laura)
   */
  print_r(array_flip($estudiantes['laura']));

  /**
   * ?array_fill(): Rellena un array con un valor especificado.
   * primer valor es desde la posicion que inicia
   * segundo valor es la veces a repetir el valor
   * tercer valor es el dato a repetir
   */
  $edades=array_fill(0,2,15);

  print_r($edades);

  /*
   ? array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
   */

  $numeros=[1,2,1,3,4,5,6];

  function par(){
    return $num % 2==0;
  }

  echo"\n Numeros pares: \n";
  print_r(array_filter($numeros,2));

  
