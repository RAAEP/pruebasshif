<?php include('includes/header.php'); ?>

<h1>Contacto</h1>
<p>Puedes contactarnos a través del siguiente formulario:</p>
<form action="contacto.php" method="post" class="contacto-form">
  <div class="form-group">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
  </div>
  <div class="form-group">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" placeholder="Ingresa tu email">
  </div>
  <div class="form-group">
    <label for="mensaje">Mensaje:</label><br>
    <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje"></textarea>
  </div>
  <input type="submit" value="Enviar">
</form>

<?php include('includes/footer.php'); ?>
