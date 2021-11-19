<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>Document</title>
</head>
<header>     <nav>
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

</header>
<body>
    <section class="about-us">
        <div class="contenedor1">
            <h1 class="title">AGROPARTNER S.A.S</h1>
                <br><br>
                <h2> <img src="https://img.icons8.com/external-konkapp-detailed-outline-konkapp/50/000000/external-report-marketing-and-growth-konkapp-detailed-outline-konkapp.png"/> Reportes</h2>
                <div class="articulo">
                <form action="">
       <p>Fecha inicial<input class="input700" type="date" name="Fecha inicial" id="">
        Fecha Final<input class="input700" type="date" name="Fecha inicial" id="">   
       </p> <br><br>
       <p class="pp">Bodega<input class="input700" type="text" name="Ingrese Bodega" id="">
        Producto<input class="input700" type="text" name="Ingrese producto" >
       </p> <br><br><br>
       <p class="pp1">Marca <input class="check1" type="checkbox" name="Marca" id="">
        Cantidad <input class="check1" type="checkbox" name="Lote" id=""><br>
        Lote <input class="check2" type="checkbox" name="Cantidad" id="">
        Vencimiento <input class="check3" type="checkbox" name="fecha-vencimiento" id=""><br>
        Entrada <input class="check4" type="checkbox" name="fecha-documento" id="">
        Salida <input class="check5" type="checkbox" name="Documento" id="">
     </p> <br><br>
        <input class="b1" type="submit" class="btn btn-green" value="Generar"> <img src="https://img.icons8.com/color/30/000000/pdf-2--v1.png"/>
        <button class="b3"><a href="index2.php">Regresar</a></button><img src="https://img.icons8.com/color/30/000000/return.png"/>
    </form>
     <img src="images/reporte.png">
                </div>
            </div>
        </div>
    </section>
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
            <a href="index.html">Distribución de mercancía</a>
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