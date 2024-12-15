<?php
session_start();
?>
<!DOCTYPE html> <html lang="es"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Contacto - Pancho</title> <link rel="stylesheet" href="./css/normalize.css"> <link rel="stylesheet" href="./css/estilos.css"> 
<style>
body
    {
        font-family: Arial, sans-serif;
        
    }
    .hero::before {
   content: "";
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-image: linear-gradient(180deg, #0000008c 0%, #0000008c 100%), url('imagenes/primero.jpg');
background-size: cover;
clip-path: polygon(0 0, 100% 0, 100% 80%, 50% 95%, 0 80%);
z-index: -1;
}

    .hero__title {
        font-size: 2.5em;
        margin: 0;
    }
    .hero__paragraph {
        font-size: 1.2em;
    }
    .contact-container {
        max-width: 600px;
        margin: 40px auto;
        padding: 30px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    h2.subtitle {
        text-align: center;
        margin-bottom: 20px;
        color: #ff6f61;
    }
    label {
        font-weight: bold;
        margin-top: 10px;
        display: block;
    }
    input[type="text"],
    input[type="email"],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1em;
    }
    textarea {
        height: 150px;
        resize: vertical;
    }
    .contact-button {
        background-color: #ff6f61;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1em;
        transition: background-color 0.3s;
        display: block;
        width: 100%;
        margin-top: 20px;
    }
    .contact-button:hover {
        background-color: #ff4b3a;
    }
</style>
</head> 
<body>
     <header class="hero"> 
        <nav class="nav container"> 
            <div class="nav__logo"> 
                <h2 class="nav__title">Pancho</h2> </div>

        <ul class="nav__link nav__link--menu">
            <li class="nav__items"><a href="index.php" class="nav__links">Inicio</a></li>
            <li class="nav__items"><a href="nosotros.php" class="nav__links">Nosotros</a></li>
            <li class="nav__items"><a href="contacto.php" class="nav__links">Contacto</a></li>
            <li class="nav__items"><a href="domicilio.php" class="nav__links">Domicilio</a></li>
            <li class="nav__items"><a href="./php/cerrar_sesion.php" class="nav__links">Salir</a></li>
        </ul>
        
    </nav>
    <section class="hero__container container">
        <h1 class="hero__title">Contáctanos</h1>
        <p class="hero__paragraph">Si tienes preguntas o comentarios, no dudes en contactarnos.</p>
    </section>
</header>
<main>
    <section class="contact-container">
        <h2 class="subtitle">Formulario de Contacto</h2>
        <form action="enviar_contacto.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="pregunta">Selecciona una pregunta frecuente:</label>
    <select id="pregunta" name="pregunta">
        <option value="">-- Elige una opción --</option>
        <option value="horarios">¿Cuáles son los horarios de atención?</option>
        <option value="productos">¿Qué productos ofrecen?</option>
        <option value="envios">¿Hacen envíos a domicilio?</option>
        <option value="ofertas">¿Tienen ofertas?</option>
        <option value="ingredientes">¿Usan ingredientes orgánicos?</option>
    </select>
    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" required></textarea>

    <button type="submit" class="contact-button">Enviar</button>
</form>
    </section>
</main>
<footer class="footer">
    <section class="footer__copy container">
        <h3 class="footer__copyright">Derechos reservados &copy; Pancho.</h3>
    </section>
</footer>
        </form>
    </section>
</main>
</body> </html>
