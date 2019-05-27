<?php
namespace app\admin\controller;
use think\Controller;
class Config extends Controller
{
    public function lst()
    {
    	$config=model('Config');
    	$conres=$config->select();
    	$this->assign('conres',$conres);
       return $this->fetch();
    }

     public function add()
    {
    	if(request()->isPost()){
    		$data=$_POST;
    		$config=model('Config');
    		$res=$config->add($data);
    		$data['cf_values']=str_replace('，', ',', $data['cf_values']);
    		if($res['valid']){
    			$this->success($res['msg'],'lst');
    		}else{
    			$this->error($res['msg']);
    		}
    	}
       return $this->fetch();
    }


     public function edit($cf_id)
    {
    	$config=model('Config');
    	$confs=$config->where('cf_id',$cf_id)->find();
    	//halt($confs);
    	$this->assign('confs',$confs);
    	if(request()->isPost()){
    		$data=$_POST;    		
    		$res=$config->edit($data);
    		$data['cf_values']=str_replace('，', ',', $data['cf_values']);
    		if($res['valid']){
    			$this->success($res['msg'],'lst');
    		}else{
    			$this->error($res['msg']);
    		}
    	}
       return $this->fetch();
    }

    public function del($cf_id){
    	$config=model('Config');
    	if($config->where('cf_id',$cf_id)->delete()){
    		$this->success('配置项删除成功','lst');
    	}else{
    			$this->error('配置项删除失败，请重试');
    		}
    }
     public function options()
    
    {
       return $this->fetch();
    }

   
}
