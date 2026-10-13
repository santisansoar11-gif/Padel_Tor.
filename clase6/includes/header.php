<?php
require_once __DIR__ . '/../config/env.php';

if (!isset($titulo_pagina)) {
    $titulo_pagina = $nombre_sitio;
} else {
    $titulo_pagina = $titulo_pagina . " | " . $nombre_sitio;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($descripcion_pagina ?? 'Organización de torneos de padel, cursos y eventos.'); ?>">
    <title><?= htmlspecialchars($titulo_pagina); ?></title>
    <!-- Vinculación del CSS centralizado -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="site-header">
        <div class="site-header__inner">
            <img src="padel.jpg" alt="Logo de <?= htmlspecialchars($nombre_sitio); ?>" class="site-logo" loading="lazy" width="90" height="90">
            <div>
                <h1 class="site-title"><?= htmlspecialchars($nombre_sitio); ?></h1>
                <p class="site-tagline">Esta página está creada para la organización de torneos de padel, tanto para hombres como para mujeres.</p>
            </div>
        </div>
    </header>

    <?php require_once __DIR__ . '/nav.php'; ?>

    <div class="js-toolbar">
        <div class="js-toolbar__inner">
            <p class="js-datetime" id="js-datetime" aria-live="polite">Cargando fecha y hora…</p>
            <label class="theme-toggle">
                <span>Modo oscuro</span>
                <input type="checkbox" id="theme-toggle" aria-label="Activar modo oscuro">
            </label>
        </div>
    </div>