<?php 
  $titulo_pagina = "Contacto";
  $descripcion_pagina = "Si tienes dudas o alguna critica aquí puedes escribirnos.";
  require_once 'includes/header.php'; 
?>
    <main class="page-content">
        <h1>Contacto para torneos de padel</h1>
        <h2>Contacto con nuestra organización</h2>
        <p>¿Tienes alguna pregunta o necesitas información? Estamos aquí para ayudarte con cualquier duda sobre torneos, cursos o servicios. Si buscas reservar una cancha, inscribirte a un evento o consultar productos, nuestro equipo te responderá con la mejor orientación posible.</p>
        <p>La comunicación es una parte esencial de la experiencia deportiva. Por eso, queremos que cada consulta sea clara, rápida y útil. Ya sea que estés buscando una categoría para tu próximo torneo, una cancha para entrenar o información sobre cursos y equipamiento, te brindaremos una respuesta precisa y cordial para tomar la mejor decisión.</p>
        <p>Nuestro equipo trabaja para que cada jugador reciba información útil y oportuna. En Padel Tournament Organizer valoramos la atención personalizada, porque entendemos que cada persona tiene objetivos distintos: algunos buscan mejorar su técnica, otros competir en un torneo, y también hay quienes desean coordinar un espacio para jugar con amigos. Por eso, te invitamos a escribirnos con tranquilidad y contarnos lo que necesitas.</p>

        <h3>Información de contacto</h3>
        <p><strong>Email:</strong> santisansoar11@gmail.com</p>

        <h3>Envíanos un mensaje</h3>
        <form action="contacto.php" method="post" data-validate novalidate>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <span class="form-error" id="error-nombre" role="alert"></span>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
            <span class="form-error" id="error-email" role="alert"></span>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
            <span class="form-error" id="error-mensaje" role="alert"></span>

            <input type="submit" value="Enviar">
        </form>
    </main>

<?php require_once 'includes/footer.php'; ?>