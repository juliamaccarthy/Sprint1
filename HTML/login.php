<!DOCTYPE html>
<?php
  $filename="signup";

  $bookquote=["'We are all storytellers.  We all live in a network of stories. There isn´t a stronger connection between people than sotrytelling.'","'Storytelling is the most powerful way to put ideas into the world today '","'Facts tell, stories sell'","'when you stand and share your sotry ina empowering way, your sotry will heal you and your story will heal sombody else '","'Stories can conquer fear, you know, they can make the hear bigger'","'A short story is a diffrent thing all togheter - a short story is like a kiss in the dark from a stranger.'","'what are we but our stories '","'Great stories happen to those who can tell them '","'Stories of imagination tend to upset those without one '","'the universe is made of stories not of atoms'","'you can always edita a bad page.  You can´t edit a blank page.'","'Every secret of a writer´s soul, every experience of his life, every qulity of his mind, is written large in his works.'",];
  $quote=$bookquote[rand(0, (count($bookquote)-1))];


 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escibe conmigo | LOG IN </title>
    <?php include("Includes/linkcss.php"); ?>
  </head>
  <body>
    <?php include("Includes/Header.php"); ?>

    <div class="paginasignup">
      <div class="quote">
        <p class="p-quote">
          <?=$quote?>
        </p>
      </div>

      <main class="main-signup">
        <form class="signup-form" action="login.php" method="POST">

          <h5 class="crearnuevacuenta"> Crear nueva cuenta </h5>
          
          <div class="signup-login">
            <ul>
              <li>
                <a href="login.php">Sign Up</a>
              </li>
              <li>
                <a href="signup.php">Log In</a>
              </li>
            </ul>

          </div>

          <div class="pregunta-signup">
            <label for="nombre">Nombre *</label>
            <input id="nombre" type="text" name="" placeholder="Miguel">
          </div>

          <div class="pregunta-signup">
            <label for="apellido">Apellido *</label>
            <input id="apellido" type="text" name="" placeholder="Sanchez">
          </div>

          <div class="pregunta-signup">
            <label for="email">E-mail *</label>
            <input id="email" type="email" name="" placeholder="usuario@email.com">
          </div>

          <div class="pregunta-signup">
            <label for="usuario">Usuario *</label>
            <input id="usuario" type="text" name="" placeholder="Miguel Sanchez">
          </div>

          <div class="pregunta-signup">
            <label for="contrasenia">Contraseña *</label>
            <input id="contrasenia" type="password" name="" placeholder="******">
          </div>

          <div class="pregunta-signup">
            <label for="Registrarse"></label>
            <button type="submit" value="Registrarse" action="signup.php">Registrarse</button>
          </div>

          <div class="pregunta-signup">
            <label for="Cancelar"></label>
            <input class="cancelar-login" type="submit" name="" value="Cancelar" action="signup.php">
          </div>
      </form>
    </main>
    </div>

      <?php include("Includes/jquerys.php"); ?>

  </body>
</html>
