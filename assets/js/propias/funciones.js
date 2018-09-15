// función para resaltar elementos
function resaltar(x, tag){
	var seccion = document.getElementById(x);
	var elementos = seccion.getElementsByTagName(tag);
	elementos[0].style.backgroundColor = "#dfe6e9";
}

function normalizar(x, tag){
	var seccion = document.getElementById(x);
	var elementos = seccion.getElementsByTagName(tag);
	elementos[0].style.backgroundColor = '';
}