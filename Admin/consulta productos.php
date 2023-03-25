<?php
include_once "conexion.php"
$conn = mysqli_connect($host,$user,$pw,$db)

if(isset($_SESSION['idcarta'])==false){
  header("Location:index.php");
}


?>

    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Usuarios</h1>
          </div><!-- /.col -->
  
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="content-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

               <!--tabla para mostar los datos del usuario-->

               <div class="row ow-cols-1 row-cols-md-4 g-4 p-5" id="productos">
        <H2>Productos</H2>
        <div class="col">
            <?php
            include_once "conexion.php";
            //crear la conexión a la bd
            $conn = mysqli_connect($host, $user, $pw, $db);
            //crear una consulta a la base de datos
            $sql = "SELECT * FROM productos;";
            //preparar el array de resultados
            $resul = mysqli_query($conn, $sql);
            //estructura de loop para imprimir n datos while
            while ($row = mysqli_fetch_assoc($resul)) {
            ?>
      
            <div class="card">
                <?php echo "<img src='imagenes/" .$row['imagen']."' width='100%' heigth='380'>";""?>
                <div class="card-body">
                    <h5 class="card-tittle"><?php echo $row['nombreProducto']?></h5>
                    <p><span>$<?php echo $row['precio']?></span></p>
                    <a href="https://wa.me/3043685787?text=%C2%BFDe%20qu%C3%A9%20te%20deseas%20antojar%20hoy%3F" class="btn btn-danger" target="_blank"> Pedir</a>              
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>


                include_once "conexion.php";
                $conn=mysqli_connect($host,$user,$pw,$db);
                $sql="SELECT * FROM carta;";
                $result=mysqli_query($conn,$sql);

                //estructura de bulce while

                while ($row=mysqli_fetch_array($result)) {

                  ?>
                  <tr>
                    <td><?php echo $row['Producto']?></td>
                    <td><?php echo $row['Precio']?></td>
                    <td><?php echo $row['Imagen']?></td>
                    <td> <a href="panel.php?modulo=editarUsuario&idcarta=<?php echo $row['idcliente']?>"
                    style="margin-right:10px;"title="Editar Usuario">Editar Usuario</a> 

                    <a href="panel.php?modulo=usuarios&idborrar=<?php echo $row['idcarta']?>"
                    style="margin-right:10px;"title="Borrar Usuario">Borar Usuario</a> 
                  </td>
                  </tr>
                  <?php
                   }
                  ?>


               </table>
             
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 