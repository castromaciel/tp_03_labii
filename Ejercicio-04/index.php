<?php 
  /** Importación del encabezado */
  require_once("./php/encabezado.php");

  /** Importación del arreglo de piezas de ajedrez */
  require_once("./php/piezas.php");

  /** 
   * Creación del tablero, se eliminan las piezas del
   * arreglo 'piezasDisponibles' de manera aleatoria
   * y se agregan al nuevo arraeglo llamado 'tableroDeJuego'
   */
  $tableroDeJuego = [];
  for ($i = 0; $i < 64; $i++) {
    $numeroDePieza = array_rand($piezasDisponibles, $num = 1);

    $tableroDeJuego[$i] = $piezasDisponibles[$numeroDePieza];
    unset($piezasDisponibles[$numeroDePieza]);
  }

?>

<table class="mb-5">
  <tbody>
  <?php
    /** Contador es para iterar las piezas del tableroDeJuego */
    $contador = 0;

    /** Iteración de las filas */
    for ($i = 0; $i < 8; $i++) {
      echo "<tr>";
      
      /** Iteración de las columnas */
      for ($j = 0; $j < 8; $j++) {
        $piezaActual = $tableroDeJuego[$contador];
      
        /** Se determina si la posicion del tablero no esta ocupada */
        if ($piezaActual == 'vacio') {

          /** 
           * Si la suma de las coordenadas de la celda es par se
           * pinta la celda de blanco, si no de negro.
           */
          if (($i + $j) % 2 == 0) {
            echo "<td><img src='./img/vacio_b.jpg' /></td>";
          } else {
            echo "<td><img src='./img/vacio_n.jpg' /></td>";
          }

        /** Si la selda esta ocupada, se muestra la pieza */
        } else {
          echo "<td><img src='./img/$piezaActual.jpg' /></td>";
        }

        $contador++;
      }
      echo "</tr>";
    }

  ?>
  </tbody>
</table>


<?php
  require_once("./php/pie.php");
?>