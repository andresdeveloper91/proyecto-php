<?php
session_start();
if(isset($_POST)){

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
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

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

        var_dump($password);
        var_dump($password_segura);
        die();

        //insertar registro en la tabla usuario de la DB
    }else{
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }
}