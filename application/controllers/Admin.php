<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model("sun");
        $this->top();
    }



    public function data_import()
    {

        if($_POST){
            $filename = dirname(dirname(dirname(__FILE__))).trim($_POST['file_url']);

            $handle = fopen($filename, 'r');
            $result = fgetcsv($handle); //解析csv
            $len_result = count($result);
            while ($data = fgetcsv($handle,1000,',')){
                $order_no = date('YmdHis').$this->sun->_generate_code();
                $temp_data = array(
                    'realname'=>$data[1],
                    'phone'   =>$data[2],
                    'id_no'   =>$data[3],
                    'city'    =>$data[4],
                    'order_no'=>$order_no,
                    'batch'   =>$_POST['batch']
                    );
                $this->sun->insert('original_lists',$temp_data);
            }
            echo json_encode(array('success'=>'yes'));exit;
        }else{
            $this->load->view('admin/data_import');
        }
    }

    function export_csv($filename,$data) {
        header("Content-type:text/csv");
        header("Content-Disposition:attachment;filename=".$filename);
        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
        header('Expires:0');
        header('Pragma:public');
        echo $data;
    }


    public function data_export(){
        $sql ="select original_lists.id as o_id,original_lists.batch,deal_result.* from original_lists left join deal_result on original_lists.id = deal_result.client_id";
        $lists = $this->sun->personal_select($sql);

        //$str = "姓名,手机,身份证,城市,信用记录,工作情况,是否有物业,年龄,职业,税后收入,筛选结果,处理结果\n";
        $str = "批次,姓名,手机,身份证,城市,信用记录,工作情况,是否有物业,年龄,职业,税后收入,筛选结果,处理结果,下次联系时间,筛选备注,所选产品,客户类型,借款人,联系电话,上门时间,上门门店,门店地址\n";
        $str = iconv('utf-8','gb2312',$str);
        $work_cond_array = array('未选择','受薪人士','私营业主','自雇人士','无业','股东');

        $deal_result_array = array('0'=>'未选择','1'=>'无效（空号，错号，停机，五次以上无人接听）',
            '2'=>'无人接听',
            '5'=>'不需要',
            '6'=>'其他待跟进',
            '7'=>'不符合进件标准',
            '8'=>'已预约待跟进',
            '9'=>'已预约待上门',
            '10'=>'直通待跟进'
            );

        $product_option = array('0'=>'未选择','1'=>'高端私营业主贷',
            '2'=>'高端薪金贷',
            '3'=>'无抵押车贷',
            '4'=>'阳光内部员工贷',
            '5'=>'私营业主贷',
            '6'=>'物业贷',
            '7'=>'车抵快贷',
            '8'=>'受薪贷',
            '9'=>'阳房贷',
            '10'=>'车险贷',
            '11'=>'寿险贷',
            '12'=>'白领按揭贷',
            '13'=>'阳光车险贷',
            '14'=>'阳光寿险贷'
            );
        $client_type_array = array('No','A','B','C','D');
        foreach($lists as $key=>$v){

                $credit_record = $v->credit_record?'是':'否';
                $realname = iconv('utf-8','gb2312',$v->realname);
                $city     = iconv('utf-8','gb2312',$v->city);
                $car_flag = '无车';
                $house_flag = '无房';
                if($v->car_house){
                    $house_car_value = explode(';',$v->car_house);
                    foreach ($house_car_value as $key => $value) {
                        if($value == 1){
                            $house_flag = '有房';
                        }
                        if($value == 2){
                            $house_flag = '有车';
                        }
                    }
                }

                $work_cond = $v->work_cond?$work_cond_array[$v->work_cond]:'未选择';
                $deal_result = $v->deal_result?$deal_result_array[$v->deal_result]:'未选择';
                $selected_product = $v->selected_product?$product_option[$v->selected_product]:'未选择';
                $client_type = $v->client_type?$client_type_array[$v->client_type]:'未选择';

                $house_flag     = iconv('utf-8','gb2312',$house_flag);
                $car_flag     = iconv('utf-8','gb2312',$car_flag);
                $credit_record     = iconv('utf-8','gb2312',$credit_record);
                $work_cond     = iconv('utf-8','gb2312',$work_cond);
                $deal_result     = iconv('utf-8','gb2312',$deal_result);
                $selected_product     = iconv('utf-8','gb2312',$selected_product);
                $client_type     = iconv('utf-8','gb2312',$client_type);


                $str.= $v->batch.",".$realname.",".$v->phone.",".$v->id_no.",".$city.",".$credit_record.",".$work_cond.",".$car_flag.'-'.$house_flag;
                $str.= ','.$v->age.','.$work_cond.','.$v->salary_after_tax.','.$v->salary_after_tax.','.$v->select_result.','.$deal_result;
                $str.= ','.$v->next_contact_time.','.$v->remark.','.$selected_product.','.$client_type.','.$v->borrower_name.','.$v->contact_mobile1;
                $str.= ','.$v->store_time.','.$v->store_name.','.$v->store_address;

               /* $car_flag = '无车';
                $house_flag = '无房';
                if($v->car_house){
                    $house_car_value = explode(';',$v->car_house);
                    foreach ($house_car_value as $key => $value) {
                        if($value == 1){
                            $house_flag = '有房';
                        }
                        if($value == 2){
                            $house_flag = '有车';
                        }
                    }
                }

                $select_result = '';
                if($v->select_result==1){
                    $select_result = '符合';
                }else if($v->select_result == 2){
                    $select_result = '不符合';
                }

                $str.= $realname.",".$v->phone.",".$v->id_no.",".$city.",".$credit_record.",".$work_cond[$v->work_cond].",".$car_flag.'-'.$house_flag;
                $str.= ','.$v->age.','.$work_cond[$v->work_type].','.$v->salary_after_tax.','.$v->salary_after_tax.','.$v->select_result.','.$deal_result[$v->deal_result];
                $str.= ','.$v->next_contact_time.','.$v->remark.','.$product_option[$v->selected_product].','.$client_type[$v->client_type].','.$v->borrower_name.','.$v->contact_mobile1;
                $str.= ','.$v->store_time.','.$v->store_name.','.$v->store_address;*/
                $str.="\n";

        }
        $filename = date('YmdHis').'.csv'; //设置文件名
        $this->export_csv($filename,$str); //导出
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
