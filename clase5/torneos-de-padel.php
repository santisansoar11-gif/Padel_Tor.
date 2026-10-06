<?php
$titulo_pagina = "Torneos de Padel";
$descripcion_pagina = "Consulta los torneos de padel organizados por categorías, formatos y fechas para jugadores de todos los niveles.";

$categorias = [
    '1era' => 'Para jugadores profesionales y de élite',
    '2da' => 'Para jugadores avanzados con experiencia',
    '3ra' => 'Para jugadores con nivel intermedio',
    '4ta' => 'Para jugadores principiantes e intermedios',
    '5ta' => 'Para jugadores de nivel básico',
    '6ta' => 'Para jugadores de nivel principiante',
    '7ma' => 'Para jugadores de nivel iniciado',
    '8va' => 'Para jugadores de nivel muy básico'
];

$filtro_categoria = 'todas';
$error_filtro = '';

function e_torneos(string $valor): string
{
    return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['categoria'])) {
    if (is_array($_GET['categoria'])) {
        $error_filtro = 'El filtro recibido no es válido.';
    } else {
        $categoria_raw = trim((string) $_GET['categoria']);
        $categoria_sanitizada = filter_var($categoria_raw, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $categoria_sanitizada = is_string($categoria_sanitizada) ? $categoria_sanitizada : '';

        if ($categoria_sanitizada === '' || $categoria_sanitizada === 'todas') {
            $filtro_categoria = 'todas';
        } elseif (array_key_exists($categoria_sanitizada, $categorias)) {
            // Lista blanca: solamente se aceptan categorías conocidas por la aplicación.
            $filtro_categoria = $categoria_sanitizada;
        } else {
            $error_filtro = 'La categoría seleccionada no existe.';
        }
    }
}

require_once 'includes/header.php';
?>

<main class="page-content">
    <h1>Torneos de padel competitivos</h1>
    <h2>Torneos de padel competitivos y accesibles</h2>
    <p>Participa en emocionantes torneos organizados por profesionales. Ofrecemos competencias para todos los niveles, desde principiantes hasta jugadores avanzados, con categorías en modalidades masculinas, femeninas y mixtas.</p>
    <p>El formato de nuestros torneos considera la experiencia de los jugadores y el nivel general del grupo. Por eso organizamos eventos escalonados por categoría.</p>

    <section aria-labelledby="filtro-torneos">
        <h3 id="filtro-torneos">Buscar torneos por categoría</h3>
        <form action="torneos-de-padel.php" method="get">
            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria">
                <option value="todas" <?= $filtro_categoria === 'todas' ? 'selected' : ''; ?>>Todas las categorías</option>
                <?php foreach ($categorias as $codigo => $descripcion): ?>
                    <option value="<?= e_torneos($codigo); ?>" <?= $filtro_categoria === $codigo ? 'selected' : ''; ?>>
                        <?= e_torneos($codigo); ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="btn">Aplicar filtro</button>
        </form>

        <?php if ($error_filtro !== ''): ?>
            <div class="card form-feedback form-feedback--error" role="alert">
                <p><?= e_torneos($error_filtro); ?></p>
            </div>
        <?php elseif ($filtro_categoria !== 'todas'): ?>
            <div class="card form-feedback form-feedback--success" role="status">
                <p>Mostrando resultados para la categoría <strong><?= e_torneos($filtro_categoria); ?></strong>.</p>
            </div>
        <?php endif; ?>
    </section>

    <h3>Categorías de torneos</h3>
    <ul>
        <?php foreach ($categorias as $codigo => $descripcion): ?>
            <?php if ($filtro_categoria === 'todas' || $filtro_categoria === $codigo): ?>
                <li>
                    <strong>Categoría <?= e_torneos($codigo); ?>:</strong>
                    <?= e_torneos($descripcion); ?>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h3>Formato de torneos</h3>
    <p>Nuestros torneos se juegan en parejas, en modalidades hombre-hombre, mujer-mujer o mixtas. Cada evento tiene un límite de participantes y se desarrolla con reglas claras.</p>

    <p><a href="registro.php" class="btn">Regístrate en un torneo ahora</a></p>
</main>

<?php require_once 'includes/footer.php'; ?>
