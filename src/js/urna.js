const ID_TELA = "in";
const ID_OCULTO = "voto";
const VAZIA = "_";



function tela(){
    return document.getElementById(ID_TELA);
}

function voto_oculto(){
    return document.getElementById(ID_OCULTO);
}



function digitar(num){
    tela().innerHTML = num;
    voto_oculto().setAttribute("value", num);
}

function corrige(){
    tela().innerHTML = VAZIA;
    voto_oculto().setAttribute("value", "");
}

function confirma(){
    return ((tela().innerHTML != VAZIA) && (voto_oculto().getAttribute("value") != ""));
}


function esperarAndRedirecionar(){
    setTimeout(redirecionar, 7000);
}

function redirecionar(){
    window.location = "painel_comite.php";
}