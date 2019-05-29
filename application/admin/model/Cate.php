<?php
namespace app\admin\model;
use think\Model;
class Cate extends Model
{
	
	protected $pk="cate_id";
	protected $table="cms_cate";
    public function add($data)
    {
      $cate=validate('Cate');		
        if($cate->check($data)){
			
			if($this->save($data)){
				return ['valid'=>1,'msg'=>'栏目添加成功！'];
			}else{
				return ['valid'=>0,'msg'=>'栏目添加失败！'];
			}
		}else{
			return ['valid'=>0,'msg'=>$config->getError()];
		}
    }

	public function edit($data)
    {
      $cate=validate('Cate');		
        if($cate->check($data)){
			
			if($this->save($data,$data['cate_id'])){
				return ['valid'=>1,'msg'=>'栏目修改成功！'];
			}else{
				return ['valid'=>0,'msg'=>'栏目修改失败！'];
			}
		}else{
			return ['valid'=>0,'msg'=>$config->getError()];
		}
    }


    public function del($cate_id)
    {
     
        $sons=$this->getsons($cate_id);
        array_push($sons,$cate_id);
			
			if($this->where('cate_id','in',$sons)->delete()){
				return ['valid'=>1,'msg'=>'栏目删除成功！'];
			}else{
				return ['valid'=>0,'msg'=>'栏目删除失败！'];
			}

	}
    

    //无限级栏目排序
    public function cateTree()
	{
		$data = $this->order('cate_sort asc')->select();
		return $this->_reSort($data);
	}
	// 递归对有的分类进行重新排序
	private function _reSort($data, $cate_pid=0, $level=0)
	{
		static $ret = array();
		foreach ($data as $k => $v)
		{
			if($v['cate_pid'] == $cate_pid)
			{
				// 把level值放到这个分类里，这样就可以知道这个分类是第几级的
				$v['level'] = $level;
				$ret[] = $v;
				// 再找这个分类的子分类
				$this->_reSort($data, $v['cate_id'], $level+1);
			}
		}
		return $ret;
	}



	//寻找指定栏目的所有下级栏目
	private function getsons($cate_pid){
		static $son=[];
		$sons=$this->where('cate_pid',$cate_pid)->field('cate_id')->select();
		//halt(count($sons));
		if (count($sons)!=0) {			
			foreach ($sons as $v) {
			$son[]=$v['cate_id'];
			$this->getsons($v['cate_id']);
		}
		}
		
		return $son;
	}

   
}
