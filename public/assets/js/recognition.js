window.SpeechRecognition = 	window.SpeechRecognition ||
							window.webkitSpeechRecognition || 
							null;
 
//caso não suporte esta API DE VOZ            
if (window.SpeechRecognition === null) {
	$('.no-suport').removeClass('none');
}else {
	var rec = new window.SpeechRecognition();
	var transcricao = document.getElementById("transcricao");
	rec.continuous = false;
	// rec.interimResults = true;
	rec.lang = 'pt-BR';
	rec.onresult = function(event){
		transcricao.textContent = "";
		for(var i = event.resultIndex; i < event.results.length; i++){
			if(event.results[i].isFinal){
				transcricao.textContent = event.results[i][0].transcript;
				carregaVideo(transcricao.textContent);
				// +' (Taxa de acerto [0/1] : '+event.results[i][0].confidence+')';
			// }else{
			// 	transcricao.textContent += event.results[i][0].transcript;
			}
		}
	}

	document.querySelector('.rect').addEventListener("click", function(){
		try{
			rec.start();
		}catch(ex){
			alert("Error: "+ex.message);
		}
	});
}

function carregaVideo(texto) {

	$conteudo = $('#conteudo').val();
	$.ajax({
		url: '/dashboard/busca-video',
		data: {'PalavraChave': texto, 'Conteudo': $conteudo}
	}).done(function(data){
		if (data == 0){
			// Não tem vídeo
			// $('.camera').removeClass('none');
			$('.video').removeAttr('src');
		}else{
			// $('.camera').addClass('none');
			$('.video').attr('src', data['Conteudo_CaminhoVideo']);
			$('.video').attr('autoplay', true);
		}
	});
}