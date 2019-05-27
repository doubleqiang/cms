<?php
namespace app\admin\controller;
use think\Controller;
class Config extends Controller
{
    public function lst()
    {
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


     public function edit()
    {
       return $this->fetch();
    }

     public function options()
    {
       return $this->fetch();
    }

   
}
