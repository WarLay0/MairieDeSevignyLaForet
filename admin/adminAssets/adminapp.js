$(document).ready(function(){
    $('#agendaChoice').hover(function(){
        $(this).addClass('hover');
        $(this).removeClass('notHover');
    },function(){
        $(this).addClass('notHover');
        $(this).removeClass('hover');
    });
    $('#actuChoice').hover(function(){
        $(this).addClass('hover');
        $(this).removeClass('notHover');
    },function(){
        $(this).addClass('notHover');
        $(this).removeClass('hover');
    });

    $('#agendaChoice').click(function(){
        $('.pannel').hide();
        $('#agenda').addClass('active');
        $('#agenda').removeClass('notActive');
    });
    $('#actuChoice').click(function(){
        $('.pannel').hide();
        $('#actu').addClass('active');
        $('#actu').removeClass('notActive');
    });

    $('.backButton').click(function(){
        location.reload();
    })
})