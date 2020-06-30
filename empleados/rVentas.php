<?php require_once "../assets/includes/nav.php" ?>
    <div class="resgisVen">
        <form action="regisVen.php" id="regisVentas">
            <p class="titulo">Registrar ventas</p>

            <input class="inpre" type="text" id="codigo"    placeholder="   codigo del producto">

            <input class="inpre" type="text" id="nombrePro" placeholder="   Nombre del producto">

            <input class="inpre" type="text" id="costo"     placeholder="   precio">

            <input class="inpre" type="text" id="cantidad"   placeholder="  Cantidad">

            <br>
            <br>
            <label class="f" for="folio">Folio</label>
            <input  class="inpre" type="text" id="folio" value="    0001">

            <br>
            <input class="insub1" type="button" value="Agregar producto">

            <input class="insub2" type="button" value="Registrar venta">
        </form>
    </div>