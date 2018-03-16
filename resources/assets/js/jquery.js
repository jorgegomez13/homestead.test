function cambio(url) {
document.getElementById("contenedor").innerHTML = '<iframe src="'+ url +'??&rel=0&showinfo=0&controls=0&autoplay=1&start" frameborder="0" allowfullscreen></iframe>';
return false;
}

$( "#tt" ).click(function() {
  $( "#referencias" ).toggle( "slow" );
});
