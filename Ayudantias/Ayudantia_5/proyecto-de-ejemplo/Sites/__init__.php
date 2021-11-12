<?php

// Este archivo se puede importar en cada archivo .php, y se puede tener
// aquí todo lo necesario para no tener que agregarlo para cada archivo.
// No tiene nada de mágico, es un archivo php cualquiera con un nombre arbitrario.

// Cargamos los datos para poder iniciar la BDD
require_once __DIR__ . "/config/data.php";

// Se conecta a la BDD
require_once __DIR__ . "/config/conexion.php";

// Se crea siempre una sesión
session_start();


// Funciones propias de utilidad

/**
 * Volver al inicio, tiene que se llamada antes de entregar HTML.
 */
function go_home() {
  header("Location: " . '/~grupo157/');
  exit();
}

/**
 * Ejemplo de componentes, donde uno llama a la función y se genera HTML
 * NOTA: Aunque esto esta funcional, el nombre de las columnas es el mismo
 *       que en la BDD, se podria modificar para poder elegir que nombre mostrar.
 *       [[Ver PDOStatement::fetch](https://www.php.net/manual/es/pdostatement.fetch.php)]
 *
 * @param PDOStatement $query
*/
function table_from_query($query) { ?>
  <div class="table-container">
    <table class="table">
      <thead>
        <tr>
          <!-- Por cada columna, muestra el nombre -->
          <? foreach (range(0, $query->columnCount() - 1) as $col_index) { ?>
            <th><?php echo htmlentities($query->getColumnMeta($col_index)['name']) ?></th>
          <?php } ?>
        </tr>
      </thead>
      <tbody>
        <!-- Mostrar una celda por cada valor de cada resultado -->
        <!-- hmtlentities se utiliza para evitar XXS, vulnerabilidad que no se pasa en este ramo -->
        <!-- https://es.wikipedia.org/wiki/Cross-site_scripting => insertar código HTML peligroso en sitios que lo permitan -->
        <?php while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
          <tr>
            <?php foreach ($row as $value) { ?>
              <th><?php echo htmlentities($value) ?></th>
            <?php } ?>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
<? }
