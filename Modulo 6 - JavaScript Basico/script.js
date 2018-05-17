//Isto é um comentário
/*
	Isto é outro comentário
	
*/
var nome;

window.onload = function(){
	//nome = prompt("Qual seu nome?");

	//document.write(nome);

	var lista = ["Arroz", "Feijão", "Macarrão", "Carne", 20];

	var result;

	result = lista.indexOf("Feijão");
	result = lista.indexOf("oi");
	result = lista.join(", ");

	lista.pop();
	lista.shift();
	lista.push(50);

	alert(result);
	alert(lista);
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

//===============================================

function somar(){
	var campo1 = parseInt(document.getElementById("campo1").value);
	var campo2 = parseInt(document.getElementById("campo2").value);

	var soma = campo1+campo2;

	alert(soma);
}

