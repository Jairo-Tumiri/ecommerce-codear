<?php include 'headformulario.php'; ?>

<div class="form_general formulario_login">
        <div class=" form formulario_login-text">
            <h1 class="titulogrande">INICIAR SESION</h1>
            <p>Para acceder a los beneficios se tiene que registrarse a nuestra comunidad. si ya estas registrado inicie sesion</p>
        </div>

        <form class="form_login" action="iniciarSesion.php" method="POST">

            <label for="exampleInputEmail1">Email:</label>
            <input type="email" name="email-usuario" placeholder="Correo@correo.com" required>

            <label for="exampleInputPassword1">Contraseña:</label>
            <input type="password" name="contraseña-usuario" placeholder="ingrese su contraseña:" required>
            <br>
            <br>
            <input class="btn boton" type="submit" value="Iniciar Sesion">

        </form>

        <div class="pasar_formulario_registro">
            <p>¿No sos miembro todavía? <a class="resaltar" href="">Elegí una membresia y registrate</a> y ¡empezá ya a elegir tus plantillas!</p>
            <!-- <a class="boton" href="#">Registrarse</a> -->
            <a class="boton" href="register.php">Registrarse</a>

            <p>¿Olvidaste tu contraseña? <a class="resaltar" href="">Recuperar contraseña</a></p>
        </div>

    </div>

    
    
</body>
</html>