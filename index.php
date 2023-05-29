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
  $mensaje= sprintf("Hola %s", $texto);
  echo $mensaje;


?>