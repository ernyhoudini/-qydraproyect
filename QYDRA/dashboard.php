<?php
$paginaActual = 'dashboard';
include 'includes/sidebar.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director del panel | QYDRA</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>
    <div class="app">
        <?php include 'includes/sidebar.php'; ?>

        <main class="contenido-principal">
            <div class="contenedor">
                <header class="encabezado-pagina">
                    <h1>Director del panel</h1>
                    <p>Estado de la red y operaciones activas</p>
                </header>
            </div>

    <div class="tarjeta-dashboard">
        <div class="tarjeta-titulo">Usuarios</div>
        <div class="tarjeta-numero">0</div>
        <div class="tarjeta-detalle">Usuarios registrados</div>
    </div>

    <div class="tarjeta-dashboard">
        <div class="tarjeta-titulo">Operaciones activas</div>
        <div class="tarjeta-numero">0</div>
        <div class="tarjeta-detalle">Procesos actualmente activos</div>
    </div>

    <div class="tarjeta-dashboard">
        <div class="tarjeta-titulo">Estado del sistema</div>
        <div class="tarjeta-numero estado-online">ONLINE</div>
        <div class="tarjeta-detalle">Todos los sistemas operativos</div>
    </div>

</section>
        </main>
    </div>
</body>
</html>