<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends Admin_Controller {
    //获取用户
    public function get_user(){
        $uid=$this->session->userdata('uid');
        $this->load->model('Admin_m');
        $query=$this->Admin_m->select_user($uid);
        if($query){
            $data=$query;
            $this->_template('user_editor',$data);
        }
    }
    
    //编辑用户
    public function editor_user(){
        $uid=$this->input->post('uid');
        $uname=$this->input->post('uname');
        $upass=md5($this->input->post('upass'));
        $umail=$this->input->post('umail');
        $uqq=$this->input->post('uqq');
        $uphone=$this->input->post('uphone');
        $arr=array(
            'upass'=>$upass,
            'umail'=>$umail,
            'uqq'=>$uqq,
            'uphone'=>$uphone
        );
        $this->load->library('form_validation');
        //表单预处理验证规则
        $config=array(
            array(
                'field'=>'upass',
                'label'=>'密码',
                'rules'=>'trim|required|min_length[4]|max_length[12]|md5'
            ),
            array(
                'field'=>'umail',
                'label'=>'E-mail',
                'rules'=>'trim|required|valid_email'
            ),
            array(
                'field'=>'uqq',
                'label'=>'QQ',
                'rules'=>'trim|required|integer'
            ),
            array(
                'field'=>'uphone',
                'label'=>'电话/手机',
                'rules'=>'trim|required|integer'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE){
            $this->formTips("修改失败!","表单填写不符合要求！修改失败:".validation_errors(),'user/get_user');
        }else{
            $this->load->model('Admin_m');
            $query=$this->Admin_m->updataVal($uid,$arr);
            $this->formTips("修改成功!","修改成功:",'user/get_user',1);
            redirect('user/get_user');
        }
        	
    }
}