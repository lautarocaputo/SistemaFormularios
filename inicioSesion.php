<?php 

session_start();

include('config/bd.php');

    

if( isset($_POST['Usuario']) && isset($_POST['Clave']) ){

    function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }


    $Usuario = validate($_POST['Usuario']);
    $Clave = validate($_POST['Clave']);



    if(empty($Usuario)){
        header("Location: index.php?error=El usuario es requerido");
        exit();
    }else if(empty($Clave)){
        header("Location: index.php?error=La clave es requerida");
        exit();
    }else{

        $Clave = md5($Clave);

        $Sql = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND Clave = '$Clave'";

        $result = mysqli_query($conexion, $Sql);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            if($row['Usuario'] == $Usuario && $row['Clave'] == $Clave){
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['Clave'] = $row['Clave'];
                $_SESSION['Nombre completo'] = $row['Nombre_Completo'];
                $_SESSION['Id'] = $row['Id'];
                header("Location: secciones/index.php");
                exit();

            }else{
                header("Location: index.php?error=El usuario o la contraseña son incorrectos");
                exit();
            }
        }else{
            header("Location: index.php?error=El usuario o la contraseña son incorrectos");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
}

?>
