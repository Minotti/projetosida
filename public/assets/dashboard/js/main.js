$(document).ready(function(){
    $('.sel-conteudo').on('change', function(){
        $('.video-escolaridade').attr('src', '../assets/Conteudos/apresentacao/nome_soletrado.mp4').attr('autoplay', true).attr('controls',true);
    })
})
