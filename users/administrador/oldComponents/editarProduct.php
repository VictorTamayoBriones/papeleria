<?php require_once "../assets/includes/nav2.php" ?>
<?php require_once "../conexion.php" ?>

<?php if(isset($_SESSION['user_name'])) : ?>

<a href="adindex.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>
</br>
<?php if(isset($_GET['exito'])):?>
  <br>  <div class="alertaExito"><p>Modificación - Exitosa</p></div>
<?php endif; ?>
<div class="container center" border-radius="55px" >
    <form action="editle.php" method="POST" >
           
    <div class="card-panel hoverable grey lighten-5">
                    <h3>Editar</h3>
                        <h6> Para editar coloque el ID o el codigo del producto y llene los demás campos con el nuevo llenado </h6>
                        <div className="input-field ">
                            <input  className="container validate" type="number" placeholder="ID" name="ID2" required minlength="1" maxlength="60" pattern="[0-9]+"/>
                            </div>
                            <br>
                          
        </div>                  
    </form> 
     </div> 
    </div>
<?php endif; ?>

<?php  if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>


