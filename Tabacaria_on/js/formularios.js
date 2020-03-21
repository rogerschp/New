$(function(){
	 
	

	$('body').on('submit','form',function(){
		var form = $(this);
		$.ajax({
			url:'../ajax/formularios.php',
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

// $(document).ready(function(){

// 	$('#botao').on('click', function(){

// 		alert("oi");
// 		$.ajax({
// 			url:'ajax/formularios.php',
// 			method: 'POST',
// 			data: {par1: include}
// 			sucess: function(){
// 				alert("ok")
// 			}
// 		})
// 	})

// })
