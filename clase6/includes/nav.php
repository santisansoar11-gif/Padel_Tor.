<?php
$pagina_actual = basename($_SERVER['PHP_SELF']);
?>
<nav class="site-nav">
    <div class="site-nav__inner">
        <ul>
            <li><a href="index.php" class="<?= ($pagina_actual == 'index.php') ? 'active' : ''; ?>">Inicio</a></li>
            <li><a href="productos.php" class="<?= ($pagina_actual == 'productos.php') ? 'active' : ''; ?>">Productos</a></li>
            <li><a href="torneos-de-padel.php" class="<?= ($pagina_actual == 'torneos-de-padel.php') ? 'active' : ''; ?>">Torneos</a></li>
            <li><a href="acerca-de-nosotros.php" class="<?= ($pagina_actual == 'acerca-de-nosotros.php') ? 'active' : ''; ?>">Nosotros</a></li>
            <li><a href="canchas.php" class="<?= ($pagina_actual == 'canchas.php') ? 'active' : ''; ?>">Canchas</a></li>
            <li><a href="preguntas-frecuentes.php" class="<?= ($pagina_actual == 'preguntas-frecuentes.php') ? 'active' : ''; ?>">Preguntas</a></li>
            <li><a href="cursos-de-padel.php" class="<?= ($pagina_actual == 'cursos-de-padel.php') ? 'active' : ''; ?>">Cursos</a></li>
            <li><a href="blog.php" class="<?= ($pagina_actual == 'blog.php') ? 'active' : ''; ?>">Blog</a></li>
            <li><a href="cv.php" class="<?= ($pagina_actual == 'cv.php') ? 'active' : ''; ?>">Currículum</a></li>
            <li><a href="contacto.php" class="<?= ($pagina_actual == 'contacto.php') ? 'active' : ''; ?>">Contacto</a></li>
        </ul>
    </div>
</nav>