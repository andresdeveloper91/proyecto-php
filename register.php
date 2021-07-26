<?php
if(isset($_POST)){

    //conexion a la base de datos
    require_once 'includes/conexion.php';


    if(!isset($_SESSION)){
        session_start();
    }
    //Recoger los datos de registro
    /*uso del operador ternario, de esta 
    manera se evita usar el if/else*/
    //sintaxis de if/else
    /*if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        }else{
        $nombre = false;
        }*/
    $errores = array();
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

    //validar los datos del formulario antes de guardarlos en la BD
    //validar nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = 'el nombre no es valido';
    }

    //validar apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado = true;
    }else{
        $apellidos_validado = false;
        $errores['apellidos'] = 'los apellidos no son validos';
    }

    //validar email
    if(!empty($email) && FILTER_VAR($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = 'el email no es valido';
    }

    //validar password
    if(!empty($password)){
        $password_validado = true;
    }else{
        $password_validado = false;
        $errores['password'] = 'La contraseña está vacía';
    }


    $guardar_usuario = false;

    if(count($errores) == 0){
        $guardar_usuario = true;

        //Cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

       /* var_dump($password);
        echo "<br/>";
        var_dump($password_segura);
        echo "<br/>";
        //ESTA FUNCION SIRVE PARA VERIFICAR LA CONTRASEÑA
        var_dump(password_verify('Hola', $password_segura));
        die();
        */

        //insertar registro en la tabla usuario de la DB
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);

        if($guardar){
            $_SESSION['completado'] = "Registro exitoso";
        }else{
            $_SESSION['errores']['general'] = "Fallo al crear usuario";
        }

        
    }else{
        $_SESSION['errores'] = $errores;       
    }
    
}

header('Location: index.php');

