<?php include('includes/header.php'); ?>

<h1>Bienvenido a nuestra página de inicio</h1>
<p>Este es el contenido de la página de inicio.</p>

<div class="contenido">
    <div class="noticias">
        <div class="noticia">
            <h2>Noticia 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="noticia">
            <h2>Noticia 2</h2>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <div class="buscador">
        <h2>Buscador</h2>
        <form action="buscar.php" method="get">
            <input type="text" name="query" placeholder="Buscar noticias...">
            <input type="submit" value="Buscar">
        </form>
    </div>
</div>

<?php include('includes/footer.php'); ?>
