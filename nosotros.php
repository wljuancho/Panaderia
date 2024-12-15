
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Pancho</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <style>
        .about__image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .mission, .vision, .values {
            margin: 20px 0;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Pancho</h2>
            </div>
            <ul class="nav__link nav__link--menu">
                <li class="nav__items"><a href="index.php" class="nav__links">Inicio</a></li>
                <li class="nav__items"><a href="nosotros.php" class="nav__links">Nosotros</a></li>
                <li class="nav__items"><a href="contacto.php" class="nav__links">Contacto</a></li>
                <li class="nav__items"><a href="domicilio.php" class="nav__links">Domicilio</a></li>
                <li class="nav__items"><a href="./php/cerrar_sesion.php" class="nav__links">Salir</a></li>
            </ul>
        </nav>
        <section class="hero__container container">
            <h1 class="hero__title">Nuestra Historia</h1>
            <p class="hero__paragraph">En Pancho, nuestra historia comienza con la pasión por el pan. Fundada en 2023, nuestra panadería se dedica a ofrecer productos frescos y de calidad, elaborados con los mejores ingredientes. Cada día, nuestro equipo trabaja con amor y dedicación para traerte el mejor sabor en cada bocado.</p>
        </section>
    </header>
    <main>
        <section class="about container">
            <h2 class="subtitle">Misión</h2>
            <div class="mission">
                <p>Proporcionar a nuestros clientes panes y productos de repostería de la más alta calidad, elaborados con ingredientes frescos y naturales, mientras fomentamos un ambiente de trabajo positivo y sostenible.</p>
                <img src="./imagenes/mision.jpg" alt="Misión de Pancho" class="about__image"> <!-- Imagen de la misión -->
            </div>

            <h2 class="subtitle">Visión</h2>
            <div class="vision">
                <p>Convertirnos en la panadería artesanal más reconocida de la región, famosa por la calidad de nuestros productos y el excelente servicio al cliente, creando experiencias memorables para cada uno de nuestros clientes.</p>
                <img src="./imagenes/vision.JPEG" alt="Visión de Pancho" class="about__image"> <!-- Imagen de la visión -->
            </div>

            <h2 class="subtitle">Valores</h2>
            <div class="values">
            <ul class="nav__link nav__link--menu">
                <li class="nav__items"><a href="index.php" class="nav__links">Inicio</a></li>
                <li class="nav__items"><a href="nosotros.php" class="nav__links">Nosotros</a></li>
                <li class="nav__items"><a href="contacto.php" class="nav__links">Contacto</a></li>
                <li class="nav__items"><a href="domicilio.php" class="nav__links">Domicilio</a></li>
                <li class="nav__items"><a href="./php/cerrar_sesion.php" class="nav__links">Salir</a></li>
            </ul>
                <img src="./imagenes/valores.JPEG" alt="Valores de Pancho" class="about__image"> <!-- Imagen de los valores -->
            </div>
        </section>
    </main>
    <footer class="footer">
        <section class="footer__copy container">
            <h3 class="footer__copyright">Derechos reservados &copy; Pancho.</h3>
        </section>
    </footer>
</body>
</html>