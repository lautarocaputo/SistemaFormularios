<!doctype html>
<html lang="en">

<head>
    <title>Formularios</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
    
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <br>
                    <form action="validar_registro.php" method="post">
                    <div class="card">
                        <div class="card-header">
                            Registro
                            <hr>
                            <?php 

                            if(isset($_GET['error'])){
                            ?>
                            <p class="alert alert-danger" role="alert">
                                <?php
                                echo $_GET['error'];
                                ?>
                            </p>
                            <?php
                            }
                            ?>

                            <?php 
                            if(isset($_GET['success'])){
                            ?>
                            <p class="alert alert-success" role="success">
                                <?php
                                echo $_GET['success'];
                                ?>
                            </p>
                            <?php
                            }
                            ?>

                            
                            <hr>
                        </div>
                        <div class="card-body">

                            <div class="mb-3">
                                <label for="" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="Usuario" id="Usuario" aria-describedby="helpId" placeholder="usuario">
                                <small id="helpId" class="form-text text-muted">Ingrese su usuario</small>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" name="Nombre_Completo" id="Nombre_Completo" aria-describedby="helpId" placeholder="nombre completo">
                                <small id="helpId" class="form-text text-muted">Ingrese su nombre completo</small>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="Clave" id="Clave" aria-describedby="helpId" placeholder="contraseña">
                                <small id="helpId" class="form-text text-muted">Ingrese su contraseña</small>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Repetir contraseña</label>
                                <input type="password" class="form-control" name="RClave" id="RClave" aria-describedby="helpId" placeholder="contraseña">
                                <small id="helpId" class="form-text text-muted">Ingrese su contraseña nuevamente</small>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" name="registro" id="registro" class="btn btn-primary">Registrarse</button>
                                <a href="../index.php">Iniciar sesión</a>
                            </div>
                    </form>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer>
        
    </footer>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>