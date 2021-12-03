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
    <div id="foto"><img id="foto" src="{{url_for('static', filename='img/img01.jpg')}}" width="120"></div>  
    <div>
<!--     <?php //if(!empty($user)): ?> -->
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

<!-- Inicia Sección -->

<section>
	

    
    <article>
    
        <table style="width:100%"> <tr>
            <th>Archivo Dicom</th>
            <th>Fecha y hora</th>
            <th>Estado del envio</th> 
          </tr>
          <tr>
            <td>1541021326_RX.dcm</td>
            <td>19/05/21 9:15pm</td>
            <td>                
            

            <form action="cliente_"  method="POST">
                <label for="image">Ingresa el archivo:</label>
                <input type="file" name="image"></br>
                <input type="submit" value="Enviar archivo"/>
            </form>


            </td>
          </tr>
          <tr>
            <td>125463152_TC.dcm</td>
            <td>18/05/21 9:15pm</td>
            <td>Error</td>
          </tr>
          <tr>
            <td>101451235_RX.dcm</td>
            <td>19/05/21</td>
            <td>En proceso</td>
          </tr>
        </table>
    
    </article>
    
</section>

<a href="diagnostico.php?variable=<?php echo $nom_archivo; ?>"></a>


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