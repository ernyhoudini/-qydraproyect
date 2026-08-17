<?php
$paginaActual = 'nuevo';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nuevo experimento | QYDRA</title>

    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/formularios.css">
</head>

<body>

<div class="app">

    <?php include 'includes/sidebar.php'; ?>

    <main class="contenido-principal">

        <div class="contenedor">

            <header class="encabezado-pagina">
                <h1>Nuevo experimento</h1>
                <p>Configura y registra un nuevo experimento en QYDRA.</p>
            </header>

           <form class="formulario-experimento">

    <div class="campo">
        <label for="nombre">Nombre del experimento</label>

        <input
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Ej. Análisis de comportamiento"
            required
        >
    </div>

    <div class="campo">
        <label for="descripcion">Descripción</label>

        <textarea
            id="descripcion"
            name="descripcion"
            rows="5"
            placeholder="Describe el objetivo del experimento..."
        ></textarea>
    </div>

    <div class="fila-formulario">

        <div class="campo">
            <label for="tipo">Tipo de experimento</label>

            <select id="tipo" name="tipo">
                <option value="">Seleccionar tipo</option>
                <option value="analisis">Análisis</option>
                <option value="simulacion">Simulación</option>
                <option value="investigacion">Investigación</option>
                <option value="prueba">Prueba</option>
            </select>
        </div>

        <div class="campo">
            <label for="estado">Estado inicial</label>

            <select id="estado" name="estado">
                <option value="borrador">Borrador</option>
                <option value="activo">Activo</option>
            </select>
        </div>

    </div>

    <div class="acciones-formulario">

        <a href="dashboard.php" class="boton-secundario">
            Cancelar
        </a>

        <button type="submit" class="boton-principal">
            Crear experimento
        </button>

    </div>

</form>
        </div>

    </main>

</div>

</body>
</html>