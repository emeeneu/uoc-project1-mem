<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <title>MEM</title>
</head>
<body>
  <main>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="index.html">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="atletismo.html">Atletismo</a>
          <a class="nav-item nav-link" href="baloncesto.html">Baloncesto</a>
          <a class="nav-item nav-link" href="padel.html">Pádel</a>
          <a class="nav-item nav-link" href="futbol.html">Fútbol</a>
		  <a class="nav-item nav-link" href="patrocinadores.html">Patrocinadores</a>
        </div>
      </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 ratio2-1" src="https://images.unsplash.com/photo-1527527753602-fb58e749276a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ef70f382036e43544a8b3303363adb03&auto=format&fit=crop&w=3350&q=80" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://images.unsplash.com/photo-1536429776985-ed0601232918?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=afb6b5662a23cbad9ead174d118afc0e&auto=format&fit=crop&w=2650&q=80" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://images.unsplash.com/photo-1489358921548-9b3f69a1eb4a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0c7372d3a635bd3f9a2e4e2296feb84a&auto=format&fit=crop&w=2250&q=80" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div></br>
	<div>
	
	<?php
$email = $_POST["email"];

if(isset($_POST["email"]) && !empty($_POST["email"])) {
    
} else {
    echo"Debes introducir tu Email para suscribirte";
}

//Abrimos conexion
include("abre_conexion.php");

$sql = "INSERT INTO newsletter (email) VALUES ('$email')";

if (mysqli_query($conexion, $sql)){
    echo"Te has registrado correctamente</br></br><a href='index.html'>Volver</a>";
}else{
    echo"Error: " . $sql . "</br>" . mysqli_error($conexion);
}

//Cerramos la conexion 
include("cierra_conexion.php");
?>
	</div>
</main>
  <footer>
    <p>Sitio promocional de un evento de fin de semana para Little Events, SL.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
