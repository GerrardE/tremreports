$(document).ready(function(){
    let alert  = document.getElementsByClassName('alert');
    
    $('.table-y').hide();
    $('.btn-y').hide();
    $("#generate-y").click(function(){
        $('#generate-y').toggleClass('btn-success');
        $('.table-y').fadeIn(2000);
        $('.btn-y').fadeIn(2000);
        $('div.alert.alert-success').remove();
    });

    $('.table-q').hide();
    $('.btn-q').hide();
    $("#generate-q").click(function(){
        $('#generate-q').toggleClass('btn-success');
        $('.table-q').fadeIn(2000);
        $('.btn-q').fadeIn(2000);
        $('div.alert.alert-success').remove();
    });

    $('.table-m').hide();
    $('.btn-m').hide();
    $("#generate-m").click(function(){
        $('#generate-m').toggleClass('btn-success');
        $('.table-m').fadeIn(2000);
        $('.btn-m').fadeIn(2000);
        $('div.alert.alert-success').remove();
    });

    $('.table-w').hide();
    $('.btn-w').hide();
    $("#generate-w").click(function(){
        $('#generate-w').toggleClass('btn-success');
        $('.table-w').fadeIn(2000);
        $('.btn-w').fadeIn(2000);
        $('div.alert.alert-success').remove();
    });
 }); 