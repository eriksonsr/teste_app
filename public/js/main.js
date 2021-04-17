function ExibeToastAviso(mensagem, titulo, tempo){
	$('#toast_mensagem').html(mensagem);
	if (tempo){
		$('#toast_aviso').data('delay', tempo);
	}
	if (titulo){
		$('#toast_titulo').html(titulo);
	}
	$('#toast_aviso').toast('show');
}