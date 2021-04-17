$(document).ready(function(){
	$.ajax({
		url: 'http://' + location.host + '/api/listar/',
		type: "GET",
		dataType: "json",
		success: function(data){
			$(data).each(function(i, v){
				$('#tb_usuarios tbody').append(`
					<tr>
						<td>${v.nome}</td>
						<td>${v.email}</td>
						<td>${v.telefone}</td>
						<td>
							<a href="#" class="btn btn-success btn-sm text-center" target="_blank">
								<i class="fa fa-edit"></i>
							</a>
						</td>
						<td>
							<button class="btn btn-danger btn-sm text-center" onclick="Excluir(${v.id}, this, '${v.nome}');">
								<i class="fa fa-remove"></i>
							</button>
						</td>
					</tr>
				`);
			});
		}
	});
});

function Excluir(id, el, usuario){
	if (confirm("Deseja realmente excluir o usuário " + usuario + "?")){
		$.ajax({
			url: 'http://' + location.host + '/api/excluir/' + id,
			type: "DELETE",
			dataType: "json",
			success: function(data){
				if (data.status == 'Sucesso'){
					$(el).parent().parent().remove();
				}
				ExibeToastAviso(data.msg, 'Status')
			}
		});
	}
}