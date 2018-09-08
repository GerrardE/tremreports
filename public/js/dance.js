$(document).ready(function(){
    let newDay = '<div class="form-group col-md-3 new_day"><label for="role" class="control-label">Choose Day</label><div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span><select name="role" class="form-control"><option value="0" selected disabled><-- Please choose one --></option><option>Monday</option><option>Tuesday</option><option>Wednesday</option><option>Thursday</option><option>Friday</option><option>Saturday</option><option>Sunday</option></select></div></div>';
    let count  = document.getElementsByClassName('new_day');
    let alert  = document.getElementsByClassName('alert-danger');
    let newYear = '<div class="form-group col-md-3 {{ $errors->has(\'year\') ? \' has-error\' : \'\' }}">\n'
                     + '<label for="year" class="control-label">Add Year:</label>\n'
                     + '<div class="input-group">\n'
                     + '<span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>\n'
                     + '<select name="year"  class="form-control">\n'
                        +  '<option value="none" selected disabled><-- Please choose one--></option>\n'   
                        +  '<option value="2018">2018</option>\n'
                        +  '<option value="2019">2019</option>\n'
                        +  '<option value="2020">2020</option>\n'
                        +  '<option value="2021">2021</option>\n'
                        +  '<option value="2022">2022</option>\n'
                        +  '<option value="2023">2023</option>\n'
                        +  '<option value="2024">2024</option>\n'
                    +  '</select>\n'
                    +  '</div>\n'
                    +'</div>';

    $("#add_day").click(function(){ 
        if (count.length <= 5) {
            $("#synod_day").after(newDay);
        } else {
            $(".day_button").fadeOut(2000);
            if(alert.length < 1) {
            $('#app').before('<div class="alert alert-danger">\n'
                            + '<p>Maximum number of comparable days exceeded</p>\n'
                            +'</div>');
            } else { }
        }
    });

    $("#add_year").click(function(){ 
        $("#synod_year").after(newYear);
    });
    
    $('#data').hide();
    $("#generate").click(function(){
        $('button#generate').toggleClass('btn-success');
        $('#data').fadeIn(2000);
    });

 }); 