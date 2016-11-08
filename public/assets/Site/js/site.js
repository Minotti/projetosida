$(document).ready(function () {
    $('.sel-tipo').on('change', function(){
        if ($(this).val() == '1'){
            $('.alfabeto').fadeIn(1000).css('display', 'inline-block').removeClass('none')
            $('.numeros').addClass('none')
            $('.objetos').addClass('none')
        }else if($(this).val() == '2'){
            $('.numeros').fadeIn(1000).css('display', 'inline-block').removeClass('none')
            $('.alfabeto').addClass('none')
            $('.objetos').addClass('none')
        }else{
            $('.objetos').fadeIn(1000).css('display', 'inline-block').removeClass('none')
            $('.numeros').addClass('none')
            $('.alfabeto').addClass('none')
        }
    })

    $('.sel-alfabeto').on('change', function(key, value){
        $('.video').attr('src', 'assets/Conteudos/Alfabetizacao/'+$(this).val()+'.mp4').attr('autoplay', true).attr('controls',true)
    })

    $('.sel-numeros').on('change', function(){
        $('.video').attr('src', 'assets/Conteudos/Alfabetizacao/'+$(this).val()+'.mp4').attr('autoplay', true).attr('controls',true)
    })

    $('.sel-objetos').on('change', function(){
        $('.video').attr('src', 'assets/Conteudos/Alfabetizacao/'+$(this).val()+'.mp4').attr('autoplay', true).attr('controls',true)
    })
})