<h1 class="nombre-pagina">Actualizar servicio</h1>
<p class="descripcion-pagina">Modifica los valores del formulario</p>

<?php
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php'; ?>

    <div class="prueba">
        <input class="boton" type="submit"  value="Actualizar"/>
    </div>

</form>