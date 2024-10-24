<?php include('includes/header.php'); ?>

<h1>Bienvenido a nuestra página de inicio</h1>
<p>Este es el contenido de la página de inicio.</p>

<div class="contenido">
    <div class="noticias">
        <div class="noticia">
            <h2>Noticia 1</h2>
            <p>Li Peng, vicepresidente sénior corporativo y presidente de ventas y servicios TIC de Huawei, pronunció su discurso en Huawei GITEX 2024: estamos prosperando juntos en la era inteligente</p>
        </div>
        <div class="noticia">
            <h2>Noticia 2</h2>
            <p>Ministerio TIC propone la creación de un modelo de IA para el control fiscal en Colombia</p>
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
