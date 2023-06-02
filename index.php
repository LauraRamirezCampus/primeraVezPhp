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
 *-array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
 *-array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
 *-array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
 *-array_key_exists(): Comprueba si una clave existe en un array.
 *-in_array(): Comprueba si un valor existe en un array.
 *-array_rand(): Devuelve una o varias claves aleatorias de un array.
 *-array_unique(): Elimina los valores duplicados de un array.
 *-array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
 *-array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
 *-array_push(): Agrega uno o más elementos al final de un array.
 *-array_pop(): Extrae y elimina el último elemento de un array.
 *-array_reverse(): Revierte el orden de los elementos en un array.
 *-array_sum(): Devuelve la suma de todos los valores de un array numérico.
 *-array_product(): Devuelve el producto de todos los valores de un array numérico.
 *-array_chunk(): Divide un array en fragmentos más pequeños.
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

  function par($num){
    if($num %2==0){
    return $num;
  }
  }

  echo"\n Numeros pares: \n";
  print_r(array_filter($numeros,"par"));


/**
 *? array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
 */
  
 function cubo($n)
 {
  return($n*$n*$n);
 }

 $a=[2,4,8,4,6];
 $b=array_map("cubo",$a);

 echo"cubo\n";
 print_r($b);

 /**
  * ?array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
  */

  function suma($carry,$item)
  {
    $carry+=$item;

    return $carry;
  }

  $a =array(2,2,2);
  $x = array();

  echo"suma\n";
  /**
   * suma todos los valores del array
   */
  print_r(array_reduce($a,"suma"));

  echo"\n";

  /**
   *? array_key_exists(): Comprueba si una clave existe en un array.
   */

   if (array_key_exists("laura",$estudiantes)){
    echo "la clave laura si existe\n";
   }
   /**
    * ?in_array(): Comprueba si un valor existe en un array.
    */
    if (in_array(2,$a)){
      echo "\nsi  existe el valor 2\n";
     }
     /**
      * ?array_rand(): Devuelve una o varias claves aleatorias de un array.
      */
      

      print_r(array_rand($estudiantes));

      /**
       * ?array_unique(): Elimina los valores duplicados de un array.
       */

       print_r(array_unique($a));

       /**
        * ?array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
        */

        $array1 = array("a" => "laura", "maria", "juan");
        $array2 = array("b" => "pedro", "laura", "maria");
        $result = array_intersect($array1, $array2);
        print_r($result);

        /**
         * ?array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
         */

        print_r(array_diff($array2,$array1));
        
        /**
         * ?array_push(): Agrega uno o más elementos al final de un array.
         */

         print_r(array_push($array1,"luis"));
         print_r($array1);

         /**
          * ?array_pop(): Extrae y elimina el último elemento de un array.
          */

          print_r(array_pop($array1));
          print_r($array1);

          /***
           * ?array_reverse(): Revierte el orden de los elementos en un array.
           */
          print_r(array_reverse($array1));
          print_r($array1);


          /**
           * ?array_sum(): Devuelve la suma de todos los valores de un array numérico.
           */
          print_r(array_sum($a));

          /**
           * ?array_product(): Devuelve el producto de todos los valores de un array numérico.
           */
          echo"\n";
          print_r(array_product($a));

          /**
           * ?array_chunk(): Divide un array en fragmentos más pequeños.
           */
          print_r(array_chunk($a));
          
          print_r($array2);
          
          
  ?>