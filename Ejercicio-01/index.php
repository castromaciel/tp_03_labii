<?php 
  /** Importación del encabezado */
  require_once('./php/encabezado.php');
  
  /** Generar un numero aleatorio */
  $numeroAleatorio = mt_rand(100, 100000);
  $numAleatorioAux = $numeroAleatorio;
  $resto = 0;
  $cantidadDeNumeros = 0;
  $cantidadDePares = 0;
  $cantidadDeImpares = 0;

  while ($numAleatorioAux != 0) {
    /** Extraer el dígito */
    $resto = $numAleatorioAux % 10;
    
    /** Determinar paridad */

    if ($resto % 2 == 0) {
      $cantidadDePares += 1;
    } else {
      $cantidadDeImpares += 1;
    }

    $numAleatorioAux = intdiv($numAleatorioAux, 10);
    $cantidadDeNumeros += 1;
  }
?>

<section class="border w-100 custom-card">
  <p> Número: <?php echo $numeroAleatorio ?></p>
  <p> Cantidad de dígitos: <?php echo $cantidadDeNumeros ?></p>
  <p> Cantidad de pares: <?php echo $cantidadDePares ?></p>
  <p> Cantidad de impares: <?php echo $cantidadDeImpares ?></p>
</section>

<?php
  /** Importación del pie de página */
  require_once('./php/pie.php');
?>