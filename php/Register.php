

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Model World</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="imagen/IconoTren.png">
    <link rel="stylesheet" href="Register.css" >
    <link rel="stylesheet" href="Register.js" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <script src="https://kit.fontawesome.com/6cfb8a8743.js" crossorigin="anonymous"></script>
</head>
<body>
    
   
    <div id="login">
        <h3 class="text-center text-black display-4">Login con PHP</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-light text-dark">
                        <form id="formlogin" class="form" action="" method="post">
                            <h3 class="text-center text-dark">Iniciar Sesion</h3>
                            <div class="form-group">
                                <label for="usuario" class="text-dark">Usuario</label>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" value="Conectar">


                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
            
    </div>
   
<br>
<? require('Segundo.php')?>
<script src="jquery/jquery-3.6.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
</body>   
<br>

