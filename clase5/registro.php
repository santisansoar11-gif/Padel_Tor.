<?php 
  $titulo_pagina = "Registro para Torneos";
  $descripcion_pagina = "Regístrate para participar en torneos de padel, cursos y eventos de la comunidad deportiva del club.";
  require_once 'includes/header.php'; 
?>

<main class="page-content">
    <h1>Registro para torneos de padel</h1>
    <h2>Únete a nuestra comunidad deportiva</h2>
    <p>Regístrate ahora y comienza a participar en nuestros torneos de padel. Completa el formulario con tus datos para ser parte de nuestros eventos.</p>

    <form action="registro.php" method="post" data-validate data-resumen novalidate>
        <label for="nombre">Nombre completo:</label>
        <input type="text" placeholder="Juan Pérez" id="nombre" name="nombre" required>
        <span class="form-error" id="error-nombre" role="alert"></span>

        <label for="email">Correo electrónico:</label>
        <input type="email" placeholder="example@domain.com" id="email" name="email" required>
        <span class="form-error" id="error-email" role="alert"></span>

        <label for="telefono">Teléfono:</label>
        <input type="tel" placeholder="123-456-7890" id="telefono" name="telefono">
        <span class="form-error" id="error-telefono" role="alert"></span>

        <label for="genero">Género:</label>
        <div class="radio-group">
            <label for="masculino"><input type="radio" id="masculino" name="genero" value="Masculino"> Masculino</label>
            <label for="femenino"><input type="radio" id="femenino" name="genero" value="Femenino"> Femenino</label>
        </div>

        <label for="categoria">Categoría:</label>
        <select id="categoria" name="categoria" required>
            <option value="">Selecciona una categoría</option>
            <option value="1ra">1ra</option>
            <option value="2da">2da</option>
            <option value="3ra">3ra</option>
            <option value="4ta">4ta</option>
            <option value="5ta">5ta</option>
            <option value="6ta">6ta</option>
            <option value="7ma">7ma</option>
            <option value="8va">8va</option>
        </select>
        <span class="form-error" id="error-categoria" role="alert"></span>

        <label for="contrasena">Contraseña:</label>
        <input type="password" placeholder="Ingresa tu contraseña" id="contrasena" name="contrasena" required>
        <span class="form-error" id="error-contrasena" role="alert"></span>

        <input type="submit" value="Registrarse">
    </form>
</main>

<?php require_once 'includes/footer.php'; ?>