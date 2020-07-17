<?php require_once "../assets/includes/navlogin.php" ?>
    <div class="resgisVen">
        <form action="regisVen.php" id="regisVentas">
            <p class="titulo">Registrar ventas</p>

            <input class="inpre" type="text" id="codigo"    placeholder="   codigo del producto" required minlength="3" maxlength="60" pattern="[0-9]+">

            <input class="inpre" type="text" id="nombrePro" placeholder="   Nombre del producto" required minlength="3" maxlength="60" pattern="[a-zA-Z0-9]+">

            <input class="inpre" type="text" id="costo"     placeholder="   precio" minlength="3" required maxlength="60" pattern="[0-9]+">

            <input class="inpre" type="text" id="cantidad"   placeholder="  Cantidad" minlength="3" required maxlength="60" pattern="[0-9]+">

            <br>
            <br>
            <label class="f" for="folio">Folio</label>
            <input  class="inpre" type="text" id="folio" value="    0001" required minlength="3" maxlength="60" pattern="[0-9]+">

            <br>
            <input class="insub1" type="button" value="Agregar producto">

            <input class="insub2" type="button" value="Registrar venta">
        </form>
    </div>
    <a href="epindex.php">
<img src="../assets/images/l.png" style="height:100px; width:100px">
    </a>
<?php require_once "../assets/includes/footerlogin.php" ?>