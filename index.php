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

    <title>Inicio - The Happy Web Agency</title>
</head>
<body class="inicio">
    <!-- >**Inicio cabecera** -->
    <header>
        <h1>The Happy Web Agency</h1>
        <!-- Imagen con el logo de la compañía -->
        <img src="./img/flower 2.svg" alt="Logo The Happy Web Agency" title="The Happy Web Agency">
        <!-- Icono señal indicadora hacia abajo -->
        <a href="#principal"><i class="fas fa-angle-double-down fa-3x"></i></a>
    </header>

    <!-- Contenedor principal con el menú y el main -->
    <div id="principal">
        
        <!-- Menú de navegación -->
        <nav>
            <!-- Div contenedor de la imagen del menú -->
            <label for="patatas">
                <!-- Imagen con efecto en JavaScript -->
                <div class="imagen-patatas" onclick="myFunction(this)"></div>
            </label>
            <input type="checkbox" id="patatas">
            <!-- Lista de menú -->
            <ul class="menu">
                <li><a href="#">inicio</a></li>
                <li><a href="nosotros.php">nosotros</a></li>
                <li><a href="trabajos.php">trabajos</a></li>
                <li><a href="contacto.php">contacto</a></li>
            </ul>
        </nav>

        <!-- **Inicio sección principal** -->
        <main >
            <!-- Inicio contenedor de la estructura -->
            <div class="estructura">
                <!-- Frase motivadora de presentación -->
                <h2> <i class="fas fa-quote-left"></i> El diseño es donde la ciencia y el arte se equilibran, por eso Comic Sans nunca es una fuente aceptable. A menos que seas una niña de 8 años escribiendo un poema sobre  unicornios. <i class="fas fa-quote-right"></i> </h2>

                <!-- Inicio de la sección -->
                <section>
                    <!-- Artículo 1- Nosotros -->
                    <a href="nosotros.php" class="box-us">
                    <article>
                        <h3 class="centrado">Nosotros</h3> 
                    </article>
                    </a>

                    <!-- Artículo 2- Nuestros trabajos -->
                    <a href="trabajos.php"  class="box-work">
                    <article>
                        <h3 class="centrado">Nuestros trabajos</h3>
                    </article>
                     </a>    

                    <!-- Artículo 3- Contacto -->
                    <a href="contacto.php" class="box-contact">
                    <article >
                        <h3 class="centrado">Contacto</h3>
                    </article>
                    </a>
                </section>

            </div>  <!-- Final contenedor de la estructura -->
        </main>

    </div><!-- Final contenedor principal con el menú y el main -->
    <!-- Footer -->
    <?php include 'footer.php'; ?>

  <!-- Javascript personal -->
  <script type="text/javascript" src="./js/script.js"></script>
  <!-- JavaScript FontAwesome -->
  <script src="https://kit.fontawesome.com/a0d3b07a7a.js"></script>
</body>
</html>