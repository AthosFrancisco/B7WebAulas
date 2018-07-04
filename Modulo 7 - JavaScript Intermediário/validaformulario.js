function validar(){
	var valor = document.getElementById("numero").value;

	if (valor.length > 2) {
		return false;
	}else{
		return true;
	}
}