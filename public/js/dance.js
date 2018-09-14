$(document).ready(function(){
    let alert  = document.getElementsByClassName('alert');

    $("#add_day").click(function(){ 
        if(alert.length <= 1) {
            $('#app').before('<div class="alert alert-success">\n'
            + '<p>New day added successfully</p>\n'
            +'</div>');
        } else { }
        $('.alert').fadeOut(3000);
    });

    $("#add_year").click(function(){ 
        if(alert.length <= 1) {
            $('#app').before('<div class="alert alert-success">\n'
            + '<p>New year added successfully</p>\n'
            +'</div>');
        } else { }
        $('.alert').fadeOut(3000);
    });
    
    $('.table-y').hide();
    $("#generate-y").click(function(){
        $('#generate-y').toggleClass('btn-success');
        $('.table-y').fadeIn(2000);
        $('div.alert.alert-success').remove();
    });

    $('.table-q').hide();
    $("#generate-q").click(function(){
        $('#generate-q').toggleClass('btn-success');
        $('.table-q').fadeIn(2000);
        $('div.alert.alert-success').remove();
    });


 }); 