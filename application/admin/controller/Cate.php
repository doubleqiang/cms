<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Cate extends Controller
{
    public function lst()
    {
    	$config=model('Config');
    	 $cate=model('Cate');
        $cateres=$cate->cateTree();
        $this->assign('cateres',$cateres);
        //栏目排序
        if(request()->isPost()){
            $data=$_POST;
            //halt($data);
            foreach ($data['cate_sort'] as $k => $v) {
                Db::table('cms_cate')->where('cate_id',$k)->update(['cate_sort'=>$v]);

            }
            $this->success('栏目排序成功','lst');
        }
       return $this->fetch();
    }

     public function add()
    {

        $cate=model('Cate');
        $cateres=$cate->cateTree();
        $this->assign('cateres',$cateres);
    	if(request()->isPost()){
    		$data=$_POST;   
            //halt($data); 		
    		$res=$cate->add($data);    		
    		if($res['valid']){
    			$this->success($res['msg'],'lst');
    		}else{
    			$this->error($res['msg']);
    		}
    	}
       return $this->fetch();
    }


     public function edit($cate_id)
    {
    	$cate=model('Cate');
        $cateres=$cate->cateTree();
        $this->assign('cateres',$cateres);
    	$cates=$cate->where('cate_id',$cate_id)->find();
        $this->assign('cates',$cates);
    	if(request()->isPost()){
    		$data=$_POST;
            //如果上传了新图片则删除旧图片
            if($cates['cate_img']!=''&&$cates['cate_img']!=$data['cate_img']){
                $imgurl=config('cmspath').$cates['cate_img'];
                 if(file_exists($imgurl)){
                     unlink($imgurl);
                 }
               
            }    		
    		$res=$cate->edit($data);    		
    		if($res['valid']){
    			$this->success($res['msg'],'lst');
    		}else{
    			$this->error($res['msg']);
    		}
    	}
       return $this->fetch();
    }


    public function del($cate_id){
    	$cate=model('Cate');        
        $res=$cate->del($cate_id);
    	if($res['valid']){
                $this->success($res['msg'],'lst');
            }else{
                $this->error($res['msg']);
            }
    }



    //uploadify插件上传图片处理
    public function uploadify(){
                $file = request()->file('cate_img');
                    //halt($file);
                $info = $file->move( './uploads/cate');
                if($info){
                    $value='/uploads/cate/'.$info->getSaveName();
                     echo $value;
                }
                else{        
                    echo $file->getError();
                    }
    }


    //ajax撤销图片
    public function delimg(){
        if(request()->isAjax()){
            $data=$_POST;
            $imgurl=config('cmspath').$data['imgurl'];
            if(file_exists($imgurl))
                {
                    unlink($imgurl);
                     echo 1;
                }else
                {
                     echo 0;
                }
            }
    }


    //修改时ajax撤销图片，并删除数据库记录
    public function delimg2(){
        if(request()->isAjax()){
            $data=$_POST;
            $imgurl=config('cmspath').$data['imgurl'];
            if(file_exists($imgurl))
                {
                    Db::table('cms_cate')->where('cate_img',$data['imgurl'])->update(['cate_img'=>'']);
                    unlink($imgurl);
                     echo 1;
                }else
                {
                     echo 0;
                }
            }
    }

    //ajax修改栏目显示状态
    public function changeison(){
        if(request()->isAjax()){
            $data=$_POST;
        $cate=Db::table('cms_cate')->where('cate_id',$data['cate_id'])->field('cate_ison')->find(); 
        if($cate['cate_ison']==0){
            Db::table('cms_cate')->where('cate_id',$data['cate_id'])->update(['cate_ison'=>1]); 
            return 1;
        }else{
            Db::table('cms_cate')->where('cate_id',$data['cate_id'])->update(['cate_ison'=>0]); 
            return 0;
        }
    }else{

       $this->error('非法请求'); 
    }
    }
   
}
