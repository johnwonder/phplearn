<?php

/*
https://github.com/jifei/BeautifulPHP/blob/master/DataStructures/Tree
*/
class Tree
{
	private $original_list;//
	private $selected_keys;//选中的key

	public $pk;//pk;
	public $parent_key;//
	public $children_key;

	function __construct($pk = 'id',$parent_key='pid',$children_key='children')
	{
		if(!empty($pk) && !empty($parent_key) && !empty($children_key))
		{
			$this->pk = $pk;
			$this->parent_key = $parent_key;
			$this->children_key = $children_key;
		}
	}

    /*
    *装载数据
    *@param $data 完整数据
    *@param null $allowed_data 有权限的数据
    *@param array $selected_keys 选中的key
    */
	public function load($data,$allowed_data = null,$selected_keys = array())
	{
		if(is_array($data)){
			foreach ($data as $k => $v) {
				$this->original_list[$v[$this->pk]]=$v;
			}

			if(is_array($allowed_data) && !empty($allowed_data)){
				foreach ($allowed_data as $k => $v) {
					$this->allowFromChild($v);
				}
			}

			$this->selected_keys = $selected_keys;
		}
	}

    /**
    * 建立树结构
    * @param int $root
    * @return array|bool
    */
	public function buildTree($root = 0){

         if(!$this-> original_list){
         	return false;
         }

         $original_list = $this->original_list;
         $tree = array();//result
         $refer = array();//主键和单元引用
         foreach ($original_list as $k => $v) {
         		if(!isset($v[$this->pk]) || !isset($v[$this->parent_key]) || !isset($v[$this->children_key])){
         			unset($original_list[$k]);
         			continue;
         		}

         		if(in_array($v[$this->pk],$this->selected_keys)){
         			$original_list[$k]['state']['selected'] =true;
         		}
         		$refer[$v[$this->pk]] = &$original_list[$k];
         }

         foreach ($original_list as $k => $v) {
         	if($v[$this->parent_key] == $root){
         		$tree[] = &$original_list[$k];
         	}else{
         		if(isset($refer[$v[$this->parent_key]])){
         			$parent = &$refer[$v[$this->parent_key]];//获取父分类的引用
         			$parent[$this->children_key][] = &$original_list[$k];//在父分类的children中再添加一个引用成员
         		}
         	}
         }

         return $tree;
	}
}


?>