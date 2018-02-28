$(document).ready(function(){

	/*
	$('#botonmasomenos').on('click',function(){
		console.log("click");
		$.post('index.php/ProductosController/actualizarCantidad',{ id: $('#').text() },function(resp){
			console.log(resp);
		});
	});
	*/

	

});

function actualizarCantidad(data){

	idBtn = data.id;
	nameBtn = data.name;
	idCantidad = "c"+idBtn.substring(1);
		console.log("click");
		//alert(data.name);
		$.post('index.php/ProductosController/actualizarCantidadAjax',{ id: idCantidad.substring(1), signo: nameBtn },function(resp){
			console.log(resp);
		});
		
		if (nameBtn != "menos" ) operando = +0.5;
		else operando = -0.5;

		cantidad = parseFloat($('#'+idCantidad).text());

		nuevaCantidad = cantidad + operando;
		$('#'+idCantidad).text(nuevaCantidad);
	}

function funPrincipal(){
	$('#botonmasomenos').on('click',funModificar);
}

function funModificar(){
	$.get('index.php/ProductosController/actualizarCantidadAjax',function(resp){
		console.log(resp);
	});


}