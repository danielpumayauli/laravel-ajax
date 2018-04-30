$(document).ready(function(){
	$('#alert').hide();
	$('.btn-delete').click(function(e){
		e.preventDefault();
		if( !confirm("Está seguro de eliminar?")){
			return false;
		}
		// Si responde no, no se ejecuta lo que continúa

		let row = $(this).parents('tr'),
			form = $(this).parents('form'),
			url = form.attr('action');

		$('#alert').show();

		$.post(url, form.serialize(), function(result){
			row.fadeOut();
			$('#products-total').html(result.total);
			$('#alert').html(result.message);
		}).fail(function(){
			$('#alert').html('Algo salió mal');
		});



	});
});