<?php session_start(); ?>
<html>

<?php include("includes/head.php") ?>
<body class="center">
    <div class="rotulo center">
        ** Bienvenido **
    </div>
    
    <?php
    if(isset($_SESSION['valid'])) {         
        include("connection.php");                  
        $result = mysqli_query($mysqli, "SELECT * FROM usuarios where id=$iduser");
    ?>
                
        <?php echo $_SESSION['nombre'] ?>
        <?php echo $_SESSION['apellido_uno'] ?> 
        <?php echo $_SESSION['apellido_dos'] ?> 
        &middot;
        <a href='logout.php'>Cerrar Sesion</a><br/>
        <img src="assets/img/kolbi.png" width="200px" class="float-right">

 
<form action="editado.php" class="form" method="POST" style="margin: 10px">


    <h3 style="text-align: left; color: gray; padding-top: 20px">EDITAR INFORMACIÓN</h3>
<ul class="form-style-1">

<?php

    $user_id=null;
    $busquedaUnica= "select * from planes where id = ".$_GET["id"];
    $query = $mysqli->query($busquedaUnica);
    $bu = null;
    if($query->num_rows>0){
    while ($r=$query->fetch_object()){
      $bu=$r;
      break;
    }
      }
?>

<style type="text/css">
    li, body{
        list-style: none;
        text-align: left;
        font-weight: bold;
        font-size: 30px
    }
</style>

    <li>
        <label>Identificación<span class="required">*</span></label>
        <input style="width: 50%" type="text" name="cedula" class="form-control field-long" value="<?php echo  $bu->cedula; ?>" /> 
    </li>

    <li>
        <label>Pedido <span class="required">*</span></label>
        <input style="width: 50%" type="text" name="pedido" class="form-control field-divided" value="<?php echo $bu->pedido; ?>" /> 
    </li>
    
   
    <li>
        <label>Permanencia <span class="required">*</span></label>
        <select style="width: 50%" class="form-control field-select" name="permanencia">
            <option><?php echo $bu->permanencia; ?></option>
            <option>12 Meses</option>
            <option>24 Meses</option>
            <option>36 Meses</option>
        </select>
    </li>


      
    <li>
        <label>Condición <span class="required">*</span></label>
        <select style="width: 50%" class="form-control field-select" name="terminal">
            <option><?php echo $bu->terminal; ?></option>
            <option>Terminal Asociado</option>
            <option>Sin Terminal Asociado</option>
        </select>
    </li>
    <li>
        <label>Agencia </label>
        <input style="width: 50%" type="text" name="agencia" class="form-control field-long"  value="<?php echo $bu->agencia; ?>" /> 
    </li>
    <li>
        <label>Notas <span class="required">*</span></label>
        <textarea style="width: 50%" name="notas" class="form-control field-long field-textarea" > <?php echo $bu->notas; ?> </textarea>
    </li>

    <li>
        <br>
        <input type="TEXT" name="id" value="<?php echo $bu->id; ?>">
        <input type="TEXT" name="mes_id" value="<?php echo $bu->mes_id; ?>">
        <input type="submit" value="Guardar" class="btn btn-info" />
    </li>
</ul>
</form>




</body>
</html>


    <?php   
    } else{
        print("<br> <img src='assets/img/kolbi.png'>");
        include("includes/btns.php");
    }
    ?>
    <div class="footer">
        <i>Software creado por David Madriz  &middot; &middot; &middot; DISOW Company</i>
    </div>
</body>
</html>
