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
        $lists = $this->sun->select('original_lists');
        $str = "姓名,手机,身份证,城市\n";
        $str = iconv('utf-8','gb2312',$str);

        foreach($lists as $k=>$v){
            $realname = iconv('utf-8','gb2312',$v->realname);
            $city     = iconv('utf-8','gb2312',$v->city);
            $str.= $realname.",".$v->phone.",".$v->id_no.",".$city."\n";
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
