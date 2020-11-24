 
<br><img src="assets/images/utt.png"><img src="assets/images/utt2.jpg" style="position: absolute; right: 650;"><img src="assets/images/utt.png" style="position: absolute; right: 0;">
<br>
<br>
<br>
<br><br><br>
<?php

$conexion= mysqli_connect("localhost","root","","papeleria");
$consulta="SELECT DEFINICION()";
$resultado=mysqli_query($conexion, $consulta);
$fila= mysqli_fetch_array($resultado);
settype($fila, 'array');
$user = mysqli_fetch_assoc($resultado);


echo("<br>MSJ:<br><br> ".$fila[0]);
?>
<br>
<br>
<br>


<br><img src="assets/images/utt.png"><img src="assets/images/utt2.jpg" style="position: absolute; right: 650;"><img src="assets/images/utt.png" style="position: absolute; right: 0;">
<br>
<br>
<br><br><br>
<br>
<br>

<a href="users/loginAd.php">
<h2><center><font color="RED">PAPELERIA TLAXCALTECA</font></center></h2>
</a>

