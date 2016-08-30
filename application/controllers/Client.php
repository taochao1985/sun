<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model("sun");
        $this->user = $this->top();
    }

    public function index()
    {
        $client_id = $this->uri->segment(3);
        if(!$client_id){
            $today_date = date('Y-m-d');
            $client_info    = $this->sun->select('original_lists','*',array('m_id'=>0),1,0,array('id'=>'desc'));
            $temp_client = $client_info[0];
            $this->sun->update('original_lists',array('m_id'=>$this->user->id,'used_date'=>$today_date,'used_time'=>date('H:i:s')),array('id'=>$temp_client->id));
        }else{
            $client_info    = $this->sun->select('original_lists','*',array('id'=>$client_id));
            $temp_client = $client_info[0];
        }

        $data['client'] = $temp_client;
        $this->load->view('client/index',$data);
    }

    function save_deal_result(){
        $fields = array(
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
                        'client_type',
                        'credit_record',
                        'work_cond',
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
                        'store_address',
                        'house_status',
                        'house_type',
                        'car_type',
                        'has_loan',
                        'important_alert',
                        'car_house',
                        'house_owner',
                        'car_owner',
                        'remark',
                        'store_remark',
                        'employee_remark',
                        'different_policy',
                        'client_id'
                    );
        foreach ($fields as $key => $value) {
            //$sql = "ALTER TABLE  `deal_result` ADD  `".$value."` VARCHAR( 64 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER  `id`";
            $form_data[$value] = $_POST[$value];
           // $this->sun->personal_query($sql);
        }
        $this->sun->insert('deal_result',$form_data);
        echo json_encode(array('success'=>'yes'));exit;
    }

    function top(){
        $user = $this->session->userdata('member');
        if($user==""){
            //直接跳转到登录页面
            redirect('/main/login');exit;
        }else{
          return $user;
        }
    }

}
