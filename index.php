<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-wiidth, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blog de Videojuegos</title>
    </head>
    <body>
        <!-- ENCABEZADO-->
        <header>
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
                    <li>
                        <a href="categoria1">Categoria 1</a>
                    </li>
                    <li>
                        <a href="categoria2">Categoria 2</a>
                    </li>
                    <li>
                        <a href="categoria3">Categoria 3</a>
                    </li>
                    <li>
                        <a href="categoria4">Categoria 4</a>
                    </li>
                    <li>
                        <a href="sobremi">Sobre mi</a>
                    </li>
                    <li>
                        <a href="contacto">Contacto</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div id="container">
            <!-- SIDEBAR-->
            <aside id="sidebar">
                <div id="login" class="block-aside">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email" />

                        <label for="passsword">Contraseña</label>
                        <input type="password" name="password" />

                        <input type="submit" value="Entrar" />
                    </form>
                </div>
                <div id="register" class="block-aside">
                    <h3>Registrate</h3>
                    <form action="register.php" method="POST">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" />

                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" />

                            <label for="email">Email</label>
                            <input type="email" name="email" />
                            
                            <label for="passsword">Contraseña</label>
                            <input type="password" name="password" />

                            <input type="submit" value="Registrar" />
                    </form>
                </div>
            </aside>
            <!-- CAJA PRINCIPAL-->
            <div id="principal">
                <h1>Ultimas entradas</h1>

                <article>
                    <h2>Titulo de mi entrada</h2>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras purus dolor, sollicitudin non facilisis sed, pretium sed nisl. 
                    Donec magna lorem, euismod eu ullamcorper at, viverra quis neque. Pellentesque pretium consequat magna, nec cursus turpis ultricies eu. 
                    Cras vehicula libero non elit molestie interdum. Etiam et nibh id sapien malesuada posuere. 
                    </p>
                </article>

                <article>
                    <h2>Titulo de mi entrada</h2>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras purus dolor, sollicitudin non facilisis sed, pretium sed nisl. 
                    Donec magna lorem, euismod eu ullamcorper at, viverra quis neque. Pellentesque pretium consequat magna, nec cursus turpis ultricies eu. 
                    Cras vehicula libero non elit molestie interdum. Etiam et nibh id sapien malesuada posuere. 
                    </p>
                </article>

                <article>
                    <h2>Titulo de mi entrada</h2>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras purus dolor, sollicitudin non facilisis sed, pretium sed nisl. 
                    Donec magna lorem, euismod eu ullamcorper at, viverra quis neque. Pellentesque pretium consequat magna, nec cursus turpis ultricies eu. 
                    Cras vehicula libero non elit molestie interdum. Etiam et nibh id sapien malesuada posuere. 
                    </p>
                </article>

                <article>
                    <h2>Titulo de mi entrada</h2>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras purus dolor, sollicitudin non facilisis sed, pretium sed nisl. 
                    Donec magna lorem, euismod eu ullamcorper at, viverra quis neque. Pellentesque pretium consequat magna, nec cursus turpis ultricies eu. 
                    Cras vehicula libero non elit molestie interdum. Etiam et nibh id sapien malesuada posuere. 
                    </p>
                </article>
            </div>
            <!-- PIE DE PAGINA-->
            <footer id="footer">
                <p>Powered by: Sergio Osorio &copy; 2021</p>
            </footer>
        </div>
    </body>
</html>