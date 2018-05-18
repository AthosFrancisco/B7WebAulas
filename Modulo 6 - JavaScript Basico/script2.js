/*var x = 0;

document.write("Iniciando o loop...<br/>");

while(x < 10){

	document.write(x+"<br/>");

	x++;
}


document.write("Finalizando o loop...<br/>");

document.write("Iniciando o loop...<br/>");

for(x = 0; x<10; x++){

	document.write(x+"<br/>");
}

document.write("Finalizando o loop...<br/>");


var x = prompt("Qual o número?");

switch(x){
	case "0":
		alert("x é 0");
		break;
	case "1":
		alert("x é 1");
		break;
	default:
		alert("x é indefinido");
		break;
}*/

window.onload = function(){
	var n1 = document.getElementById("n1");
	n1.innerHTML = Math.floor(Math.random()*10);
	n1.style.display = "none";
};

function comparar(){

	var n = document.getElementById("n1");
	var n1 = parseInt(n.innerHTML);
	var n2 = parseInt(document.getElementById("n2").value);

	n.style.display = "block";

	if (n1 == n2) {
		alert(n1+" e "+n2+" são iguais");
	}else{
		alert(n1+" e "+n2+" não são iguais");
	}
}