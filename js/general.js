function getColor(full_name){
    return full_name.split('-')[3];
}

function getFullColor(name){
    return 'var(--my-' + name + ')';
}

function reDraw(){
    $('body').addClass('dummyclass').delay(0).removeClass('dummy‌​class');
}

function getNegativeOffset(element){
    value = $(element).data('negative-offset');
    if(value == undefined) return 0
    else return value;
}

$(document).ready(function(){
    $(window).on('scroll', function(){
        var wn = $(window).scrollTop();
        var wn_bot = wn + $(window).height();
        
        /*$('#test-label').text('');*/
        $('.header-link').each(function(){
            elm = $(this).attr('id').replace('link-', '');
            elm_top = $('.' + elm).offset().top - 81 - getNegativeOffset('.' + elm);
            elm_bot = elm_top - 1 + $('.' + elm).outerHeight();

        /*$('#test-label').text($('#test-label').text() + $(this).attr('id') + " h:" + $('.' + elm).outerHeight() + " t:" + elm_top + " b:" + elm_bot + " | ");*/
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
    $('html,body').animate({scrollTop: $('.' + elm).offset().top - 81 - getNegativeOffset('.' + elm)},250);
});

$('.tooltip-close').click(function(){
    $('#tooltip').addClass('tooltip-hidden');
    $("#tip-element").removeClass('tip-hidden');
});

$('.body-map .map-holder #tip-element').click(function(){
    $('#tooltip').removeClass('tooltip-hidden');
    $("#tip-element").addClass('tip-hidden');
});