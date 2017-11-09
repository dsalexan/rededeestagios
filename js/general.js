function getColor(full_name){
    return full_name.split('-')[3];
}

function getFullColor(name){
    return 'var(--my-' + name + ')';
}

function reDraw(){
    $('body').addClass('dummyclass').delay(0).removeClass('dummy‌​class');
}

$(document).ready(function(){
    $(window).on('scroll', function(){
        var wn = $(window).scrollTop();
        
        $('.header-link').each(function(){
            elm = $(this).attr('id').replace('link-', '');
            elm_top = $('.' + elm).offset().top - 81;
            elm_bot = $('.' + elm).offset().top - 81 + $('.' + elm).height();
            if (wn >= elm_top && wn <= elm_bot){
                $(this).parent().addClass('nav-hovered');
            }else{
                $(this).parent().removeClass('nav-hovered');
            }
        });
    });
});

$('.seletores .item-seletor').click(function(){
    document.documentElement.style.setProperty('--main-color', getFullColor($(this).attr('data-color')));

    $('#selector-text-holder').attr('data-rule-color', $(this).attr('data-color'));
    reDraw();
});

$('.contact .button').click(function(){
    $('.contact').attr('data-mode', $(this).data('value'));
    reDraw();
});

$('.contact .cancel').click(function(){
    $('.contact').attr('data-mode', 'none');
    reDraw();
});

$('.header-link').click(function(){
    elm = $(this).attr('id').replace('link-', '');
    $('html,body').animate({scrollTop: $('.' + elm).offset().top - 81},250);
});