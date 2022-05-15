<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/EscalasCss.css" as="style">
    <link rel="icon" href="imagen/IconoTren.png">
    <title>Escala Trenes</title>
    </head>
<body>
    <header>
        <a href="#" class="logo">
            <img src="img/IconoTren.png" alt="ModelWorld">
            <h2 class="nombreEmpresa">Model World</h2>
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
        <img src="img/Plastimodelismo.jpg" width="100%" height="600px" alt="Inicio">
        <p>Autos</p>
    </section>
    
    
    <center><h3>Elija la categoria que mas te interese</h3></center>

    <hr>   
<div class="uno"> 
    <table align="center" cellspacing="25" >
                    
                    
        
        <tr> <td><a href="Escalas/TrenEscala.php">Ferromodelismo</a></td>   <td><a href="Escalas/AvionEscala.php">Aviones</a></td>   <td><a href="Escalas/TanqueEscala.php">Vehiculos Militares</a> </td>   </tr>

        
        <tr><td><a href="Escalas/AutoEscala.php">Plastimodelismo</a></td> <td><a href="Escalas/BarcosEscala.php">Barcos</a></td>  <td><a href="Escalas/Accesorios.php">Accesorios</a></td> </tr>

    </table>
</div>

<br>

<div id="Datos1"><a><b>
Copyright © 2022 Model World<br>

Av. Cabildo 2370 Local 54 -Galería Rio de Janeiro-<br>

Tel (011) 4089-7771 Buenos Aires -ARGENTINA- </b></a></div>
 
<div id="Datos2"><a><hr> <b>Horarios:<b><br> 
-Lunes-viernes: 10:30 AM - 19:00 PM<br>
-Sabado: 10:30 Am - 13:00 PM<br></a></div>

<script type="text/javascript">
    window.addEventListener("scroll",function(){
        var header = document.querySelector("header");
        header.classList.toggle("abajo",window.scrollY>0);
    })
</script>


</body>
</html>