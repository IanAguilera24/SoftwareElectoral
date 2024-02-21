<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Electoral</title>
    <link rel="stylesheet" href="resources/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" href="resources/icons/votar.png">
</head>

<body>
    <!-- contenido del header-->
    <header>
        <a href="#" class="brand">
            <img class="Escom" src="resources/icons/empresa.png" alt="LogoEmpresa">
            <img class="Ipn" src="resources/icons/votar.png" alt="LogoVotos">
        </a>
        <!--Contenido del navbar-->
        <nav class="menu">
            <div class="btn">
                <i class="fas fa-times close-btn"></i>
            </div>
            <ul class="options">
                <li><a href="#main-section">Inicio</a></li>
                <li><a href="#Info-section">Herramienta</a></li>
                <li><a href="#about-section">Nosotros</a></li>
                <li>
                    <div class="container" id="Ejer-section">
                        <div class="product-container">

                            <div class="product" data-name="p-2">
                                <h3>Iniciar Sesion</h3>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="btn">
            <i class="fas fa-bars menu-btn"></i>
        </div>
    </header>
    <!--Contenido del main-->
    <section class="section-main" id="main-section">
        <div class="container" id="Ejer-section">
            <h1>Software Electoral</h1>
            <p class="p-main"><br>
            


¡Bienvenido al Software Electoral Venustiano Carranza!


            </p>
            <div class="container" id="Ejer-section">
                <div class="product-container">

                    <div class="product" data-name="p-2">
                        <h3>Iniciar Sesion</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Descripcion e informacion-->
    <section class="section-two" id="Info-section">
        <h3><strong>Herramienta</strong></h3>
        <p><br>
       
        </p>
        <div class="box-container">
            <div class="box">
                <i class="fa fa-plus"></i>
                <h3>Conteo de votos</h3>
            </div>
            <div class="box">
                <i class="fas fa-home"></i>
                <h3>Actulizar Casillas</h3>
            </div>
            <div class="box">
                <i class="fas fa-users"></i>
                <h3>Funcionarios</h3>
            </div>
        </div>
    </section>
    <!--Galeria de ejercicios-->
    <section class="content price" id="about-section">
        <div class="container" id="Ejer-section">
            <h3 class="title">Nosotros</h3>
            <h4 class="subtitle">
   
            </h4>
            <div class="btn-home">
                <a href="#" class="btn-more-info">Saber mas</a>
            </div>
        </div>
    </section>
    <!--Preview de los ejercicios-->
    <div class="products-preview">
        <div class="preview" data-target="p-2">
            <i class="fas fa-times"></i>
            <h3>Iniciar Sesion</h3>
            <div class="lenguaje">Ingresa tus datos</div>
            <div class="center">
                <form action="procesar_login.php" method="post">

              
                  <div class="txt_field">
                    <input type="text" name="usuario" required>
                    <span></span>
                    <label for="usuario">Username</label>
                  </div>
                  
                  <div class="txt_field">
                  <input type="password" name="contrasena" required>
                    <span></span>
                    <label for="contrasena">Password</label>
                  </div>
                  <input type="submit" value="Login">
                </form>

              </div>

        </div>
    </div>
    <section class="section-two" id="music-section">
        <h3><strong>Secciones</strong></h3>
        <p>
       
        </p>
    </section>

    <footer class="footer-main">
        <div class="group1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img class="IpnFoot" src="resources/icons/empresa.png" alt="LogoIpn">
                        <img class="EscomFoot" src="resources/icons/votar.png" alt="LogoEscom">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>Software Electoral</h2>
                <p>Lorem</p>
                <p>Copyright</p>
            </div>
            <div class="box">
                <h2>Contacto</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa-brands fa-tiktok"></a>
                </div>
            </div>
        </div>
        <div class="group2">
            <small>&copy; 2024 <b>Software Electoral </b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>

</html>
<script src="js/homePage.js" defer></script>
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/0073addce8.js" crossorigin="anonymous"></script>