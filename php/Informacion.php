

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Model World</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="PaginaPrincipal.css" as="style">
    <link rel="stylesheet" href="Secundarios.css" as="style">
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
             <a href="IniciarSesion.php" class="nav-link">Iniciar Sesion</a>
             <a href="Register.php" class="nav-link">Registrar</a>
        </nav>
    </header>
   


<center><h3>Esta Categoria te servira para armar tu siguiente maqueta.</h3></center>
<div class="divPrincipal">
    
    <div class="div1">
        
        <img src="imagen/Consejos3.jpg" alt="">
    </div>
    <div class="div2">
        
        <img src="imagen/Consejos1.jpg" alt="">
    </div>
    <div class="div3">
        
        <img src="imagen/Consejos2.jpg" alt="">
    </div>

</div>

<br>

<div class="texto">
    <center><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sit similique quas assumenda quos vitae? Eveniet libero dolorem harum id consequuntur aspernatur, cupiditate veniam, culpa veritatis, repellat odit ex maxime.
    Doloribus blanditiis dolore facilis quam nobis ipsum asperiores porro id? Tenetur doloribus praesentium assumenda, veritatis nemo quia porro accusantium facere, beatae sit quibusdam, voluptatibus nisi itaque odio cupiditate excepturi quaerat.</p></center>

</div>

<hr> 

<center><h3>Consejo 1:</h3></center>


<div class="divSecundario">
    <div class="imagen1">
        <img src="imagen/Consejo1 1.jpg" alt="">
    </div>
    <div class="imagen2">
        <img src="imagen/Consejo1 2.jpg" alt="">
    </div>

</div>



<div class="texto">
    <center><p> A la hora de hacer una maqueta,  se necesita un espacio en el cual no haya humedad y una base resistente para no tener complicaciones a la hora de armarla.
</p></center>

</div>
<hr> 
<center><h3>Consejo 2:</h3></center>



<div class="divSecundario">
    <div class="imagen1">
        <img src="imagen/Consejos2 1.jpg" alt="">
    </div>
    <div class="imagen2">
        <img src="imagen/Consejos2 2.jpg" alt="">
    </div>

</div>
<div class="texto">
    <center><p> A la hora de hacer una maqueta,  se necesita un espacio en el cual no haya humedad y una base resistente para no tener complicaciones a la hora de armarla.
</p></center>

</div>

<br>
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


