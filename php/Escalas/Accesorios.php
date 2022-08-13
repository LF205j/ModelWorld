<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/EscalasCss.css" as="style">
    
    <link rel="icon" href="img/IconoTren.png">
    <script src="https://kit.fontawesome.com/6cfb8a8743.js" crossorigin="anonymous"></script>
    <title>Escala Trenes</title>
    </head>
<body>
    <header>
        <a href="../phpPrueba.php" class="logo">
            <img src="img/IconoTren.png" alt="ModelWorld">
            <h2 class="nombreEmpresa">ModelWorld</h2>
        </a>
        <nav>
             <a href="" class="nav-link">Inicio</a>
             <a href="" class="nav-link">Informacion</a>
             <a href="" class="nav-link">Iniciar Sesion</a>
             <a href="" class="nav-link">Registrar</a>
        </nav>
    </header>
    <section class="zona1"></section>

    <section class="container">
        <img src="img/accesorios1.jpeg" width="100%" height="600px" alt="Inicio">
        <p>Escalas</p>
    </section>
    
    <center><h3>Elija la categoria que mas Le interese</h3></center>

    <hr>   
    <div id="conteItemsCarrusel">
        <div class="itemCarrusel" id="itemCarrusel-1">
            <div class="tarjetaCarrusel" id="tarjetaCarrusel-1">
                <img src="img/Accesorios1.jpg" alt="imagen 1">
            </div>
            <div class="flechasCarrusel">
                <a href="#itemCarrusel-3">
                    <i class="fa-solid fa-chevron-left"></i>
                </a>

                <a href="#itemCarrusel-2">
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
                
            </div>
        </div>
        <div class="itemCarrusel" id="itemCarrusel-2">
            <div class="tarjetaCarrusel" id="tarjetaCarrusel-2">
                <img src="img/Aviones.jpg" alt="imagen 2">
            </div>
            <div class="flechasCarrusel">
                <a href="#itemCarrusel-1">
                    <i class="fa-solid fa-chevron-left"></i>
                </a>

                <a href="#itemCarrusel-3">
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <div class="itemCarrusel" id="itemCarrusel-3">
            <div class="tarjetaCarrusel" id="tarjetaCarrusel-3">
                <img src="img/Accesorios3.jpg" alt="imagen 3">
            </div>
            <div class="flechasCarrusel">
                <a href="#itemCarrusel-2" id="">
                    <i class="fa-solid fa-chevron-left"></i>
            </a>

                <a href="#itemCarrusel-1">
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>

<br>
<div class="compra"> 
    <table align="center" cellspacing="25" >
                    
                    
        <tr> <td><b ><img src="img/AccesorioVenta1.jpg" height="225px" width="260px" href="TrenEscala.php"/></b></td>   <td><b href="AvionEscala.php"><img src="img/AccesorioVenta2.PNG" height="225px" width="260px"/></b></td>       </tr>
        <tr><td><h4 href="">Atlas Master Series - FM H16-44 Santa Fe #3013 - DCC & Sound</h4><center><h5>Precio: $15.000</h5></center></td> <td><h4 href="">Bachmann Branchline 31-933 Class1000 Midland Compound  </h4><center><h5>Precio: $15.000</h5></center></td></tr>
        <tr> <td><a href="Escalas/TrenEscala.php">Comprar</a></td>   <td><a href="Escalas/AvionEscala.php">Comprar</a></td>      </tr>
        
        <tr><td><b href="Plastimodelismo.php"><img src="img/AccesorioVenta3.jpg" width="260px" height="225px"/></b></td> <td><b href="Plastimodelismo.php"><img src="img/AccesorioVenta4.jpg" width="260px" height="225px"/></b></td>  </tr>
        <tr><td><center><h4 href="">Atlas Master Series Silver - GP40-2(W) Canadian National #1930</h4></center><center><h5>Precio: $15.000</h5></center></td> <td><center><h4 href="">Piko 57490 Taurus "HWB" ES 64 U2-033 Ep.V </h4></center><center><h5>Precio: $15.000</h5></center></td></tr>
        <tr><td><a href="Escalas/AutoEscala.php">Comprar</a></td> <td><a href="Escalas/BarcosEscala.php">Comprar</a></td>   </tr>

    </table>
</div>
<? require('Segundo.php')?>



<footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="img/IconoTren.png" alt="ModelWorld">   
                        </a>
                    </figure>
                </div>

                <div class="box">
                    <h2>SOBRE NOSOTROS </h2>
                    <p>Av. Cabildo 2370 Local 54 -Galería Rio de Janeiro-<br>

                    Tel (011) 4089-7771 Buenos Aires -ARGENTINA-</p>
                   
                </div>
                <div class="box">
                    <h2>HORARIOS</h2>
                    <div> <p>Horarios:<br> 
                    -Lunes-viernes: 10:30 AM - 19:00 PM<br>
                    -Sabado: 10:30 Am - 13:00 PM<br></p></div>


                </div>
                <div class="box">
                    <h2>SIGUENOS</h2>
                    <div class="red-social">
                        <a href="#" >
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" >
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#" >
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" >
                            <i class="fa fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
            </div>
            <div class="grupo-2">
                    <small>&copy; 2022<b>ModelWorld</b>- Todos los Derechos Reservados</small>
            </div>
        </footer>

<script type="text/javascript">
    window.addEventListener("scroll",function(){
        var header = document.querySelector("header");
        header.classList.toggle("abajo",window.scrollY>0);
    })
</script>


</body>
</html>