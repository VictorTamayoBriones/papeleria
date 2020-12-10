let buscar=document.getElementById("buscar")
let busqueda=document.querySelectorAll('#name');
let aux=Array.prototype.forEach;

buscar.addEventListener("keyup",function(e){

    let valor=this.value;

    aux.call(busqueda,function(e){

        if(-1==e.innerHTML.toLowerCase().search(valor.toLowerCase())){
            e.parentNode.setAttribute('class', 'ocultar');
        }else{
            e.parentNode.style.display="";
        }
        
        if(valor == ""){
            e.parentNode.removeAttribute('class', 'ocultar');
            e.parentNode.setAttribute('class', 'cardVenta');
        }
        
    })},!1);