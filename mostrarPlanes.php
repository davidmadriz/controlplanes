<?php session_start(); ?>


<?php session_start(); ?>
<html>

<?php include("includes/head.php") ?>
<body class="center">
    <div class="rotulo center">
        ** Bienvenido **
    </div>
    



<?php include("includes/head.php"); ?>
<?php include("connection.php"); ?>


<?php
$user_id=null;
$sql1= "select * from planes where id = ".$_GET["id"];
$query = $mysqli->query($sql1);
$cliente = null;
if($query->num_rows>0){
while ($c=$query->fetch_object()){
  $cliente=$c;
  break;
}
  }
?>
<body style="text-align: left !important"> <br><br> 


<div class="form2">
      <div style="margin: 20px; padding-bottom: 20px;" >
    <h3>Información del Plan </h3>

          <a href="actualizarPlan.php?id=<?php echo $cliente->id;?>">Actualizar</a>           
        <hr>
    <img src="assets/img/kolbi.png" width="200px" class="float-right" style="margin: 0px;">
        <table  width="50%">
           
            <tbody>
            <tr>
                <td class="td1">Pedido</td>
                <td class="td2"><?php echo $cliente->pedido; ?> 
                </td>
            </tr>

            <tr>
                <td class="td1">Identificación</td>
                <td class="td2"><?php echo $cliente->cedula; ?></td>
            </tr>

            <tr>
                <td class="td1">Permanencia</td>
                 <td class="td2"><?php echo $cliente->permanencia; ?>
                </td>
            </tr>

            <tr>
                <td class="td1">Terminal</td>
                <td class="td2"><?php echo $cliente->terminal; ?></td>
            </tr>

              <tr>
                <td class="td1">Agencia de Tramite</td>
                <td class="td2"><?php echo $cliente->agencia ; ?></td>
            </tr>

            <tr>
                <td class="td1">Notas</td>
                <td class="td2"><?php echo $cliente->notas ; ?></td>
            </tr>

          
            </tbody>
        </table>



    </div>
</div> 


</body>
</html>


<style type="text/css">
    .td1{
        color: black;
        font-weight: bold;
    }
    .td1, .td2{
        font-size: 25px;
        padding: 10px;
    }
</style>