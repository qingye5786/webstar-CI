<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Article_m extends CI_Model{
	
	private $tableName;
	
	public function __construct()
	{
		parent::__construct();
		$this->tableName = (isset($arr['tableName'])) ? $arr['tableName'] : 'my_article';
	}
	//添加文章
	public function insert($data){
		$this->db->insert($this->tableName,$data);
		return $this->db->affected_rows();
	}
	//查询所有文章列表
	public function get_all_list(){
		$query=$this->db->get($this->tableName);
		return $query->result_array();
	}
	//查询文章分页
	public function get_page_list($num, $offset = '') {
		$this->db->order_by("date", "desc");
		$query = $this->db->get($this->tableName, $num, $offset);
		return $query->result_array();
	}
	//查询所有文章列表
	public function get_all_list_limit($num, $offset=''){
		$this->db->order_by("pubdate", "desc");
		$query = $this->db->get($this->tableName, $num, $offset);
		return $query->result_array();
	}
	//查询id的文章
	public function get_id_article($id){
		$query = $this->db->get_where($this->tableName,array('id' => $id));
		return $query->row_array();
	}
	
	//更新数据
	public function updata_article($id,$arr){
		$this->db->where('id',$id);
		$this->db->update($this->tableName,$arr);
		return $this->db->affected_rows();
	}
	//删除文章
	public function del_article($id){
		$this->db->delete($this->tableName, array('id' => $id)); 
		return $this->db->affected_rows();
	}
	//条件查询
	public function select_where($condition="`att`='p'",$offset=0,$num=10){
		$query=$this->db->query("SELECT * FROM `my_article` WHERE $condition ORDER BY `date` desc LIMIT $offset,$num");
		return $query->result_array();
	}
	//设置查询条件
	function setWhere($getwhere){
		if(is_array($getwhere)){
			foreach($getwhere as $key=>$where){
				if($key=='findinset'){
					$this->db->where("1","1 AND FIND_IN_SET($where)",FALSE);
					continue;
				}
				if(is_array($where)){
					$this->db->where_in($key, $where);//检索条件 键名为$key的所有值 sql方法中的 in方法
				}else{
					$this->db->where($key,$where);
				}
			}
		}else{
			$this->db->where($getwhere);
		}
	}
	//统计条件影响的行数
	public function get_where_num($getwhere=''){
		$table = $this->tableName;
		if($getwhere){
			$this->setWhere($getwhere);
		}
		return $this->db->count_all_results($table);
	}
	//查询字段 $getWhere string
	public function select_list($getWhere,$limit=10, $offset=0){	
		$this->db->select($getWhere);
		$query= $this->db->get($this->tableName,$limit, $offset);
		return $query->result();
	}
}
?>