$(function(){
	

	$('body').on('submit','form',function(){
		var form = $(this);
		$.ajax({
			beforeSend:function(){
				console.log('enviando');
			}
			url:include_path+'ajax/formularios.php',
			method:'post',
			dataType: 'json',
			data:form.serialize()
		}).done(function(data){
			if(data.sucesso){
				console.log("E-mail enviado com sucesso!");
			}else{
				console.log("Ocorreu um erro ao enviar o e-mail");
			}
		});
		return false;
	})
	
})