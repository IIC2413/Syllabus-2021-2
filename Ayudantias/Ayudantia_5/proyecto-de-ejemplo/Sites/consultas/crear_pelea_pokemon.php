<?php
require_once '../__init__.php';

// Consulta preparada - https://www.php.net/manual/es/pdo.prepared-statements.php
$statement = $DB->prepare("SELECT * FROM new_pokemon_showdowns(:id1, :id2);");
$statement->execute(array('id1' => $_POST['pid1'], 'id2' => $_POST['pid2']));
$fight_result = $statement->fetch(PDO::FETCH_ASSOC);
?>

<?php include './../templates/header.php' ?>

<section class="section">
  <h1 class="title is-1">EL ganador es: <?php echo $fight_result['w_name'] ?>!</h1>
  <p>Venció a su contrincante luego de <?php echo $fight_result['attacks'] ?> ataques</p>
</section>

<?php include './../templates/footer.php' ?>
