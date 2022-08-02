<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whatsapp Realtime</title>
   <link rel="stylesheet" href="style.css"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>


</head>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Whatsapp Clone</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Correo Electronico</label>
          <input type="text" name="email" placeholder="Ingresa Correo" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresar Contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="go chat">
        </div>
      </form>
      <div class="link">¿Aun no tienes cuenta?<a href="index.php">Registrate</a></div>
    </section>
  </div>
  
  <script src="js/SH.js"></script>
  <script src="js/LG.JS"></script>

</body>
</html>