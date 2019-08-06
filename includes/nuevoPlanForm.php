<form style="margin: 20px;" name="nuevoPlan" method="POST" action="">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Cedula Cliente</label>
    <div class="col-sm-10">
      <input type="number" class="form-control col-sm-10" name="cedula" placeholder="601230567">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Pedido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control col-sm-10" name="pedido" placeholder="KO-1235666">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Permanencia</label>
    <div class="col-sm-10">
     <select class="col-sm-10 form-control form-control-lg" name="permanencia">
      <option>12 Meses</option>
      <option>24 Meses</option>
      <option>36 Meses</option>
    </select>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Agencia</label>
    <div class="col-sm-10">
      <input type="text" class="form-control col-sm-10" name="agencia">
    </div>
    </div>


     <div class="form-group row">
    <label class="col-sm-2 col-form-label">Condición</label>
    <div class="col-sm-10">
     <select class="col-sm-10 form-control form-control-lg" name="terminal">
      <option>Terminal Asociado</option>
      <option>Sin Terminal Asociado</option>
    </select>
    </div>
    </div>


 <div class="form-group row">
    <label class="col-sm-2 col-form-label">Observaciones</label>
    <div class="col-sm-10">
      <textarea  class="form-control col-sm-10" name="notas" > </textarea>
    </div>
    </div>
    <br><br>
  <input type="submit" name="submit" value="Registrar" class="btn btn-warning btn-2 " style="width: 40%">




  <?php $mes_id =  $_GET['id'] ?>

      <input type="hidden" class="form-control" name="mes_id" value='<?php echo $mes_id ?>'>



</form>










<style type="text/css">
  .red{
  color: white !important;
  background-color: red !important;
  margin-left: 17px;
  padding: 15px !important;
  border-radius: 4px !important;
}

 .green{
  color: white !important;
  background-color: green !important;
  margin-left: 17px;
  padding: 15px !important;
  border-radius: 4px !important;
}

</style>



<?php
include("connection.php");

if(isset($_POST['submit'])) {
  $cedula= $_POST['cedula'];
  $pedido = $_POST['pedido'];
  $permanencia = $_POST['permanencia'];
  $terminal = $_POST['terminal'];
  $agencia = $_POST['agencia'];
  $notas = $_POST['notas'];
  $mes_id = $_POST['mes_id'];





  if($cedula== "" || $pedido == "" || $permanencia == "" ||  $terminal == "" || $agencia == "" || $notas == "" ||  $mes_id== ""  ) {
    print( "
          <div class='alert alert-danger' role='alert'>
  <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
  <span class='sr-only'>Error:</span>
  Debe completar todos los datos requeridos para poder realizar el registro.
</div>
 <br/> <br/>");
  } else {


    mysqli_query($mysqli, "INSERT INTO planes (cedula, pedido, permanencia, terminal, agencia, notas, mes_id) VALUES('$cedula', '$pedido', '$permanencia', '$terminal', '$agencia', '$notas', '$mes_id')")
      or die("No se puede concluir con la insercion de datos.");
      
   print( "
          <div class='alert alert-warning ' role='alert'>
  <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
  <span class='sr-only'>Error:</span>
  Registro Correcto.
</div>
 <br/> <br/>");
  }
} else {
?>

<?php
}
?>
</body>
</html>
