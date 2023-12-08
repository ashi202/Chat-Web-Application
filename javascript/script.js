$('#password_validation').on('focus',function(){
    $('.password_required').slideDown();
})

$('#password_validation').on('blur',function(){
    $('.password_required').slideUp();
})

$('#password_validation').on('keyup',function(){
    passValue=$(this).val();

    if(passValue.match(/[a-z]/g)){
        $('.lowercase').addClass('active');
    }
    else{
        $('.lowercase').removeClass('active');
    }
    if(passValue.match(/[A-Z]/g)){
        $('.uppercase').addClass('active');
    }
    else{
        $('.uppercase').removeClass('active');
    }
    if(passValue.match(/[0-9]/g)){
        $('.number').addClass('active');
    }
    else{
        $('.number').removeClass('active');
    }
    if(passValue.match(/[!@#$%^&*]/g)){
        $('.special').addClass('active');
    }
    else{
        $('.special').removeClass('active');
    }
    if(passValue.length==8||passValue.length>8){
        $('.len').addClass('active');
    }
    else{
        $('.len').removeClass('active');
    }
    $('.password_required ul li').each(function(index,el){

        if(!$(this).hasClass('active')){
            $('.button').removeClass('active')
        }
        else{
            $('.button').addClass('active') 
        }
    });

})
