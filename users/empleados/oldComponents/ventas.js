(function(){
    ocultar = document.getElementsByClassName('card-panel');

    for(var i=0; i<ocultar.length; i++){
        ocultar[i].style.display=('none');
    }
}())

var panels = document.getElementsByClassName('card-panel');

function detalles(identi){

    $(panels[identi]).slideToggle();
}

function create(dato){
    window.location="./printPdf.php?"+"id="+dato;
}

function borrar(dato){
    window.location="./actions.php?"+"delete="+dato;
}