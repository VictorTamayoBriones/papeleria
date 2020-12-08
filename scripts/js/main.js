var i = 1;
function plus(){
    i++;
    console.log(i);

    var formulario = document.getElementsByClassName('form');

    //crear los nodos
   
    //divs para el input codigo
    var divPrincipal = document.createElement('div');
    var divSecundario = document.createElement('div');

    //divs para el input name
    var divPrincipal1 = document.createElement('div');
    var divSecundario1 = document.createElement('div');

    //divs para el input precio
    var divPrincipal2 = document.createElement('div');
    var divSecundario2 = document.createElement('div');

    //divs para el input precio
    var divPrincipal3 = document.createElement('div');
    var divSecundario3 = document.createElement('div');

    //div de separacion
    var divSeparacion = document.createElement('div');

    //inputs del formulario
    var inputCode = document.createElement('input');
    var inputName = document.createElement('input');
    var inputPrecio = document.createElement('input');
    var inputCantidad = document.createElement('input');

    //unir los nodos
    divPrincipal.appendChild(divSecundario);
    divSecundario.appendChild(inputCode);

    divPrincipal1.appendChild(divSecundario1);
    divSecundario1.appendChild(inputName);

    divPrincipal2.appendChild(divSecundario2);
    divSecundario2.appendChild(inputPrecio);

    divPrincipal3.appendChild(divSecundario3);
    divSecundario3.appendChild(inputCantidad);

    //añadir atributos

    //atributos del div principal
    divPrincipal.setAttribute('class', 'card-panel hoverable  col s12');

    divPrincipal1.setAttribute('class', 'card-panel hoverable  col s12');

    divPrincipal2.setAttribute('class', 'card-panel hoverable  col s5');

    divSeparacion.setAttribute('class', 'conatiner col s2');

    divPrincipal3.setAttribute('class', 'card-panel hoverable  col s5');


    //atributos del div secundario
    divSecundario.setAttribute('className', 'input-field ');

    divSecundario1.setAttribute('className', 'input-field ');

    divSecundario2.setAttribute('className', 'input-field ');

    divSecundario3.setAttribute('className', 'input-field ');

    
    //atributos del input
    inputCode.setAttribute('className', 'container validate');
    inputCode.setAttribute('type', 'text');
    inputCode.setAttribute('placeholder', 'Coidgo de producto');
    inputCode.setAttribute('name', 'codigo'+i);
    inputCode.setAttribute('id', 'codigo'+i);

    inputName.setAttribute('className', 'container validate');
    inputName.setAttribute('type', 'text');
    inputName.setAttribute('placeholder', 'Nombre de producto');
    inputName.setAttribute('name', 'nombre'+ i);
    inputName.setAttribute('id', 'nombre'+ i);
    
    inputPrecio.setAttribute('className', 'container validate');
    inputPrecio.setAttribute('type', 'text');
    inputPrecio.setAttribute('placeholder', 'Precio');
    inputPrecio.setAttribute('name', 'precio'+ i);
    inputPrecio.setAttribute('id', 'precio'+ i);

    inputCantidad.setAttribute('className', 'container validate');
    inputCantidad.setAttribute('type', 'text');
    inputCantidad.setAttribute('placeholder', 'Cantidad');
    inputCantidad.setAttribute('name', 'cantidad'+ i);
    inputCantidad.setAttribute('id', 'cantidad'+ i);

    //agregar el elemento al documento

    var row = document.getElementById('row');

    

    row.appendChild(divPrincipal);

    row.appendChild(divPrincipal1);

    row.appendChild(divPrincipal2);

    row.appendChild(divSeparacion);

    row.appendChild(divPrincipal3);
    

    //posicionamiento
    //var padre = formulario[0].parentNode; //saber el padre de un elemento
    //var hola = formulario[0].parentNode;
    //hola.insertBefore(divPrincipal, formulario[4]);
    
}

