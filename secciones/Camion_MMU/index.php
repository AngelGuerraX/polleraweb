
<?php include("../../templates/header.php"); ?>
<?php 
 
include("../../bd.php");

$var_usuario = $_SESSION['usuario'];
if(isset($_GET['txID'])){

   $txtID=(isset($_GET['txID'] ))?$_GET['txID']:"";

   $sentencia=$conexion->prepare("DELETE FROM tbl_ventas_pollo WHERE id=:id");
   $sentencia->bindParam(":id", $txtID);
   $sentencia->execute();
}

$sentencia=$conexion->prepare("SELECT * FROM tbl_ventas_pollo where idusuario=:usuario");
$sentencia->bindParam(":usuario", $var_usuario);
$sentencia->execute();
$lista_tbl_cargar_camion=$sentencia->fetchAll((PDO::FETCH_ASSOC));

?>
   <br/>
 
   <h2 style="color: black; font-size: 60px; text-align: center;"> Facturar Pollo </h2> 
   <div class="card">
      <div class="card-header">         
      <a name="" id="" class="btn btn-secondary"
          href="crear.php" role="button">
          Nueva Factura
        </a>
         
      </div>
      <div class="card-body">
      <div class="table-responsive-sm">
         <table class="table" id="tabla_id">
            <thead>
               <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Detalle</th>
                  <th scope="col">Compra</th>
                  <th scope="col">Venta</th>
                  <th scope="col">Ganancia</th>
                  <th scope="col">Lib.</th>
                  <th scope="col">Cliente</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Acciones</th>
               </tr>
            </thead>
            <tbody>
         <?php foreach ($lista_tbl_cargar_camion as $registro) { ?>

               <tr class="">
                  <td scope="row"><?php echo $registro['id']?></td>
                  <td scope="row"><?php echo $registro['pollodetalle']?></td>
                  <td scope="row"><?php echo $registro['preciocompra']?></td>
                  <td scope="row"><?php echo $registro['precioventa']?></td>
                  <td scope="row"><?php echo $registro['ganancias']?></td>
                  <td scope="row"><?php echo $registro['cantlib']?></td>
                  <td scope="row"><?php echo $registro['cliente']?></td>
                  <td scope="row"><?php echo $registro['autofecha']?></td>
                  <td><a class="btn btn-danger" href="javascript:borrar(<?php echo $registro['id']?>);" role="button">Eliminar</a></td>
               </tr>
         <?php } ?>
            </tbody>
         </table>
      </div>
      
      </div>
   </div>

   <script>

      function borrar(id){


         Swal.fire({
         title: '¿Quieres borrar el registro?',
         showCancelButton: true,
         confirmButtonText: 'Si, borrar'
         }).then((result) => {
         /* Read more about isConfirmed, isDenied below */
         if (result.isConfirmed) {
            window.location="index.php?txID="+id;
         }
         })

         //
      }

   </script>
   



<?php include("../../templates/footer.php"); ?>