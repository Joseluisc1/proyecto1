
<?php
include ('variables.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>AGROPARTNER S.A.S</title>
</head>
<style>

</style>
<body> 
    <header>
        <nav>
            <section class="contenedor nav">
                <div class="logo">
                    <img src="images/logo.jpeg" alt="">
                </div>
                <div class="enlaces-header">
                    <a href="index2.php">Inicio</a>
                    <a href="#">Hola, Agropartner</a>
                    <a href="index.php">Cerrar Sesion</a>
                </div>
                <div class="hamburguer">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
        </nav>   
    <section class="about-us">
        <div class="contenedor1">
            <h1 class="title">AGROPARTNER S.A.S</h1>
                <br><br>
                <h2> <img src="https://img.icons8.com/ios-filled/50/000000/product.png"/> Crear producto</h2>
                <div class="articulo">
                <form method="post">

                    <p>Producto<input class="input200" type="text" name="nombre"> <br><br>
                    Marca<input class="input300" type="text" name="marca"> <br><br>
                    Lote<input class="input400" type="text" name="lote"> <br><br>
                    Fecha de vencimiento<input class="input500" type="date" name="fecha"> <br><br><br><br>
                </p>
                <input class="b1" type="reset" value="Limpiar"> <img src="https://img.icons8.com/color/30/000000/broom.png"/> 
                <input class="b2" type="submit" class="btn btn-green" value="Enviar Datos" name="enviar"> <img src="https://img.icons8.com/fluency/30/000000/save-close.png"/> 
                <button class="b2"><a href="index2.php">Regresar</a></button><img src="https://img.icons8.com/color/30/000000/return.png"/> 
                    </form>
                <img src="images/crearpro.png">
                </div>
            </div>
        </div>
    </section>
</header>
    <footer>
        <div class="partFooter"><img src="images/logo.jpeg" alt="">
        </div>
        
        <div class="partFooter">
            <h4>Sedes</h4>
            <a href="#">Villavicencio</a>
            <a href="#">Yopal</a>
            <a href="#">Granada</a>
        </div>
        
        <div class="partFooter">
            <h4>Servicios</h4>
            <a href="#">Venta de Insumos agrícolas</a>
            <a href="#">Asistencia de bodegaje y logística</a>
            <a href="#">Distribución de mercancía</a>
        </div>
        <div class="partFooter">
            <h4>Redes sociales.</h4>
            <div class="social-media">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>

    </footer>
    <script src="https://kit.fontawesome.com/6ad21f78a8.js" c   rossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/crear.js"></script>
</body>

</html>