<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
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
    	$config=model('Config');
		$conres=$config->select();
    	$this->assign('conres',$conres);
    	if(request()->isPost()){
    		$imgs=$_FILES;
    		//halt($imgs);
    		$data=$_POST;
    		foreach ($data as $k => $v) {
    			if(is_array($v)){
    				$v=implode(',', $v);
    			}
    			Db::table('cms_config')->where('cf_ename',$k)->update(['cf_value'=>$v]);
    		}
    	
    		
    		foreach ($imgs as $k => $v) {
    			//halt($v);
    			if($v['name']!=''){
    				$file = request()->file($k);
    				//halt($file);
    			$info = $file->move( './uploads');
    			if($info){
    				$value='/uploads/'.$info->getSaveName();
    				 Db::table('cms_config')->where('cf_ename',$k)->update(['cf_value'=>$value]);
    			}
    			else{        
          			echo $file->getError();
    				}
    			}
    			
    		}
    		
    		
    	
    	$this->success('配置修改成功');
    	}
       return $this->fetch();
    }

   
}
