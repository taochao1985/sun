"use strict";
$(function() {
    $("input[name='work_cond']").click(function(){
        $(".work_cond_detail").addClass('hidden');
        var cond_target = ".work_cond_"+$(this).val();
        $(cond_target).removeClass('hidden');
    })

    $("input[name='house_status']").click(function(){
        $(".house_status_detail").addClass('hidden');
        var cond_target = ".house_status_"+$(this).val();
        $(cond_target).removeClass('hidden');
    })

    $("input[name='car_owner']").click(function(){
        if($(this).prop('checked')){
            $(".car_type_select").removeClass('hidden');
            $("input[name='car_type']").each(function(){
                $(this).prop('checked',false);
            })
        }else{
            $(".car_type_select").addClass('hidden');
            $(".car_type_detail").addClass('hidden');
        }
    })

    $("input[name='car_type']").click(function(){
        var car_type_v = $(this).val();
        if(car_type_v == 1){
            $(".car_type_detail").removeClass('hidden');
        }else{
            $(".car_type_detail").addClass('hidden');
        }
    })
});