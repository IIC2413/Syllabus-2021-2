<?php
require_once './../__init__.php';

$resultados = $DB1->query('SELECT * FROM pokemon_showdowns');
?>

<?php include './../templates/header.php' ?>

<section class="section">
  <h1 class="title is-1">Registro de batallas</h1>
  <?php table_from_query($resultados) ?>
</section>

<?php include './../templates/footer.php' ?>
