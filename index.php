<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema Universitario</title>
</head>
<body>
    <header class="main-header">
        <div class="main-cont">
            <div class="desc-header">
                <img src="images/escudo_udec.svg" alt="UdeC Image">
            </div>
        </div>   
        <div class="cont-header">
            <h1>Bienvenido</h1>
            <div class="form">
                

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Estudiante</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profesor</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <form action="" onsubmit="return validar()">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
                        <label for="password">Contraseña</label>
                        <input type="password" name="pass" id="pass" placeholder="Contraseña">
                        <div id="messageUsuario"></div>
                        <button id="loginUsuario" type="button">Ingresar</button>
                    </form>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <form action="" onsubmit="return validar()">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
                        <label for="password">Contraseña</label>
                        <input type="password" name="pass" id="pass" placeholder="Contraseña">
                        <div id="messageDocente"></div>
                        <button id="loginDocente" type="button">Ingresar</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
       
        
    </header>

       
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>