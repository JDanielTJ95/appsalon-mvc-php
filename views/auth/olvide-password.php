<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Restablecer tu password escribiendo tu email a continuacion</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<form action="/olvide" method="POST" class="formulario">

    <div class="campo">

        <label for="email">Email</label>

        <input 
            type="text"
            id="email"
            name="email"
            placeholder="Tu email"
        />

    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">

</form>

<div class="acciones">
    
    <a href="/">¿Ya tienes cuenta? Inicia Sesion</a>
    <a href="/crear-cuenta">¿Aun no tienes una cuenta? Crear Una</a>

</div>

