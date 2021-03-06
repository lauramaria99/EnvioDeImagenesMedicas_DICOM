<!-- <?php
  /* session_start();

  require '.\app\templates\database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, name, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  } */
?> -->

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Propiedades de Enlace</title>
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="{{url_for('static', filename='css/estilo.css')}}">


</head>

<body>


<!-- Inicia Cabezote -->

<header>

    <div id="logo">ImgMedic</div>
    <div id="foto"><img id="foto" src="{{url_for('static', filename='img/img01.jpg')}}"></div> 
    <div>
   <!--  <?php //if(!empty($user)): ?> -->
        <pre>
        <h6> </h6>
        <h2>{{session['nombre']}}</h2> 
        </pre>
    <!-- <?php //endif; ?> -->
    
    </div>
    
</header>

<!-- Cierra Cabezote -->

<!-- Inicia Barra de Navegación -->
<nav>

	<ul>
    
        <a href="/inicio"><li class="botones">Inicio</li></a>
        <a href="/envio"><li class="botones">Envío de imágenes</li></a>
        <a href="/estado"><li class="botones">Estado de Envío</li></a>
        <a href="/diagnostico"><li class="botones">Recepcion de diágnostico</li></a>
  
    </ul>

</nav>

<!-- Cierra Barra de Navegación -->


<!-- Inicia parte Superior -->

<!--<div id="top">

	<ul>
    	<li>
        	<img src="img01.jpg" width="100">
        	<h1>Lorem Ipsum</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            
        </li>
        
        <li>
        	<img src="img02.jpg" width="100">
        	<h1>Lorem Ipsum</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </li>
        
        <li>
        	<img src="img03.jpg" width="100">
        	<h1>Lorem Ipsum</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </li>
   </ul>
    
</div>-->

<!-- Cierra parte Superior -->

<!-- Inicia Sección -->

<section>
	

    
    <article>
    
    	<h1>Bienvenido a ImgMedic </h1>
        <h3>Plataforma de imágenes diágnosticas </h3>
    	<p><img src="{{url_for('static', filename='img/foto.png')}}" width="250" ></p>
        <br>
    
    </article>
    
    
</section>

<!-- Cierra Sección -->

<nav>

	<ul>
        <a href="/logout"><li class="boton">Salir del perfil</li></a>
    </ul>

</nav>





<!-- Inicia Pie de Página -->

<footer>

	&copy; Todos los derechos reservados.
    <!--http://www.ascii.cl/htmlcodes.htm-->
</footer>

<!-- Cierra Pie de Página -->


</body>
</html>
