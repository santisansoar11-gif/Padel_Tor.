<?php 
  $titulo_pagina = "Inicio";
  $descripcion_pagina = "Bienvenido a Padel Tournament Organizer, tu plataforma para competir e inscribirte en torneos de padel.";
  require_once 'includes/header.php'; 
?>

<main class="page-content">
    <h1>Bienvenido a <?= htmlspecialchars($nombre_sitio); ?></h1>
    <h2>La mejor plataforma para organizar y competir en torneos de padel</h2>
    <p>Te damos la bienvenida a nuestro espacio dedicado al padel. Aquí podrás encontrar información sobre torneos, inscribirte con tu pareja, conocer los cursos de formación y revisar las preguntas frecuentes sobre nuestras competencias.</p>
    <p>Súmate a una comunidad apasionada por el deporte y comienza a competir en las distintas categorías disponibles.</p>
    
    <p><a href="torneos-de-padel.php" class="btn">Ver torneos disponibles</a></p>
</main>

<?php require_once 'includes/footer.php'; ?>