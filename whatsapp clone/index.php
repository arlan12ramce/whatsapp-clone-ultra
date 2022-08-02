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
    <section class="form signup">
      <header>Whatsapp Clone</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-txt">Accesar Primero</div>
        <div class="name-details">
          <div class="field input">
            <label>Primer Nombre</label>
            <input type="text" name="fname" placeholder="Nombre" required>
          </div>
          <div class="field input">
            <label>Segundo Nombre</label>
            <input type="text" name="lname" placeholder="Apellido" required>
          </div>
        </div>
        <div class="field input">
          <label>Correo Electronico</label>
          <input type="text" name="email" placeholder="Correo Electronico" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Seleccionar Imagen</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="go chat">
        </div>
      </form>
      <div class="link">¿Ya cuentas con cuenta registrada?<a href="Index2.php">Accesar Cuenta</a></div>
    </section>
  </div>

    

  <script src="js/SH.js"></script>
  <script src="js/SUP.js"></script>
  
</body>
</html>