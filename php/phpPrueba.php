<? include('CSS.css')?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Model World</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="PaginaPrincipal.css" as="style">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="imagen/IconoTren.png">
    <script src="https://kit.fontawesome.com/6cfb8a8743.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <a href="phpPrueba.php" class="logo">
            <img src="imagen/IconoTren.png" alt="ModelWorld">
            <h2 class="nombreEmpresa">ModelWorld</h2>
        </a>
        <nav>
             <a href="phpPrueba.php" class="nav-link">Inicio</a>
             <a href="Informacion.php" class="nav-link">Informacion</a>
             <a htef="IniciarSesion.php" class="nav-link">Iniciar Sesion</a>
             <a href="Register.php" class="nav-link">Registrar</a>
        </nav>
    </header>
    <section class="zona1"></section>

    <section class="container">
        <img src="imagen/TrenInicio.jpg" width="100%" height="600px" alt="Inicio">
        <p>Inicio</p>
    </section>
    
    
    <center><h3>Elija la categoria que mas Le interese</h3></center>

    <hr>   
<div class="uno"> 
    <table align="center" cellspacing="25" >
                    
                    
        <tr> <td><b ><img src="imagen/Ferromodelismo.jpg" height="225px" width="260px" href="TrenEscala.php"/></b></td>   <td><b href="AvionEscala.php"><img src="imagen/Aviones.jpg" height="225px" width="260px"/></b></td>   <td><b href="TanqueEscala.php"><img src="imagen/tanques.jpg" width="260px" height="225px"/></b></td>    </tr>
        <tr> <td><a href="Escalas/TrenEscala.php">Ferromodelismo</a></td>   <td><a href="Escalas/AvionEscala.php">Aviones</a></td>   <td><a href="Escalas/TanqueEscala.php">Vehiculos Militares</a> </td>   </tr>

        <tr><td><b href="Plastimodelismo.php"><img src="imagen/Plastimodelismo.jpg" width="260px" height="225px"/></b></td> <td><b href="Plastimodelismo.php"><img src="imagen/barco.jpg" width="260px" height="225px"/></b></td> <td><b href="Plastimodelismo.php"><img src="imagen/accesorios1.jpeg" width="260px" height="225px"/></b></td> </tr>
        <tr><td><a href="Escalas/AutoEscala.php">Plastimodelismo</a></td> <td><a href="Escalas/BarcosEscala.php">Barcos</a></td>  <td><a href="Escalas/Accesorios.php">Accesorios</a></td> </tr>

    </table>
</div>

<br>
<? require('Segundo.php')?>

<footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="imagen/IconoTren.png" alt="ModelWorld">   
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



