<br><br>
<?php 

	print('<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-2" data-toggle="modal" data-target="#exampleModalCenter2">
   Inicio de Sesion 
</button>

<button type="button" class="btn btn-warning btn-2" data-toggle="modal" data-target="#exampleModalCenter">
  Registro de usuario
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ')?>


		<?php include("login.php"); ?>
        	

        <?php print('

        	</div>
      
    </div>
  </div>
</div>')

	 ?>

<?php 
	print('<!-- Button trigger modal -->

<br>
<br>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ')?>


		<?php include("register.php"); ?>
        	

        <?php print('

        	</div>
      
    </div>
  </div>
</div>')?>