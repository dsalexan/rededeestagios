function getColor(full_name){
    return full_name.split('-')[3];
}

function getFullColor(name){
    return 'var(--my-' + name + ')';
}

function reDraw(){
    $('body').addClass('dummyclass').delay(0).removeClass('dummy‌​class');
}

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

$('.item-seletor').click(function(){
    //id = $(this).attr('id').replace('link-', '');
    $('body').scrollTo('.contact');
    reDraw();
});