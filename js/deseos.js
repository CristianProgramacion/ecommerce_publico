function enviar(str){
	//str = parametro que viene desde el boton

	//por medio del metodo get se enviara a la pagina llamada desear.php
	$.get('desear.php',{
		clave: str,
	},function(){
		bootbox.alert('El producto se ha agregado a la lista de deseos');
	});
}