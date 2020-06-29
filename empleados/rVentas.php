<?php require_once "../assets/includes/nav.php" ?>
    <div class="resgisVen">
        <form action="regisVen.php" id="regisVentas">
            <p>Registrar ventas</p>

            <input type="text" id="codigo" placeholder="    codigo">

            <input type="text" id="nombrePro" placeholder=" Nombre del producto">

            <input type="text" id="costo" placeholder="precio">

            <input type="text" id="cantidad" placeholder="  Cantidad">

            <input type="text" id="folio" value="0001">

            <input type="button" value="Agregar producto">

            <input type="button" value="Registrar venta">
        </form>
    </div>
<?php require_once "../assets/includes/footer.php" ?>