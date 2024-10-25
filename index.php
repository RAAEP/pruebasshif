<?php include('includes/header.php'); ?>

<h1>Bienvenido</h1>
<p>Según las estadísticas, la industria tecnológica representa el 35% del mercado total. Y no deja de crecer: la tasa de crecimiento estimada para este año es del 5,3%. Sólo en Estados Unidos hay más de 500.000 empresas tecnológicas, de las cuales más de 6.600 están en Silicon Valley. 

Casi todas las empresas -independientemente del sector al que pertenezcan- dependen de las empresas tecnológicas de un modo u otro. Puede ser hardware, software, servicios/herramientas en línea, soluciones de ciberseguridad...</p>

<div class="contenido">
    <div class="noticias">
        <div class="noticia">
            <h2>Noticia Reciente</h2>
            <p>Li Peng, vicepresidente sénior corporativo y presidente de ventas y servicios TIC de Huawei, pronunció su discurso en Huawei GITEX 2024: estamos prosperando juntos en la era inteligente</p>
        </div>
        <div class="noticia">
            <h2>Noticia Tecnológica</h2>
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
