function apertouMouse(){
	console.log("Apertou mouse");
}

function soltaMouse(){
	console.log("Soltou mouse");
}

function mouseEmCima(){
	console.log("mouse passou por cima");
}

function mouseSaiuDeCima(){
	console.log("mouse saiu de cima");
}

function passouMouse(){
	console.log("mouse mexeu em cima");
}

function clicou(){
	console.log("Clicou");
}

function botaoDireito(){
	console.log("botao direito");

	return false;
}

function cliqueDuplo(){
	console.log("Clicou duas vezes");
}

//eventos de teclado
//ver demais propriedades no mdn
function apertouBotao(event){
	console.log("Apertou a tecla: "+ event.keyCode);
}

function soltouBotao(){
	console.log("Soltou a tecla: "+ event.keyCode);
}

function pressionouBotao(){
	console.log("Pressionou a tecla: "+ event.keyCode);
}

//eventos de página

function carregou(){
	alert("carregou");
}

//eventos de formulários

function mudouOpcao(obj){
	console.log("selecionou: "+obj.value);
}

function focar(){
	console.log("focou");
}

function desfocar(){
	console.log("desfocou");
}

//jogo das bolinnhas



function addBola(){
	var bola = document.createElement("div");
	bola.setAttribute("class", "bola");

	var p1 = Math.floor(Math.random()*500);
	var p2 = Math.floor(Math.random()*400);

	bola.setAttribute("style", "left:"+p1+"px; top:"+p2+"px;");
	bola.setAttribute("onclick", "estourar(this)");

	document.body.appendChild(bola);
}

function estourar(obj){
	document.body.removeChild(obj);
}

function iniciar(){
	setInterval(addBola, 1000);
}