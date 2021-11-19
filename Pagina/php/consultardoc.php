<?php
include ('conexion.php');

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
                <h2> <img src="https://img.icons8.com/ios-glyphs/50/000000/view-file.png"/> Consultar Documento</h2>
                <div class="articulo">
                <form action="" method="get">

                    <p>Buscar     <input class="input100" type="text" name="busqueda"> <br><br> <br><br><br><br>
                </p>
                
                <table class="email-alerts">
                    <thead>
                        <tr>
                            <th> Número </th>
                            <th> Bodega </th>
                            <th> Producto </th>
                            <th> Cantidad </th>
                            <th> Lote </th>
                            <th> Observación </th>
                        </tr>
                    </thead>
                    <?php
                    if(isset($_GET['enviar'])){
                    $busqueda = $_GET['busqueda'];
  

    $consulta = $conexion->query("SELECT * FROM producto  WHERE nombre_producto LIKE '%$busqueda%'");
    while ($row = $consulta->fetch_array()) {
        echo $row['nombre_producto'];
    }
}
?>
                    <tbody>       
                        <tr>
                            <td><?php  echo $row ['nombre_producto'];?></td>
                            <td></td>
                            <td>hoal</td>
                            <td>ads</td>
                            <td>asd</td>
                            <td>adssad</td>
                        </tr>
                       
                        <tr>
                            <td>0124</td>
                            <td>Yopal</td>
                            <td>Tiametoxam + lambdacyhalotrina x lt</td>
                            <td>85</td>
                            <td>AYYY20128355</td>
                            <td>Se recibe de Juan store</td>
                        </tr>
                    </tbody>
                </table>
                <br><br><br><br>
                <input class="b1" type="submit" name="enviar" value="Buscar"> <img src="https://img.icons8.com/office/30/000000/search--v1.png"/>
                <button class="b2"><a href="index3.php">Regresar</a></button><img src="https://img.icons8.com/color/30/000000/return.png"/>
                <img class="i2" src="images/consultard.png" alt="">       
            </form>
              
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