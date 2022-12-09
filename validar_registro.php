<?php 

    session_start();

    include_once('config/bd.php');


    if( isset($_POST['Usuario']) && isset($_POST['Clave']) && isset($_POST['RClave']) && isset($_POST['Nombre_Completo']) ){

        echo "Uno de los campos está vacio.";

        function validar($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $usuario = validar($_POST['Usuario']);
        $clave = validar($_POST['Clave']);
        $rClave = validar($_POST['RClave']);
        $nombreCompleto = validar($_POST['Nombre_Completo']);

        //$datosUsuario = 'Usuario' . $usuario . '&Nombre_Completo=' . $Nombre_Completo;

        if(empty($usuario)){
            header('Location: registro.php?error=El usuario es requerido.');
            exit();
        }else if(empty($nombreCompleto)){
            header('Location: registro.php?error=El nombre completo es requerido.');
            exit();
        }else if(empty($clave)){
            header('Location: registro.php?error=La clave es requerida.');
            exit();
        }else if(empty($rClave)){
            header('Location: registro.php?error=La clave repetida es requerida.');
            exit();
        }else if($clave !== $rClave){
            header('Location: registro.php?error=Las claves deben ser iguales.');
            exit();
        }else{
            $clave = md5($clave);

            $sql = "SELECT * FROM usuarios WHERE Usuario = '$usuario' ";
            $query = $conexion->query($sql);

            if(mysqli_num_rows($query) > 0){
                header('Location: registro.php?error=El usuario ya existe.');
                exit();
            }else{
                $sql2 = "INSERT INTO usuarios (Nombre_Completo, Usuario, Clave) VALUES ('$nombreCompleto','$usuario','$clave')";
                $query2 = $conexion->query($sql2);

                if($query2){
                    header('Location: registro.php?success=Usuario creado con exito!');
                    exit();
                }else{
                    header('Location: registro.php?error=Ocurrió un error.');
                    exit();
                }
            }
        }
    }else{
        header('Location: registro.php');
        exit();
    }


?>