// JavaScript Document
function validacion(){
	const x = document.forms["frm1"];
	var valor = true;
	
	let text = "";
	for (let i=0; i<x.length; i++){
		text += x.elements[i].value + "<br>";
	}
	
	for(let i = 0; i<x.length; i++){
		if(x.elements[i].value == ""){
			valor = false;
		}
	}
	
	if(valor == true){
		document.getElementById("demo").innerHTML = text;
	}else{
		window.alert("Los campos no fueron llenados correctamente");
		document.getElementById("demo").innerHTML = "";
	}
}

function habilitar(num){
	
	const y = document.forms["frm1"];
	
	y.elements[num].disabled = false;
	
}