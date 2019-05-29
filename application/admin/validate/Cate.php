<?php
namespace app\admin\validate;

use think\Validate;

class Cate extends Validate
{
    protected $rule =   [
        'cate_name'  => 'require',
         'cate_template_list'  => 'require',
         'cate_template_content'  => 'require',
         'cate_template_article'  => 'require',
        
    ];
    
    protected $message  =   [
        'cate_name.require' => '请输入栏目名称',
        'cate_template_list.require' => '请输入列表模板',
        'cate_template_content.require' => '请输入封面模板',
        'cate_template_article.require' => '请输入内容页模板',	
       
    ];
    
}