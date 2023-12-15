
<?php include("../../templates/header.php"); ?>
<?php 
include("../../bd.php");
if($_POST){
  print_r($_POST);  
    //recoleccion de datos
    $cliente=(isset($_POST["cliente"])?$_POST["cliente"]:"");
    $detalles=(isset($_POST["detalles"])?$_POST["detalles"]:"");
    $compra=(isset($_POST["compra"])?$_POST["compra"]:"");
    $venta=(isset($_POST["venta"])?$_POST["venta"]:"");
    $libras=(isset($_POST["libras"])?$_POST["libras"]:"");
    $ganancias=(isset($_POST["ganancias"])?$_POST["ganancias"]:"");
    $usuario=(isset($_POST["usuario"])?$_POST["usuario"]:"");

        //preparar insercion
    $sentencia=$conexion->prepare("INSERT INTO tbl_ventas_pollo (cliente, pollodetalle, preciocompra, precioventa, cantlib, ganancias, idusuario)
    VALUES (:cliente, :detalles, :compra, :venta, :libras, :ganancias, :usuario)");

    //Asignando los valores de metodo post(del formulario)
    $sentencia->bindParam(":cliente", $cliente);
    $sentencia->bindParam(":detalles", $detalles);
    $sentencia->bindParam(":compra", $compra);
    $sentencia->bindParam(":venta", $venta);
    $sentencia->bindParam(":libras", $libras);
    $sentencia->bindParam(":ganancias", $ganancias);
    $sentencia->bindParam(":usuario", $usuario); 
    $sentencia->execute();
    header("Location:index.php");

}
?>
<br>   
   <h3>Factura Pollo</h3>
   <br>   
   <h4>
   <div class="card">
        <div class="card-header">
            Nueva Factura
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">

              <div class="mb-3">
                  <label for="T_rango" class="form-label">Cliente:</label>
                  <input type="text" class="form-control" name="cliente" id="cliente" placeholder="Cliente">
                </div>
              <div class="mb-3">
                  <label for="T_inicial" class="form-label">Detalles Pollo:</label>
                  <input type="text" class="form-control" name="detalles" id="detalles"  placeholder="Detalles del pollo">
                </div>
                <div class="mb-3">
                  <label for="T_inicial" class="form-label">Compra:</label>
                  <input type="number" class="form-control" name="compra" id="compra"  placeholder="Precio Compra">
                </div>
                <div class="mb-3">
                  <label for="T_final" class="form-label">Venta:</label>
                  <input type="number" class="form-control" name="venta" id="venta" placeholder="Precio Venta">
                </div>
                <div class="mb-3">
                  <label for="T_rango" class="form-label">Libras:</label>
                  <input type="number" class="form-control" name="libras" id="libras" placeholder="Cantidad de libras">
                </div>
                <div class="mb-3">
                  <label for="T_rango" class="form-label">Ganancias:</label>
                  <input type="number" class="form-control" name="ganancias" id="ganancia" placeholder="" readonly>
                </div>
                <div class="mb-3">
                  <label for="usuario" class="form-label">Usuario:</label>
                  <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="usuario" readonly value="<?php echo $_SESSION['usuario'];?>">
                </div>

                <button type="sumit" class="btn btn-success">Agregar</button>
              <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
        </div> 
        </div>         
            </form>
        </div>
        <div class="card-footer text-muted">
        </div>
    </div>

<br>
<br>

    <br><br>

    </h4>
    <script>
  const compraInput = document.getElementById('compra');
  const ventaInput = document.getElementById('venta');
  const gananciaInput = document.getElementById('ganancia');
  const librasInput = document.getElementById('libras');

  // Add event listeners to inputs
  compraInput.addEventListener('input', calcularRango);
  ventaInput.addEventListener('input', calcularRango);
  librasInput.addEventListener('input', calcularRango);

  // Function to calculate profit
  function calcularRango() {
    const compra = compraInput.valueAsNumber;
    const venta = ventaInput.valueAsNumber;
    const libras = librasInput.valueAsNumber;

    const ganancia = (venta - compra) * libras;

    // Display the profit in the 'gananciaInput'
    gananciaInput.value = ganancia;
  }

  // Event listener for the 'Calcular Ganancia' button
  document.getElementById('calcular').addEventListener('click', calcularRango);
</script>

<?php include("../../templates/footer.php"); ?>