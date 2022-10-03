// Delete user by ID via PHP

$().ready(function (){
	$('#del').click(function () {

		decision = confirm('Deseja realmente deletar o usuário "' + $("#del").val() + '"?');
			
		if (decision) {
			let id_user = $("#del").val();
			let tb_user = "tb_user";

			$.ajax({
			    url: "php/delete-user.php",
			    type: "POST",
			    data: "table='tb_user'&id="+$('#del').val(),
			    dataType: "html"
			    
			}).done(function() {

			}).fail(function(jqXHR, textStatus ) {
			    console.log("Não se mata, mas infelizmente falhou: " + textStatus);

			}).always(function() {

			});
		}
	});
});