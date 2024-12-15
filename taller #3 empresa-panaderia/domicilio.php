<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: register.php"); // Redirigir si no ha iniciado sesión
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domicilio - Pancho</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
           
       
        .hero__title {
            font-size: 2.5em;
            margin: 0;
        }
        .hero__paragraph {
            font-size: 1.2em;
        }
        .products-container {
            max-width: 1200px;
            margin: 40px auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            padding: 0 20px;
        }
        .product-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.2s;
            
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .product-title {
            font-size: 1.2em;
            margin: 10px 0;
            color: #ff6f61;
        }
        .product-price {
            font-size: 1em;
            margin: 5px 0;
            color: #333;
            font-weight: bold;
        }
        .product-description {
            padding: 0 10px 15px;
            font-size: 0.9em;
            color: #555;
        }
        .product-link {
            text-decoration: none;
            color: inherit;
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
            <h1 class="hero__title">Productos a Domicilio</h1>
            <p class="hero__paragraph">Descubre nuestros deliciosos productos disponibles para entrega a domicilio.</p>
        </section>
    </header>
    <main>
        <section class="products-container">
            <!-- Aquí comienzan los productos -->
            <div class="product-card">
                <a href="pedido.php?producto=1" class="product-link">
                    <img src="/imagenes/buñuelos.JPEG" alt="Producto 1" class="product-image">
                    <h3 class="product-title">buñuelos</h3>
                    <p class="product-price">$1000</p>
                    
                </a>
            </div>
            <div class="product-card">
                <a href="pedido.php?producto=2" class="product-link">
                    <img src="/imagenes/torta.jpg" alt="Producto 2" class="product-image">
                    <h3 class="product-title">torta</h3>
                    <p class="product-price">$12.050</p>
                
                </a>
            </div>
            <div class="product-card">
                <a href="pedido.php?producto=3" class="product-link">
                    <img src="/imagenes/torta de jamon.JPEG" alt="Producto 3" class="product-image">
                    <h3 class="product-title">torta de jamon</h3>
                    <p class="product-price">$1500</p>
                   
                </a>
            </div>
            <div class="product-card">
                <a href="pedido.php?producto=4" class="product-link">
                    <img src="/imagenes/palitos de queso.JPEG" alt="Producto 4" class="product-image">
                    <h3 class="product-title">palitos de queso</h3>
                    <p class="product-price">$800</p>
                    
                </a>
            </div>
            <div class="product-card">
                <a href="pedido.php?producto=5" class="product-link">
                    <img src="/imagenes/torta de jamon.JPEG" alt="Producto 5" class="product-image">
                    <h3 class="product-title">torta de jamon</h3>
                    <p class="product-price">$2000</p>
                    
                </a>
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