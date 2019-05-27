<?php
namespace app\admin\model;
use think\Model;
class Config extends Model
{
	
	protected $pk="cf_id";
	protected $table="cms_config";
    public function add($data)
    {
      $config=validate('Config');		
        if($config->check($data)){
			
			if($this->save($data)){
				return ['valid'=>1,'msg'=>'配置添加成功！'];
			}else{
				return ['valid'=>0,'msg'=>'配置添加失败！'];
			}
		}else{
			return ['valid'=>0,'msg'=>$config->getError()];
		}
    }

   
}
