<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Article extends Admin_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Article_m');
		$this->load->model('System_m');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		date_default_timezone_set('PRC');
	}
	
	//内容列表
	public function article_list() {
		//url
		$config = $this->System_m->get_id_siteInfo(1);
		$data['url'] = $config['domainName'];
		//分页
		$config['base_url'] = base_url('article/article_list');
		$config['total_rows'] = $this->db->count_all('my_article');//总页码
		$config['per_page'] = 10;//每一页的数量
		$config['uri_segment'] = 3;// 表示第 3 段 URL 为当前页数，如 index.php/控制器/方法/页数，如果表示当前页的 URL 段不是第 3 段，请修改成需要的数值。
		$config['num_links'] = 2;
		//关闭标签
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = '</ul>';
		//数字html
		$config['num_tag_open'] ='<li>';
		$config['num_tag_close']='</li>';
		//当前页html
		$config['cur_tag_open'] ="<li class='active'><a href='javascript:void(0);'>";
		$config['cur_tag_close'] ="</a></li>";
		//上一页下一页html
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_tag_open']='<li>';
		$config['next_tag_close']='</li>';
		$config['prev_tag_open']='<li>';
		$config['prev_tag_close']='</li>';
		$config['next_link'] = '下一页';
		$config['prev_link'] = '上一页';
		$this->pagination->initialize($config);
		
		$data['title']="所有文章列表";
		$data['article_list']=$this->Article_m->get_page_list($config['per_page'],$this->uri->segment(3));
		//分类列表分页
		if($data['article_list']){
			$this->_template('article_list',$data);
		}else{
			$data['article_list']=array();
			$this->_template('article_list',$data);
		}
		
	}
	
	//编辑
	public function editor_article($id = '') {
		$id = $this->uri->segment(3);
		$data['artArr'] = $this->Article_m->get_id_article($id);
		$this->_template('article_editor',$data);
	}
	
	public function updata_article(){
		if($_POST){
			$id=trim($this->input->post('id',TRUE));
		    $name = $this->input->post('name',TRUE);
		    $title = $this->input->post('title',TRUE);
		    $content = $this->input->post('content',TRUE);
		    $good = $this->input->post('good',TRUE);
		    $bad = $this->input->post('bad',TRUE);
		    
		    $artArr=array(
		        "name"=>$name,
		        "title"=>$title,
		        "content"=>$content,
		        "good"=>$good,
		        "bad"=>$bad
		    );
		    
			//表单预处理验证规则
			$rule=array(
					array(
						'field'=>'name',
						'rules'=>'trim|required'
					),
    			    array(
    			        'field'=>'title',
    			        'rules'=>'trim|required'
    			    ),
    			    array(
    			        'field'=>'content',
    			        'rules'=>'trim|required'
    			    ),
    			    array(
    			        'field'=>'good',
    			        'rules'=>'trim|required'
    			    ),
    			    array(
    			        'field'=>'bad',
    			        'rules'=>'trim|required'
    			    )
			);
			$this->form_validation->set_rules($rule);
			if ($this->form_validation->run() == FALSE){
				$this->formTips("添加失败","表单填写不符合要求！修改失败:".validation_errors(),'article/article_list');
			}else{
				$query = $this->Article_m->updata_article($id,$artArr);
				//提交数据
				if($query>0){
					$this->formTips("保存成功","保存成功",'article/article_list');
				}else{
					$this->formTips("保存失败","保存失败",'article/article_list');
				};
			}
		}else {
			echo "POST出错";
		}
	}
	
	//删除
	public function delete_article() {
		$id = $this->uri->segment(3);
		if($this->Article_m->del_article($id)>0){
			$this->formTips("删除成功","删除成功",'article/article_list');
		}else{
			$this->formTips("删除失败","删除失败",'article/article_list');
		};
	}
	
    //批量删除
	public function deleteAll(){
		$arr=array();
		$arr=$this->input->post('id');
		foreach($arr as $value){
			$query=$this->Article_m->del_article($value);
		}
		if($query>0){
		    $this->formTips("删除成功","删除成功",'Article/article_list/');
		}else{
		    $this->formTips("删除失败","删除失败",'Article/article_list/');
		};
	}
}
