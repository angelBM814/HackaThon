<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="text/css" href="../IMG/logo.jpeg">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="stylesheet" href="../CSS/insesion.css">
    <title>Iniciar Sesión</title>
    <script src="indexx.js"></script>
</head>

<body>
    <header>
        <div class="header">
            <div class="logo">
                <img src="../IMG/logo.jpeg" alt="">
            </div>
            <div class="lista">
                <ul>
                    <li class="inicio">Inicio</li>
                    <li>Servicios</li>
                    <li>Terminos y condiciones</li>
                </ul>
            </div>
            <div class="butttons">
                <button onclick="location.href='registro.php'" class="regist">Registrarse</button>
            </div>
        </div>
    </header>
    <section>
        <form action="../PHP/inicioSes.php" method="post">
            <div class="form">
                <div class="txt-form">
                    <h1>Iniciar sesión</h1>
                    <p>Mantente al dia</p>
                </div>
                <div class="datos">
                    <div class="email">
                        <input name="mail" type="text" placeholder="Email">
                    </div>
                    <div class="pass">
                        <input name="pass" type="password" placeholder="Contraseña">
                    </div>
                    <p>Has olvidado tu contraseña?</p>
                </div>
        <input class="btn" type="submit" value="Iniciar Sesión">
        </div>
        </form>
    </section>
</body>

</html>