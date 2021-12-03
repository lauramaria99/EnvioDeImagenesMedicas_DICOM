<!-- <?php
  /* session_start();

  require 'database.php';

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


?>
 -->

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
    <div id="foto"><img id="foto" src="{{url_for('static', filename='img/img01.jpg')}}" width="120"></div> 
    <div>    
<!--         <?php //if(!empty($user)): ?> -->
        <pre>
        <h6> </h6>
        <h2>{{session['nombre']}}</h2>    
    </pre>
<!--         <?php //endif; ?> -->
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



<!-- Cierra parte Superior -->

<!-- Inicia Sección -->



<section>
	

    
    <article>
        <h1>Archivos DICOM para enviar </h1>
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
        <html>
            <head>
                <meta charset="utf-8">
                <title></title>
            </head>
            <body>
                
                <form action="/servidor_"  method="POST">
                    <label for="name">Ingresa el archivo:</label>
                    <input type="file" name="name"></br>
                    <input type="submit" value="Enviar archivo"/>
                </form>

                
            </body>
            </html> 
    
    
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