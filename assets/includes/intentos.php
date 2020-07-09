<?php 

    function mostrarIntentos(){
        

        if(isset($_GET['error'])){
            session_start();
            $_SESSION['errIntento'];

            
        }
        
        
    
    }
    

?>