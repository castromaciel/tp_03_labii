<?php 
  /** Importación del encabezado */
  require_once('./php/encabezado.php');

  /** Declaración del arreglo con los números del cartón */
  const listaDeNumeros = [
    1, 2, 4,
    6, 7, 11,
    13, 15, 17,
    18, 20, 21,
    23, 24, 25
  ];

  /** Inicialización de variables */
  $cantidadDeNumeros = 0;
  $listaDeNumerosSorteados = [];
  $cantidadDeAciertos = 0;

  /**
   * Simular bolillero con los números sorteados
   * y agregamos estos en el arreglo definido antes
   */
  do {
    $bolillasDelSorteo = mt_rand(1, 25);

    if (!in_array($bolillasDelSorteo, $listaDeNumerosSorteados)) {
      $listaDeNumerosSorteados[$cantidadDeNumeros] = $bolillasDelSorteo;
      $cantidadDeNumeros += 1;
    }
  } while ($cantidadDeNumeros < 15);

  /**
   * Iteramos el arreglo donde los numeros sorteados
   * que se encuentren en nuestro cartón, aumentarán
   * la cantidad de aciertos
   */
  for ($i = 0; $i < 15; $i++) {
    $numeroSorteado = $listaDeNumerosSorteados[$i];
    if (!in_array($numeroSorteado, listaDeNumeros)){
      $cantidadDeAciertos += 1;
    }
  }
?>

<section class="telekino-container">
  <header>
    <img src="./img/logo_telekino.png" alt="logo telekino"/>
  </header>

  <table class="telekino-numbers-container">
    <tbody>
      <?php
        $contador = 0;
        for ($i = 0; $i < 5 ; $i ++) {
          echo '<tr>';
          for ($j = 0; $j < 3 ; $j ++) {
            echo '<td class="telekino-number">' . listaDeNumeros[$contador] . '</td>';
            $contador += 1;
          }
          echo '</tr>';
        }
        ?>
    </tbody>
  </table>
</section>

<aside>
  <h2 class="text-center">Números sorteados</h2>
  <hr>
  <article>
    <?php 
      echo "<ul class='display-numbers-container'>";
      sort($listaDeNumerosSorteados);
      for ($i = 0; $i < 15; $i++) {
        echo "<li class='border p-1 box-number'>" . $listaDeNumerosSorteados[$i] . "</li>";
      }
      echo "</ul>";


      if ($cantidadDeAciertos == 15) {
        echo "<p class='text-center'> CARTON GANADOR! </p>";
      } else {
        echo "<p class='text-center'> Cantidad de aciertos: " . $cantidadDeAciertos . "</p>"; 
      }
    ?>
  </article>
</aside>

<?php
  /** Importación del pie de página */
  require_once('./php/pie.php');
?>