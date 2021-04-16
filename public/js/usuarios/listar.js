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
							<button class="btn btn-danger btn-sm text-center" target="_blank">
								<i class="fa fa-remove"></i>
							</button>
						</td>
					</tr>
				`);
			});
		}
	});
});