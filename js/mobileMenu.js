$(document).ready(function(){
    $('.hmenu').click(function(){
        $('.menuMovil').toggleClass('menuMovilBlock');
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
        }
        else{
            $(this).removeClass('active');
        }

    });
});