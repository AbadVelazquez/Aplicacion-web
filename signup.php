<?php


require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['est'])) {
  $sql = "INSERT INTO registro (email, password, name, age, est) VALUES (:email, :password, :name, :age, :est)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_POST['email']);
  $stmt->bindParam(':name', $_POST['name']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':age', $_POST['age']);
  $stmt->bindParam(':est', $_POST['est']);

  if ($stmt->execute()) {
    $message = 'Se creo un nuevo usuario';
  } else {
    $message = 'Lo siento hubo un problema';
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrarse</h1>
    <span>o <a href="login.php">Inicar sesion</a></span>

    <form action="signup.php" method="POST">
      
      <input name="name" type="text" placeholder="Enter your name">
      <input name="age" type="number" placeholder="Enter your age">
      <input name="est" type="number" placeholder="Enter your estatura">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>