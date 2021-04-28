




<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Portfolio Marcos Mena</title>
        <link rel="stylesheet" href="/style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script rel="text/javascript" src="functions.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    </head>

    <body>
        <header>
            <div id="header_nav">
                <div class="left_nav" style="grid-area: left_nav">
                    <p><a href="index.php" class="fa fa-circle-o" aria-hidden="true"> Portfolio :MarcosMena:</a></p>
                </div>
                <div class="right_nav" style="grid-area: right_nav">
                    <ul>
                        <li><a href="#page1" style="grid-area: inicio">Inicio</a></li>
                        <li><a href="#page2" style="grid-area: sobremi">Sobre mi</a></li>
                        <li><a href="#page3" style="grid-area: proyectos">Proyectos</a></li>
                        <li><a href="#page4" style="grid-area: capacidades">Capacidades</a></li>
                        <li><a href="#page5" style="grid-area: contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <section id="page1">
            <h2>Marcos Mena</h2>
            <h3>Fullstack Junior Developer</h3>
            <h4>Desliza para ver toda la información!</h4>


        </section>

        <section id="page2">
            <h2>Sobre mi</h2>
            <ul class="about_me_pics">
                <li style="grid-area: pic1" class="fa fa-user-o" aria-hidden="true"><p>Marcos Mena</p></li>
                <li style="grid-area: pic2" class="fa fa-book" aria-hidden="true"><p>Grado en Ingenieria Informática UAB</p></li>
                <li style="grid-area: pic3" class="fa fa-tasks" aria-hidden="true"><p>Barcelona,Españita</p></li>
                <li style="grid-area: pic4" class="fa fa-map-marker" aria-hidden="true"><p>Especializado en...</p></li>
            </ul>
        </section>

        <section id="page3">
            <h2>Proyectos</h2>
            <ul class="projects_pics">
                <li class="proj1"><p>Project 1</p></li>
                <li class="proj2"><p>Project 2</p></li>
                <li class="proj3"><p>Project 3</p></li>
                <li class="proj4"><p>Project 4</p></li>
            </ul>
        </section>

        <section id="page4">
            <h2>Capacidades</h2>
            <p>Selector+Skills_bar</p>
        </section>

        <section id="page5">
            <h2>Contacto</h2>

                <form method="post" action="/form.php" >
                    <div class="container">
                        <div style="grid-area: name">
                            <label for="fname">Nombre:</label><input type="text" id="fname" name="firstname" placeholder="Introduzca su nombre..." maxlength="25" required>
                        </div>
                        <div style="grid-area: lname">
                            <label for="lname">Apellido:</label><input type="text" id="lname" name="lastname" placeholder="Introduzca su apellido..." maxlength="25">
                        </div>
                        <div style="grid-area: phone">
                            <label for="phone">Móvil:</label><input type="text" id="phone" name="phone"  placeholder="Introduzca su número de móvil..." pattern="[0-9]{9}" required>
                        </div>
                        <div style="grid-area: message">
                            <label for="message">Mensaje:</label><textarea type="text" id="message" name="message" placeholder="Introduzca aquí su mensaje..." style="height:200px" maxlength="250"></textarea>
                        </div>
                        <div style="grid-area: send">
                            <button type="submit" form="form" value="Submit">Enviar!</button>
                        </div>
                    </div>
                </form>
        </section>

    <footer>
        <p>footer</p>
    </footer>


    </body>
</html>