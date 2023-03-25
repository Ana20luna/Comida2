<?php 


// if(isset($_SESSION['idcusuario'])==false){
  // header("Location:index.php");



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comidas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="imagenes/logo.ico" type="image/x-icon">
</head>

<body>
  <!-- menú -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light menu">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html"><img src="imagenes/logo.jpg" alt="Logo rich seasoning food"
          class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Menú">Nuestro Menú</a>
          <li class="nav-item">
            <a class="nav-link" href="#Servicios">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="consultaproductos.php">Consulta Productos</a>
          <li class="nav-item">
            <a class="nav-link" href="#Contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-danger " href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!"
              tabindex="-1">¡Haz tu pedido!</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

   

               <!--tabla para mostar los datos del usuario-->

               <div class="row ow-cols-1 row-cols-md-4 g-4 p-5" id="carta">
        <h2>Productos</h2>
        <div class="col">
            <?php
            include_once "conexion.php";
            //crear la conexión a la bd
            $conn = mysqli_connect($host, $user, $pw, $db);
            //crear una consulta a la base de datos
            $sql = "SELECT * FROM carta;";
            //preparar el array de resultados
            $resul = mysqli_query($conn, $sql);
            //estructura de loop para imprimir n datos while
            while ($row = mysqli_fetch_assoc($resul)) {
            ?>
      
            <div class="card">
                <?php echo "<img src='imagenes/" .$row['Imagen']."' class='Img responsive rounde Img'>".""?>

                <div class="card-body">
                    <h5 class="card-tittle"><?php echo $row['Producto']?></h5>
                    <p><span>$<?php echo $row['Precio']?></span></p>
                    <a href="https://wa.me/3043685787?text=%C2%BFDe%20qu%C3%A9%20te%20deseas%20antojar%20hoy%3F" class="btn btn-danger" target="_blank"> Pedir</a>              
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>


 
              
       

    <!--footer-->
    <footer class="cover">
    &copy;2023,Todos los derechos reservados Restaurante Rich seasoning foot, Crado por:<a href="#" target="_blank"> Ana Blandón</a>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>
 