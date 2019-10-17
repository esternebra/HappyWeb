<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Esta es la página web de contacto de Estela López Martín">
    <meta name="keywords" content="Estela López Martín, Curriculum Vitae,  Diseño, Diseñador, Informática, Programación, Front End Developer ">
    <meta name="author" content="Estela López Martín">
    <meta name="robots" content="index, follow">
    <!-- Link Reset Meyer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
    <!-- Link Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Comfortaa|Lobster+Two|Raleway&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon">
    <!-- Link a hoja de estilos de Animate.css -->
    <link rel="stylesheet" href="css/animation.css">
    <!-- Link a hoja de estilos personal -->
    <link rel="stylesheet" href="css/style.css">

    <title>Contacto - The Happy Web Agency</title>
</head>
<body class="contacto">
  
    <!-- Contenedor principal con el menú y el main -->
   <div id="principal">
        
        <!-- **Menú de navegación** -->
        <nav>
            <!-- Div contenedor de la imagen del menú -->
            <label for="patatas">
                <!-- Imagen con efecto en JavaScript -->
                <div class="imagen-patatas" onclick="myFunction(this)"></div>
            </label>
            <input type="checkbox" id="patatas">
            <!-- Lista de menú -->
            <ul class="menu">
                <li><a href="index.php">inicio</a></li>
                <li><a href="nosotros.php">nosotros</a></li>
                <li><a href="trabajos.php">trabajos</a></li>
                <li><a href="#">contacto</a></li>
            </ul>
        </nav>

        <!-- **Inicio sección principal** -->
        <main >
            
            <div class="formulario">
                <h1>Contacta con nosotros</h1>
                <!-- Inicio formulario -->
                <form action="action_page.php">
                    <!-- Nombre -->
                    <div class="fila">
                    <div class="col-p">
                        <label for="nombre">Escribe tu nombre: </label>
                    </div>
                    <div class="col-g">
                        <input type="text" id="nombre" name="name" placeholder="Nombre.." required>
                    </div>
                    </div>
                    <!-- Email -->
                    <div class="fila">
                    <div class="col-p">
                        <label for="email">Escribe tu email:</label>
                    </div>
                    <div class="col-g">
                        <input type="text" id="email" name="mail" data-validate = "Debes escribir tu email para que podamos contestarte." placeholder="Eg. pablito@clavounclavito.com...">
                    </div>
                    <!-- Asunto -->
                    </div>
                    <div class="fila">
                    <div class="col-p">
                        <label for="country">Asunto</label>
                    </div>
                    <div class="col-g">
                        <select id="country" name="country">
                        <option value="contrato">Quiero contrataros.</option>
                        <option value="trabajo">Quiero trabajar con vosotros.</option>
                        <option value="otros">Otros</option>
                        </select>
                    </div>
                    <!-- Consulta -->
                    </div>
                    <div class="fila">
                    <div class="col-p">
                        <label for="subject">Escribe tu consulta, somos todo oídos: </label>
                    </div>
                    <div class="col-g">
                        <textarea id="subject" name="subject" data-validate = "Debes escribir algo para que nuestros duendes puedan enviar tu consulta." placeholder="Empieza aquí.." style="height:200px"></textarea>
                    </div>
                    <!-- Botón enviar -->
                    </div>
                    <div class="fila">
                    <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
            
            <!-- Contenedor dirección postal -->
            <div class="direccion">
                <!-- Dirección -->
                <div class="postal">
                    <h2>!También puedes venir a visitarnos¡</h2>
                    <p>Estamos en algún lugar de Barcelona Nº55</p>
                    <p>CP: 08006  -  Barcelona</p>
                </div>
                <!-- Mapa con iframe -->
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23944.460391803077!2d2.16539477918407!3d41.394556559364474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a49816718e30e5%3A0x44b0fb3d4f47660a!2sBarcelona!5e0!3m2!1ses!2ses!4v1563462091572!5m2!1ses!2ses" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>
            
        </main>

    </div>
    <!-- Footer -->
    <?php include 'footer.php'; ?>

  <!-- Javascript personal -->
  <script type="text/javascript" src="./js/script.js"></script>
  <!-- JavaScript FontAwesome -->
  <script src="https://kit.fontawesome.com/a0d3b07a7a.js"></script>
</body>
</html>