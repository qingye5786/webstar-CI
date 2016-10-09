<?php
/**
 * @author chenyanphp@qq.com
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends MY_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->load->model('Article_m');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        date_default_timezone_set('PRC');
    }
    

	public function index() {
	    $data["siteInfo"]=$this->siteInfo();
		$this->load->view('index',$data);
	}
	
	
	public function show() {
		//url
		$config = $this->System_m->get_id_siteInfo(1);
		$data['url'] = $config['domainName'];
		//分页
		$config['base_url'] = base_url('main/show');
		$config['total_rows'] = $this->db->count_all('my_article');//总页码
		$config['per_page'] = 2;//每一页的数量
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
		$data["siteInfo"]=$this->siteInfo();
		//分类列表分页
		$this->load->view('show',$data);
	}
	
	/**
	 * 添加留言
	 */
	public function add() {
	    $data['name'] = $this->input->post('name');
	    $data['title'] = $this->input->post('title');
	    $data['content'] = $this->input->post('content');
	    $data['date'] = time();
	    $query = $this->Article_m->insert($data);
	    //提交数据
	    if($query>0){
	        $this->formTips("提交留言成功","提交留言成功",'main/show');
	    }else{
	        $this->formTips("提交留言失败","提交留言失败",'main/show');
	    };
	}
	
	
	/**
	 * 鲜花
	 */
	public function good() {
		$id = $this->input->post('id');
		$arr = $this->Article_m->get_id_article($id);
		$arr['good'] = $arr['good']+1;
		$query = $this->Article_m->updata_article($id,$arr);
		if($query>0) {
			echo $arr['good'];
		}
	}
	
	/**
	 * 鸡蛋
	 */
	public function bad() {
		$id = $this->input->post('id');
		$arr = $this->Article_m->get_id_article($id);
		$arr['bad'] = $arr['bad']+1;
		$query = $this->Article_m->updata_article($id,$arr);
		if($query>0) {
			echo $arr['bad'];
		}
	}
}
