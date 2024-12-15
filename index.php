<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASTER EN CSS</title>
    <link rel="shortcut icon" href="./imagenes/torta.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">

    <meta name="theme-color" content="#2091F9">

    <meta name="title" content="Aprende CSS desde cero">
    <meta name="description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">


    <meta property="og:type" content="website">
    <meta property="og:url" content="https://alexcgdesign.github.io">
    <meta property="og:title" content="Aprende CSS desde cero">
    <meta property="og:description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">
    <meta property="og:image" content="https://alexcgdesign.github.io/images/css.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.jordanalex.com/">
    <meta property="twitter:title" content="Aprende CSS desde cero">
    <meta property="twitter:description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">
    <meta property="twitter:image" content="https://alexcgdesign.github.io/images/css.jpg">
</head>

<body>

    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Pancho</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="index.php" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="nosotros.php" class="nav__links">nosotros</a>
                </li>
                <li class="nav__items">
                    <a href="contacto.php" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="domicilio.php" class="nav__links">Domicilio</a>
                </li>
                <li class="nav__items"><a href="./php/cerrar_sesion.php" class="nav__links">Salir</a></li>

                <img src="./imagenes/close.svg" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="./imagenes/menu.svg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">Pancho: El sabor que abraza tus mañanas.</h1>
            <p class="hero__paragraph">En Pancho, nos dedicamos a crear panes y 
                productos de repostería frescos, deliciosos y llenos de cariño. 
                Cada día seleccionamos los mejores ingredientes para llevar a tu mesa el sabor y la calidad que mereces.</p>
            <a href="./register.php" class="cta">Encargar ahora</a>
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">¿Qué encontrarás en Pancho?</h2>
            <p class="about__paragraph">En Pancho, nos esforzamos por brindarte mucho más que pan.
                 Cada visita es una experiencia donde el sabor, la tradición y la creatividad se combinan 
                 para alegrar tus días.</p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="./imagenes/shapes.svg" class="about__icon">
                    <h3 class="about__title">Productos frescos y variados</h3>
                    <p class="about__paragrah">Disfruta de panes recién horneados, pasteles irresistibles 
                        y una selección que se adapta a todos los gustos y ocasiones.</p>
                </article>

                <article class="about__icons">
                    <img src="./imagenes/paint.svg" class="about__icon">
                    <h3 class="about__title">Compromiso con la calidad</h3>
                    <p class="about__paragrah">Usamos los mejores ingredientes y técnicas artesanales para 
                        garantizar productos que te enamoren desde el primer bocado.</p>
                </article>

                <article class="about__icons">
                    <img src="./imagenes/code.svg" class="about__icon">
                    <h3 class="about__title">Atención personalizada</h3>
                    <p class="about__paragrah">Nuestro equipo está aquí para escucharte, asesorarte y 
                        asegurarse de que siempre encuentres lo que necesitas.</p>
                </article>
            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">Descubre el sabor que hace la diferencia.</h2>
                    <p class="knowledge__paragraph">En Pancho, ofrecemos un servicio de panes frescos y deliciosos hechos a tu medida. Ya sea para tu desayuno, una reunión especial o simplemente para consentirte, encontrarás variedad, calidad y el auténtico toque artesanal que mereces.</p>
                    <a href="register.php" class="cta">Encarga Ahora</a>
                </div>

                <figure class="knowledge__picture">
                    <img src="./imagenes/quieroya.jpg" class="knowledge__img">
                </figure>
            </div>
        </section>

        <section class="price container">
            <h2 class="subtitle">Obten el plan perfecto para disfrutar tus panes favoritos</h2>

            <div class="price__table">
                <div class="price__element">
                    <p class="price__name">Plan Básico</p>
                    <h3 class="price__price">$15,000 COP/mes</h3>

                    <div class="price__items">
                        <p class="price__features">1 pieza de pan diario</p>
                        <p class="price__features">Opciones tradicionales</p>
                        <p class="price__features">Perfecto para quienes buscan pan fresco a diario sin compromiso a largo plazo.</p>
                    </div>

                    <a href="register.php" class="price__cta">Empieza ahora</a>
                </div>


                <div class="price__element price__element--best">
                    <p class="price__name">Plan Familiar</p>
                    <h3 class="price__price">$120,000 COP/mes</h3>

                    <div class="price__items">
                        <p class="price__features">2 baguettes diarias o 12 piezas semanales</p>
                        <p class="price__features">Variedad de panes tradicionales y dulces</p>
                        <p class="price__features">El mejor precio por una cantidad mayor de panes.</p>
                    </div>

                    <a href="register.php" class="price__cta">Empieza ahora</a>
                </div>


                <div class="price__element">
                    <p class="price__name">Plan Gourmet</p>
                    <h3 class="price__price">$200,000 COP/mes</h3>

                    <div class="price__items">
                        <p class="price__features">Panes artesanales y especiales (como integrales o rellenos)</p>
                        <p class="price__features">Personalización para eventos</p>
                        <p class="price__features">Incluye 10 piezas semanales</p>
                    </div>

                    <a href="register.php" class="price__cta">Empieza ahora</a>
                </div>


            </div>
        </section>

        <section class="testimony">
            <div class="testimony__container container">
                <img src="./imagenes/leftarrow.svg" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Juan Rodríguez, <span class="testimony__course">cliente de Pancho.</span></h2>
                        <p class="testimony__review">Desde que empecé a pedir en Pancho, no quiero probar ningún otro pan. El pan fresco diario siempre llega en su punto perfecto, y la variedad de productos es increíble. Definitivamente una experiencia que se disfruta cada día.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es  Laura Méndez, <span class="testimony__course">cliente de Pancho.</span></h2>
                        <p class="testimony__review">Pancho ha hecho que mis mañanas sean mucho mejores. El Plan Familiar es ideal para mi hogar. Los panes son deliciosos, frescos y siempre llegan en tiempo. ¡Mis hijos están encantados!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face2.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Andrés Martínez, <span class="testimony__course">cliente de Pancho.</span></h2>
                        <p class="testimony__review">¡Nunca había probado panes tan sabrosos! El Plan Gourmet me ha sorprendido gratamente, especialmente los panes rellenos y los integrales. Los recomiendo totalmente si buscas calidad y variedad.

                        </p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face3.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="4">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Carmen Gómez, <span class="testimony__course">cliente de Pancho.</span></h2>
                        <p class="testimony__review">Como organizadora de eventos, siempre busco calidad y Pancho ha superado mis expectativas. Los panes para mi evento fueron perfectos, y la personalización fue justo lo que necesitaba. ¡Servicio excelente y pan delicioso!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face4.jpg" class="testimony__img">
                    </figure>
                </section>


                <img src="./imagenes/reghtarrow.svg" class="testimony__arrow" id="next">
            </div>
        </section>

        <section class="questions container">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph">Estas son algunas de las preguntas que mas nos an echo en pancho.</p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué es Pancho?
                            <span class="questions__arrow">
                                <img src="./imagenes/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Pancho es una panadería artesanal que ofrece una amplia variedad de panes frescos, deliciosos y de calidad. Nos especializamos en la elaboración de panes tradicionales, integrales y gourmet, utilizando solo los mejores ingredientes para garantizar el mejor sabor en cada bocado. Además, contamos con planes de suscripción para que disfrutes de nuestros productos de manera conveniente y económica.</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué aprenderé al suscribirme a un plan de Pancho?
                            <span class="questions__arrow">
                                <img src="./imagenes/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Al suscribirte a cualquiera de nuestros planes, aprenderás a disfrutar de la calidad y frescura de nuestros productos todos los días. Además, podrás elegir entre diferentes tipos de panes, desde los más tradicionales hasta opciones gourmet personalizadas. Si eliges nuestro plan Gourmet, también aprenderás sobre la variedad y las técnicas detrás de la panadería artesanal, con panes exclusivos que solo ofrecemos a nuestros suscriptores.</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué es el Pan Gourmet en Pancho?
                            <span class="questions__arrow">
                                <img src="./imagenes/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">El Pan Gourmet es una de nuestras especialidades en Pancho. Está compuesto por panes artesanales y exclusivos, como panes integrales, rellenos, y otros sabores innovadores que no encontrarás en panaderías comunes. Estos panes están hechos con ingredientes seleccionados, perfectos para ocasiones especiales, eventos o para aquellos que buscan una experiencia más sofisticada en sus comidas.</p>
                    </div>
                </article>
            </section>

            <section class="questions__offer">
                <h2 class="subtitle">¿Cómo funcionan los planes de suscripción?</h2>
                <p class="questions__copy">Nuestros planes de suscripción están diseñados para ofrecerte comodidad y ahorro. Al elegir uno de nuestros planes (Básico, Familiar o Gourmet), recibirás panes frescos de acuerdo a la cantidad y tipo que más te guste. Los planes ofrecen flexibilidad para adaptarse a tus necesidades, y te aseguramos que disfrutarás de panes frescos, siempre entregados en tiempo y forma. Además, si eres un cliente frecuente, puedes obtener descuentos y promociones especiales.</p>
                <a href="register.php" class="cta">Suscribirme ahora</a>
            </section>
        </section>
    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Solicitar mas informacion.</h2>

                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="#" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">nosotros</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Domicilio</a>
                    </li>
                </ul>
            </nav>

            <form class="footer__form" action="resibir.php" method="POST">
                <h2 class="footer__newsletter">Solicitar informacion</h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                    <input type="submit" value="Resivir informacion" class="footer__submit">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./imagenes/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./imagenes/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./imagenes/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Pancho.</h3>
        </section>
    </footer>

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>