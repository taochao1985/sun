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


    function get_fields_value($fields, submit_data){
        var fields = $fields.fields;
        var type   = $fields.type;
        for(var i=0; i<fields.length; i++){
            if(type == 'radio'){
                submit_data[fields[i]] = $("input[name='"+fields[i]+"']:checked").val();
            }else if(type == 'select'){
                submit_data[fields[i]] = $("select[name='"+fields[i]+"']").val();
            }else if(type == 'input'){
                submit_data[fields[i]] = $("input[name='"+fields[i]+"']").val();
            }else if(type == 'checkbox'){
                var t_v = '';
                $("input[type='checkbox'][name='"+fields[i]+"']").each(function(){
                    if($(this).prop('checkbox')){
                        t_v+=$(this).val()+';';
                    }
                })
                submit_data[fields[i]] = t_v;
            }
        }
        return submit_data;
    }

    $(document).ready(function(){
        $(".btn-primary").click(function(){
            show_stack_modal('success','保存成功！');
        })

        $(".btn-info").click(function(){
            show_stack_modal('success','保存成功并提取下一个任务！');
        })

        $(".btn-save-button").click(function(){
            var next_flag = 0,$this = $(this);
            if($this.hasClass('btn-info')){
                next_flag = 1;
            }
            var submit_data = {
                credit_record : $("input[name='credit_record']:checked").val(),
                work_cond     : $("input[name='work_cond']:checked").val()
            }
            $select_fields = {
                type:'select',
                fields:[
                            'work_time_1',
                            'salary_pay_method_1',
                            'business_license_time_2',
                            'current_work_time_3',
                            'current_work_time_4',
                            'salary_pay_method_4',
                            'business_license_time_4',
                            'business_license_time_5',
                            'share',
                            'car_payed_month',
                            'sex',
                            'menu_type',
                            'work_type',
                            'select_result',
                            'deal_result',
                            'selected_product',
                            'client_type'
                        ]
                };
            submit_data = get_fields_value($select_fields, submit_data);

            $input_fields = {
                type:'input',
                fields:[
                            'bank_sent_salary_1',
                            'salary_after_tax_1',
                            'permonth_income_2',
                            'permonth_real_income_3',
                            'bank_sent_salary_4',
                            'permonth_real_income_4',
                            'permonth_income_4',
                            'permonth_income_5',
                            'house_payed_month',
                            'house_payed_price',
                            'car_total_price',
                            'car_real_price',
                            'car_payed_price',
                            'realname',
                            'phone',
                            'id_no',
                            'age',
                            'salary_after_tax',
                            'phone2',
                            'client_source',
                            'media_source',
                            'city',
                            'credit_amount',
                            'rates',
                            'product_type',
                            'next_contact_time',
                            'borrower_name',
                            'contact_mobile1',
                            'contact_mobile2',
                            'borrower_id_no',
                            'store_time',
                            'store_name',
                            'store_address'
                        ]
                };
            submit_data = get_fields_value($input_fields, submit_data);

            $radio_fields = {
                type:'radio',
                fields:[
                         'house_status',
                         'house_type',
                         'car_type',
                         'has_loan',
                         'important_alert'
                       ]
            };
            submit_data = get_fields_value($radio_fields, submit_data);
            $checkbox_fields = {
                type:'checkbox',
                fields:[
                         'car_house',
                         'house_owner',
                         'car_owner'
                       ]
            };
            submit_data = get_fields_value($checkbox_fields, submit_data);
            $textarea_fields = {
                type:'textarea',
                fields:[
                         'remark',
                         'store_remark',
                         'employee_remark',
                         'different_policy'
                       ]
            };
            submit_data = get_fields_value($textarea_fields, submit_data);

        })
  })

});