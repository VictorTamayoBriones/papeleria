let btnOtroPro = document.querySelector('#otroProducto');
let formulario = document.querySelector('form');
let colocar = document.querySelectorAll('.datos')[1];
let i = 1;
btnOtroPro.addEventListener('click',()=>{
    i++;
    //crear los nodos;
    let select = document.createElement('select');
    let op = document.createElement('option');
    let input = document.createElement('input');

    //atributos de los nodos
    select.setAttribute('id', 'productVentaName');
    select.setAttribute('name', 'productVentaName'+i);

    op.setAttribute('value', 'name'+i);
    op.innerText = "Nombre del producto";

    select.appendChild(op);

    input.setAttribute('type', 'number');
    input.setAttribute('placeholder', 'Cantidad del producto');
    input.setAttribute('id', 'productVentaCantidad');
    input.setAttribute('name', 'productVentaCantidad'+i);

    //agregar los nodos a la web
    colocar.appendChild(select);
    colocar.appendChild(input);
    

});