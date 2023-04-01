<?php
include_once "conexion.php";
$conn = mysqli_connect($host,$user,$pw,$db);

if(isset($_SESSION['idusuario'])==false){
  header("Location:index.php");
}
//borrar cartaz
if(isset($_REQUEST['idBorrar'])){
    $idlibro=mysqli_real_escape_string($conn,$_REQUEST['idBorrar']??'');
    //instruccion para eliminar con lenguaje sql
    $sql="DELETE FROM carta WHERE idProducto='".$idProducto."';";
    $result=mysqli_query($conn,$sql);
    if($result){
      ?>
      <div class="alert alert-success contents float-right" role="alert">
        Producto Eliminado!!     
       </div>
       <?php
    }else{
      ?>
       <div class="alert alert-warning float-right" role="alert">
        Error en eliminar Producto!! <?php echo $mysqli_error($conn);?>    
       </div>
       <?php
    }
  }
  ?>

?>

    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Productos</h1>
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
            $sql = "SELECT * FROM carta;";
            //preparar el array de resultados
            $resul = mysqli_query($conn, $sql);
            //estructura de loop para imprimir n datos while
            while ($row = mysqli_fetch_assoc($resul)) {
            ?>
      
            <div class="card">
                <?php echo "<img src='" .$row['Imagen']."' width='100%' heigth='380'>";""?>
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

 