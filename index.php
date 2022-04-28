<!DOCTYPE html>
<html>
<head>
<title>Medic app</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* background de la pagina */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("images/fondomedicina.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><i class="fa fa-home"></i>LOGO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">¿qué es?</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-users"></i> Equipo</a>
      <a href="./login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Inicia Sesión</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">¿qué es?</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button"> Equipo</a>
  <a href="./login.php" onclick="w3_close()" class="w3-bar-item w3-button"> Inicia Sesión</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-black" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Medicapp</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Bienvenido a nuestra aplicacion web</span><br>
    <span class="w3-large">Registrate para darle uso</span>
    <p><a href="signup.php" class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Registrarse</a></p>
  </div> 
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">Sobre la aplicacion</h3>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsabilidad</p>
      <p>atender de manera responsable a todos los usuarios que utilicen nuestro aplicacion web.</p>
    </div>
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">Equipo</h3>
  <p class="w3-center w3-large">Miembros del equipo 4 </p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/brandon.jpg" alt="Brandon" style="width:100%">
        <div class="w3-container">
          <h3>BRANDON ENRIQUE EROZA TORRES</h3>
          <p class="w3-opacity">Lic. en ciencias de la computacion</p>
          <p>Estudiante de la Benemerita Universidad Autonoma de puebla.</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/Abad.jpg" alt="Abad" style="width:100%">
        <div class="w3-container">
          <h3>ABAD VELAZQUEZ FUENTES</h3>
          <p class="w3-opacity">Lic. en ciencias de la computacion</p>
          <p>Estudiante de la Benemerita Universidad Autonoma de puebla.</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/Heriberto.jpg" alt="Heriberto" style="width:100%">
        <div class="w3-container">
          <h3>HERIBERTO HERNANDEZ MORENO</h3>
          <p class="w3-opacity">Lic. en ciencias de la computacion</p>
          <p>Estudiante de la Benemerita Universidad Autonoma de puebla.</p>
        </div>
      </div>
    </div>
  </div>
</div>


 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>