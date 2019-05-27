<?php
namespace app\admin\validate;

use think\Validate;

class Config extends Validate
{
    protected $rule =   [
        'cf_cname'  => 'require|unique:config',
         'cf_ename'  => 'require|unique:config',
        
    ];
    
    protected $message  =   [
        'cf_cname.require' => '请输入配置中文名称',
        'cf_ename.require' => '请输入配置英文名称',
        'cf_cname.unique' => '该配置已存在',
        'cf_ename.unique' => '该配置已存在',

		
       
    ];
    
}