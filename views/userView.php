<?php require_once "../assets/includes/nav.php" ?>
<?php require_once "../conexion.php" ?>

<?php 
    $id=$_GET['user'];

    $sql = "SELECT * FROM usuarios  WHERE id = $id;";
    $query = mysqli_query($db, $sql);
    $rows = mysqli_num_rows($query);
    $user = mysqli_fetch_assoc($query);
?>
<div class="user-container">
    <div class="container-card">
        <div class="userCard">
            <div class="texto">
                <p> <strong>ID:</strong>  <?=$user['id']?></p>
                <p> <strong>Puesto:</strong>  <?=$user['tipo']?></p>
                <p> <strong>Nombre:</strong>   <?=$user['nombre']?></p>
                <p> <strong>Apellido:</strong>  <?=$user['apellido']?></p>
                <p> <strong>Email:</strong>  <?=$user['email']?></p>
                <p> <strong>Nacimiento:</strong>  <?=$user['brith']?></p>
                <p> <strong>Dirección:</strong>  <?=$user['adrees']?></p>
                <p> <strong>Inicio:</strong>  <?=$user['fecha']?></p>
            </div>
            <div class="image">
                <img src="../<?=$user['userImage']?>" alt="<?=$user['nombre']?>">
            </div>
        </div>
    </div>
</div>