//Funciones
function cambio(url) {
document.getElementById("contenedor").innerHTML = '<iframe width="800" height="460" src="'+ url +'??&rel=0&showinfo=0&controls=0&autoplay=1&start" frameborder="0" allowfullscreen></iframe>';
return false;
}

function vname(text){
document.getElementById("txt").innerText= text ;  
return false;
}


