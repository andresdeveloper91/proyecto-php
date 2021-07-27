<?php
//Iniciar la sesion y la conexion a la BD
require_once 'includes/conexion.php';

//recoger datos del formulario
if(isset($_POST)){

    //borrar error antiguo
    if(isset($_SESSION['error_login'])){
        session_unset($_SESSION['error_login']);
    }
    //recojo datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
        
        $verify = password_verify($password, $usuario['password']);
        
        if($verify){
            //utilizar una sesion para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;

        }else{
            //si algo falla enviar una sesion con el fallo
            $_SESSION['error_login'] = "login incorrecto!!";
        }   

    }else{
        //mensaje de error
        $_SESSION['error_login'] = "login incorrecto!!";
    }
}

//redirigir al index
header('Location: index.php');






//utilizar una sesion para guardad los datos del usuario logueado

//si algo fall enviar una sesion con el fallo

//redirigir al index.php