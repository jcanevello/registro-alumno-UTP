$(document).ready(function($){
	
	$('#btn-ingresar').click(function(){
            if($('#usuario').val() != 'admin')
                alert('usuario incorrecto')
            if($('#contrasena').val() != '123456')
                alert('contraseña incorrecto')
            
            if($('#usuario').val() == 'admin' && $('#contrasena').val() == '123456')
            {
                console.log('ffff')
               $('#login').submit()
            }
        })
        
        $('#btn-save').click(function(){
		
		$.ajax({
			url: 'save',
			type: 'POST',
			data: $('#formulario').serialize(),
			dataType: 'json'
		}).done(function(response){
                    if(response.status == 'OK')
                    {
                       $('form').each().reset();  
                       location.reload()
                    }
                    else
                    {
                        alert('Error al guardar los datos')
                    }
		}).fail(function(){
			alert('Error al enviar datos')
		})
	})
        
})