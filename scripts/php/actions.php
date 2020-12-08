<?php
var_dump($_POST);

    if(isset($_GET['user'])){
        require_once "../../conexion.php";
        
        $dato=$_GET['user'];

        if(isset($_POST['ver'])){
            //ver al usuario
            header("Location: ../../views/userView.php?user=$dato");
        }elseif(isset($_POST['update'])){
            //actualizar al usuario
            header("Location: ../../views/userUpdate.php?user=$dato");
        }elseif(isset($_POST['delete'])){
            //borrar al usuario
            $borrar= "DELETE FROM usuarios where id=$dato";
            $resultado= mysqli_query($db,$borrar);
            header("Location: ../../views/usersView.php");
        }elseif(isset($_POST['updateUser'])){ 

            $tipo = $_POST['userType'];
            $name = $_POST['userName'];
            $lN = $_POST['userLsName'];
            $mail = $_POST['email'];
            $pass = $_POST['pass'];
            $brith = $_POST['userBrith'];
            $phone = $_POST['userPhone'];
            $adrees = $_POST['userAdrees'];

            if($tipo && $name && $lN && $mail && $pass && $brith && $phone && $adrees && !empty($tipo) && !empty($name) && !empty($lN) && !empty($mail) && !empty($pass) && !empty($brith) && !empty($phone) && !empty($adrees) ){

                $modi= "UPDATE usuarios SET tipo='$tipo',nombre='$name',apellido='$lN',email='$mail',password='$pass',brith='$brith',phone='$phone',adrees='$adrees'WHERE id='$dato';";
                $resultado= mysqli_query($db, $modi);
                if($resultado){
                    header("Location: ../../views/userView.php?user=$dato");
                }else{
                    echo"Error";
                }
            }

        }
        
    }

    if(isset($_GET['producto'])){
        require_once "../../conexion.php";
        $productoId = $_GET['producto'];
        if(isset($_POST['update'])){
            header("Location: ../../views/productEdit.php?producto=$productoId");   
        }else if(isset($_POST['delete'])){
            $borrar= "DELETE FROM productos where id=$productoId";
            $resultado= mysqli_query($db,$borrar);
            if($resultado){
                header("Location: ../../views/productView.php");
            }
        }
    }

?>