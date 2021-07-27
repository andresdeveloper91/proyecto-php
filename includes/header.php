<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helper.php'; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-wiidth, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blog de Videojuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    </head>
    <body>
        <!-- ENCABEZADO-->
        <header id="header">
            <!--LOGO-->
           <div id="logo">
                <a href="index.php">
                    Blog de videojuegos
                </a>
            </div> 
             <!-- MENU-->
            <nav id="nav">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <?php
                        $categorias = conseguirCategorias($db);
                        if(!empty($categorias)):
                            while($categoria = mysqli_fetch_assoc($categorias)):
                    ?>
                            <li>
                                <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                            </li>
                    <?php                         
                            endwhile;
                        endif;
                    ?>
                    
                    <li>
                        <a href="sobremi">Sobre mi</a>
                    </li>
                    <li>
                        <a href="contacto">Contacto</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>