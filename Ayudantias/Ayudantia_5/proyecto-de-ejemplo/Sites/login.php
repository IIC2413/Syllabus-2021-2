<?php
require_once './__init__.php';

// Vemos si se esta mandando el form o se está recibiendo
$request_method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
if ($request_method  === 'POST') {
  // Se está recibiendo datos para el login

  // Aquí se tendría que buscar el id del usuario en la BDD con el mail y la contraseña
  $user_id = 1;
  $user_name = "Ash";

  // Se guardan estos valores en la sesión
  $_SESSION['user_id'] = $user_id;
  $_SESSION['user_name'] = $user_name;

  // Mandamos al usuario al inicio
  go_home();
} elseif ($request_method === 'GET') {
  // En este caso, que se trata de obtener la página de inicio de sesión
  // y no hay una sesión iniciada, se muestra el form

  include './templates/header.php'; ?>
  <!-- https://bulma.io/documentation/columns -->
  <section class="section">

    <div class="columns is-mobile is-centered is-vcentered cover-all">
      <div class="column is-half">
        <!-- https://bulma.io/documentation/form/general/ -->
        <form method="POST">
          <div class="field">
            <label class="label">Nombre de usuario</label>
            <div class="control">
              <input class="input" type="text" name="username" value="Ash">
            </div>
          </div>
          <button class="button is-primary" type="submit" name="login">Login</button>
        </form>
      </div>
    </div>
  </section>
<?php include './templates/footer.php';
} ?>
