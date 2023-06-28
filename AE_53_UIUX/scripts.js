function cambiar() {
	let name = prompt("Ingrese su nombre");
	let emoji = document.getElementById("emoji-select").value;
	document.getElementById("name").innerText = name;
	document.getElementById("emoji").innerHTML = emoji;
}

function alerta() {
	let nombre_g = document.getElementById("name").innerText;
	alert("¡Hola " + nombre_g + "! Me gusta tu emoji" );
}

