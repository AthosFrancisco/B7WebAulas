//Isto é um comentário
/*
	Isto é outro comentário
	
*/
var nome;

window.onload = function(){
	//nome = prompt("Qual seu nome?");

	//document.write(nome);
};

//https://jsfiddle.net/

function fazerAcao(nome){
	var area = document.getElementById("area");
	var texto = prompt("Qual seu sobrenome?");

	area.innerHTML = nome +" "+ texto;
}

function adicionarIngrediente(){
	var ing = document.getElementById("ingrediente").value;
	var lista = document.getElementById("lista").innerHTML;

	lista = lista + "<li>"+ing+"</li>";

	document.getElementById("lista").innerHTML = lista;
}



var x = 10+20;
