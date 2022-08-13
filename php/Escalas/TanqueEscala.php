<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/EscalasCss.css" as="style">
    
    <link rel="icon" href="img/IconoTren.png">
    <script src="https://kit.fontawesome.com/6cfb8a8743.js" crossorigin="anonymous"></script>
    <title>Escala Tanques</title>
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
        <img src="img/tanques.jpg" width="100%" height="600px" alt="Inicio">
        <p>Escalas</p>
    </section>
    
    
    <center><h3>Seleccione la Escala que busca</h3></center>

    <hr>   
<div class="uno"> 
    <table align="center" cellspacing="25" >
                      
        <tr> <td><a href="../Secciones/Tanques.php">1:38</a></td>   <td><a href="../Secciones/Tanques.php">1:48</a></td>   <td><a href="../Secciones/Tanques.php"> 1:72</a> </td>  <td><a href="../Secciones/Tanques.php">1:87</a></td>  </tr>

    </table>
</div>

<br>

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