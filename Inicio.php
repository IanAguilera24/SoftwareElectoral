
<!DOCTYPE html>
<html>
<head>
<title>Software Electoral Venustiano Carranza</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="resources/css/style.css"> 
</head>
<body class="back_dark_color">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logo</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-dark-grey w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="resources/img/usuario.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Bienvenido, <strong>Usuario</strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Menu</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" id="percent"><i class="fa fa-users fa-fw"></i>  Inicio</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" id="percent"><i class="fa fa-bullseye fa-fw"></i>  Historial</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" id="percent"><i class="fa fa-eye fa-fw"></i>  Mapa</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" id="percent"><i class="fa fa-bullseye fa-fw"></i>  Porcentajes</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" id="percent"><i class="fa fa-eye fa-fw"></i>  Gráfica de barras</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" id="percent"><i class="fa fa-users fa-fw"></i>  Funcionarios recientes</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Acciones</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-padding-16" id="messages">
        <div class="w3-left"><i class="fa fa-plus w3-xxxlarge"></i></div>
        <div class="w3-clear"></div>
        <h4>Registro</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-padding-large" id="views">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>765</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Votos</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-padding-16" id="shares">
        <div class="w3-left"><i class="fa fa-refresh w3-xxxlarge"></i></div>
        <div class="w3-clear"></div>
        <h4>Casillas</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-padding-large" id="users">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>53</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Funcionarios</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      
      <div class="w3-auto">
        <h5>Historial</h5>
        <table class="w3-table  w3-dark-grey" id="percent">
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>Registro de votos</td>
            <td><i>hace 10 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>Casilla actualizada</td>
            <td><i>hace 15 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-yellow w3-large"></i></td>
            <td>Grafica Actualizada</td>
            <td><i>hace 17 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>Casilla actualizada</td>
            <td><i>hace 15 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>Registro de votos</td>
            <td><i>hace 10 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>Registro de votos</td>
            <td><i>hace 10 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-yellow w3-large"></i></td>
            <td>Grafica Actualizada</td>
            <td><i>hace 17 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>Casilla actualizada</td>
            <td><i>hace 15 mins</i></td>
          </tr>
        </table>
      </div>
    </div>
    <hr>
    <div class="image_position">
      <h5>Alcaldia</h5>
      <img src="resources/img/venustiano.jpg" alt="venustiano carranza alcaldia">
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Porcentajes</h5>
    <p>Partido 1</p>
    <div class="w3-grey" id="percent">
      <div class="w3-container w3-center w3-padding" style="width:23%" id="new_visitors">23%</div>
    </div>

    <p>partido 2</p>
    <div class="w3-grey" id="percent">
      <div class="w3-container w3-center w3-padding" style="width:32%" id="new_users">32%</div>
    </div>

    <p>Partido 3</p>
    <div class="w3-grey" id="percent">
      <div class="w3-container w3-center w3-padding" style="width:17%" id="bounce_rate">17%</div>
    </div>

    <p>partido 4</p>
    <div class="w3-grey" id="percent">
      <div class="w3-container w3-center w3-padding" style="width:28%" id="other_rate">28%</div>
    </div>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Partidos</h5>
    <table class="w3-table w3-hoverable w3-dark-grey" id="percent">
      <tr>
        <td>Partido 1</td>
        <td>23%</td>
      </tr>
      <tr>
        <td>Partido 2</td>
        <td>32%</td>
      </tr>
      <tr>
        <td>Partido 3</td>
        <td>17%</td>
      </tr>
      <tr>
        <td>Partido 4</td>
        <td>28%</td>
      </tr>
    </table><br>
    <button class="w3-button w3-dark-grey" id="percent">Actualizar tabla  <i class="fa fa-refresh"></i></button>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Grafica de Barras</h5>
    <div id="histogram"></div>
    <div class="pie-chart" id="pie-chart"></div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Funcionarios recientes</h5>
    <ul class="w3-ul w3-card-4 w3-dark-grey" id="percent">
      <li class="w3-padding-16" >
        <img src="resources/img/usuario_hombre.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Juan</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="resources/img/usuaria_mujer.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Emilia</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="resources/img/usuaria_mujer.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Ana</span><br>
      </li>
    </ul>
  </div>
  <hr>

  <!-- <div class="w3-container">
    <h5>Recent Comments</h5>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="resources/img/usuario.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>John <span class="w3-opacity w3-medium">Sep 29, 2014, 9:12 PM</span></h4>
        <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="resources/img/usuaria_mujer.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Bo <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>
  </div>-->
  <div class="w3-container w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third" id="demographic">
        <h5 class="w3-bottombar">Casillas</h5>
        <p>650</p>
      </div>
      <div class="w3-container w3-third" id="systems">
        <h5 class="w3-bottombar">Funcionarios</h5>
        <p>53</p>
      </div>
      <div class="w3-container w3-third" id="target">
        <h5 class="w3-bottombar">Votos</h5>
        <p>765</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-dark-grey">
    <h4>Contenido del pie</h4>
    <p>copyright</p>
  </footer>

  <!-- End page content -->
</div>

<script src="js/index.js"></script>
</body>
</html>