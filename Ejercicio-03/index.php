<?php
  /** Importación del encabezado */
  require_once("./php/encabezado.php");

  $tarifa = array(
    "moto" => 70,
    "auto" => 120,
    "camioneta" => 190,
    "pesado" => 250,
  );

  $totalDeVehiculos = 2500;

  $cantidades = array(
    "moto" => 0,
    "auto" => 0,
    "camioneta" => 0,
    "pesado" => 0,
  );

  /**
   * Incrementa en uno la cantidad de un vehiculo mediante
   * la clave.
   */
  for ($i = 0; $i < $totalDeVehiculos; $i++) {
    $cantidades[array_rand($tarifa, 1)] += 1;
  }
?>

<section class="w-100">
  <h1 class="display-5 text-center">Peaje- Informe de recaudación</h1>
  <table class="table">
    <thead class="table-dark text-center">
      <th>Tipo</th>
      <th>Cantidad</th>
      <th>Recaudado</th>
    </thead>
    <tbody>
      <?php 
        /**
         * Obtengo vehiculo del arreglo de tarifas y 
         * el precio de cada peaje.
         */
        foreach ($tarifa as $vehiculo => $precio) {
          echo "<tr>";
          echo "<td class='table-info'>" . $vehiculo . "</td>";
          echo "<td class='text-end'>" . $cantidades[$vehiculo] . "</td>";
          echo "<td class='text-end'>$" . $cantidades[$vehiculo] * $precio . "</td>";
          echo "<tr>";
        }
      ?>
    </tbody>
    <tfoot>
      <tr class="table-danger">
        <?php
          $precioTotal = 0;

          echo "<td>TOTALES</td>";
          echo "<td class='text-end'>" . $totalDeVehiculos . "</td>";
          echo "<td class='text-end'>$" . $cantidades[$vehiculo] * $precio . "</td>";
        ?>
      </tr>
    </tfoot>
  </table>
</section>

<?php
  /** Importación del pie de página */
  require_once("./php/pie.php");
?>
