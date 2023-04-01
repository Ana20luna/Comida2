<?php
include_once "conexion.php";
$conn = mysqli_connect($host,$user,$pw,$db);

if(isset($_SESSION['idusuario'])==false){
  header("Location:index.php");
}
//borrar libro
if(isset($_REQUEST['idBorrar'])){
    $idlibro=mysqli_real_escape_string($conn,$_REQUEST['idBorrar']??'');
    //instruccion para eliminar con lenguaje sql
    $sql="DELETE FROM Usuario WHERE idusuario='".$idusuario."';";
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
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Usuario</h1>
                </div><!-- /.col -->

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- tabla para mostar los datos de usuarios -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    
                                    <th>Precio</th>
                                    <th>Imagen</th>
                                   
                                    <th>Crear Producto <a href="panel.php?modulo=crearproducto" title="Crear Producto"><i
                                                class="fas fa-user-plus"></i></a>
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                    include_once 'conexion.php';
                                    $conn=mysqli_connect($host,$user,$pw,$db);
                                    $sql="SELECT * FROM Usuario;";
                                    $result=mysqli_query($conn,$sql);
                                    
                                    //estructura de bucle while
                                    while($row=mysqli_fetch_array($result)){
                                      
                                    
                                    ?>
                               <tr>
                            <td><?php echo $row['nombre'] ?> </td>                  
                           
                            <td><?php echo $row['precio'] ?></td>
                            <td><?php echo "<img src='".$row['imagen']."' width='50' >";"" ?></td>                 
                            <td>
                                <a href="panel.php?modulo=editarLibro&idlibro=<?php echo $row['idusuario']?>"style="margin-right:5px"><i class="fas fa-book-reader" title="Editar Usuario"></i></a>
                                <a href="panel.php?modulo=Usuario&idBorrar=<?php echo $row['idusuario']?>" style="margin-right:5px" class="fas fa-ban borrarProducto" title="Borrar Producto"></a>
                                
                            </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>

                        </table>
            </div>
          </div>
        </div>            
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->