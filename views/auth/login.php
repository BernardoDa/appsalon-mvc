<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Iniciar sesión con tus datos</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            placeholder="Tu email"
            name="email"
            
        />
    </div>

    <div class="campo">
        <label for="password">Contraseña</label>
        <input
            type="password"
            id="password"
            placeholder="Tu contraseña"
            name="password"
        />
    </div>

    <div class="acciones">
        <a href="/crear-cuenta">Crear una cuenta</a>
        <a href="/olvide">¿Olvidaste la contraseña?</a>
    </div>

    <div class="prueba">
        <div>
            <input type="submit" class="boton" value="Iniciar sesión"/>
        </div>
    </div>

    
</form>

