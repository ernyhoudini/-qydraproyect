<?php
$paginaActual = $paginaActual ?? '';
?>

<aside class="sidebar">
    <a href="dashboard.php" class="sidebar-logo">
        <span class="logo-icono">⌁</span>
        <span class="logo-texto">QYDRA</span>
    </a>

    <nav class="sidebar-menu">
        <a href="dashboard.php"
           class="menu-enlace <?= $paginaActual === 'dashboard' ? 'activo' : '' ?>">
            <span class="menu-icono">⊞</span>
            <span>Director del panel</span>
        </a>

        <a href="nuevo-experimento.php"
           class="menu-enlace <?= $paginaActual === 'nuevo' ? 'activo' : '' ?>">
            <span class="menu-icono">+</span>
            <span>Nuevo experimento</span>
        </a>

        <a href="administracion.php"
           class="menu-enlace <?= $paginaActual === 'administracion' ? 'activo' : '' ?>">
            <span class="menu-icono">⚙</span>
            <span>Administración</span>
        </a>
    </nav>

    <div class="sidebar-estado">
        <span class="estado-punto"></span>
        Sistema activo
    </div>
</aside>