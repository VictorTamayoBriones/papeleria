<?php require_once "../assets/includes/nav.php" ?>
</br>
<div class="container center" border-radius="55px" >
    <form action="" class="container">
            <div class="card-panel hoverable grey lighten-5">
                <div class="row">
                    <h3>Registrar</h3>
                
                    <div class="card-panel hoverable  col s12">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Nobre" name="nombre" required />
                        </div>
                    </div>

               
                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Código" name="codigo" required />
                        </div>
                    </div>
                
                    <div class="conatiner col s2"></div>
                
                    <div class="card-panel hoverable col s5">
                        <div className="input-field ">
                            <input className="container validate espacio" type="number" placeholder="Precio $" name="precio" required />
                        </div>
                    </div>
                

                
                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="number" placeholder="Stock" name="stock" required />
                        </div>
                    </div>
                
                    <div class="conatiner col s2"></div>
                
                    <div class="card-panel hoverable col s5">
                        <div className="input-field ">
                            <label for="Imagen" id="la">Imagen</label>
                            <input className="container validate" type="file" placeholder="Imagen" name="imagen" required />
                        </div>
                    </div>

                </div>
                <button class="btn-large center deep-blue hoverable " type="submit">Registrar Producto</button>
            </div>
        
    </form>
</div>
<?php require_once "../assets/includes/footer.php" ?>