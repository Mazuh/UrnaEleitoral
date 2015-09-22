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
    voto_oculto().innerHTML = num;
}

function corrige(){
    tela().innerHTML = VAZIA;
    voto_oculto().innerHTML = "";
}

function confirma(){
    return ((tela().innerHTML != VAZIA) && (voto_oculto().innerHTML != ""));
}