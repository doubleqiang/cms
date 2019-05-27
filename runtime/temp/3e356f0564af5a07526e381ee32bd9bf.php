<?php /*a:3:{s:58:"D:\wamp\www\cms\application\admin\view\config\options.html";i:1558947859;s:55:"D:\wamp\www\cms\application\admin\view\common\head.html";i:1558588993;s:55:"D:\wamp\www\cms\application\admin\view\common\left.html";i:1558589964;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>系统管理-企业后台</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="<?php echo htmlentities(app('config')->get('__STATIC__')); ?>/admin/style/bootstrap.css" rel="stylesheet">
    <link href="<?php echo htmlentities(app('config')->get('__STATIC__')); ?>/admin/style/font-awesome.css" rel="stylesheet">
    <link href="<?php echo htmlentities(app('config')->get('__STATIC__')); ?>/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="<?php echo htmlentities(app('config')->get('__STATIC__')); ?>/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="<?php echo htmlentities(app('config')->get('__STATIC__')); ?>/admin/style/demo.css" rel="stylesheet">
    <link href="<?php echo htmlentities(app('config')->get('__STATIC__')); ?>/admin/style/typicons.css" rel="stylesheet">
    <link href="<?php echo htmlentities(app('config')->get('__STATIC__')); ?>/admin/style/animate.css" rel="stylesheet">

    <!--百度编辑器-->
    <script type="text/javascript" src="<?php echo htmlentities(app('config')->get('__STATIC__')); ?>/admin/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="<?php echo htmlentities(app('config')->get('__STATIC__')); ?>/admin/ueditor/ueditor.all.min.js"></script>
    
</head>
<body>
	<!-- 头部 -->
	
	<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand" style="margin-top:10px; ">
                   cms后台
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">

                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->
	


	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
           
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->

                                        <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>

                            <span class="menu-text">
                                分类管理
                            </span>

                            <i class="menu-expand"></i>
                        </a>
                            <ul class="submenu">
                             <li>
                                    <a href="<?php echo url('cate/lst'); ?>">
                                    <span class="menu-text">
                                       分类列表
                                    </span>
                                     <i class="menu-expand"></i>
                                                    </a>
                              </li>

                              </ul>
                                        </li>
                                        <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>

                            <span class="menu-text">
                                文档管理                            </span>

                            <i class="menu-expand"></i>
                        </a>
                                                <ul class="submenu">
                                                        <li>
                                <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                                                            </li>
                            
                        </ul>                            
                                            </li>


                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>

                            <span class="menu-text">
                                留言管理
                            </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('liuyan/lst'); ?>">
                                    <span class="menu-text">
                                       留言列表
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>

                            <span class="menu-text">
                                小工具管理
                            </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('widget/lst'); ?>">
                                    <span class="menu-text">
                                       小工具列表
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>

                            <span class="menu-text">
                                友链管理
                            </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('link/lst'); ?>">
                                    <span class="menu-text">
                                       友链列表
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>

                        </ul>
                    </li>


                                        <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>

                            <span class="menu-text">
                                系统                            </span>

                            <i class="menu-expand"></i>
                        </a>
                                                <ul class="submenu">
                                                        <li>
                                <a href="<?php echo url('config/lst'); ?>">
                                    <span class="menu-text">
                                        配置列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                                                            </li>
                                                        <li>
                                <a href="<?php echo url('config/options'); ?>">
                                    <span class="menu-text">
                                        配置管理                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                                                            </li>

                            
                        </ul>                            
                                            </li>                        
                    
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->

            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li>
                        <a href="#">系统管理</a>
                    </li>
                                        <li class="active">系统配置</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
            <div class="widget-main ">
                <div class="tabbable">
                    <ul class="nav nav-tabs tabs-flat" id="myTab11">
                        <li class="active">
                            <a data-toggle="tab" href="#home11">
                               基本信息配置
                            </a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#profile11">
                               联系方式
                            </a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#profile12">
                                SEO配置
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content tabs-flat">

                        
                        <div id="home11" class="tab-pane active">
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <?php if(is_array($conres) || $conres instanceof \think\Collection || $conres instanceof \think\Paginator): $i = 0; $__LIST__ = $conres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(($vo['cf_type']==1)): switch($vo['dt_type']): case "1": ?>
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <div class="col-sm-6">
                                                <input class="form-control"  value="<?php echo htmlentities($vo['cf_value']); ?>" name="<?php echo htmlentities($vo['cf_ename']); ?>" required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                    <?php break; case "2": ?>
                                     <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <div class="col-sm-6">
                                                <textarea name="<?php echo htmlentities($vo['cf_ename']); ?>" cols="110" rows="5"><?php echo htmlentities($vo['cf_value']); ?></textarea>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                    <?php break; case "3": ?>
                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <div class="col-sm-6">
                                                <select name="<?php echo htmlentities($vo['cf_ename']); ?>" style="width: 100%;">
                                                    <option selected="selected" value="">请选择</option>
                                                    <?php 
                                                    $arr=explode(',',$vo['cf_values']);                                                    
                                                    foreach($arr as $v){
                                                    echo "<option ";
                                                    if($vo['cf_value']==$v){echo "selected=selected";}
                                                    echo " value='".$v."'>".$v."</option>";
                                                   
                                                }
                                                    
                                                     ?>
                                                </select>
                                            </div>
                                        </div>
                                    <?php break; case "4": ?>
                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <?php 
                                                    $arr=explode(',',$vo['cf_values']);   
                                                    $arr2=explode(',',$vo['cf_value']);                                                  
                                                    foreach($arr as $v){                                                  
                                                  
                                                    
                                           echo "<div class='col-sm-1'>
                                                <div class='checkbox'>
                                                    <label>
                                                        <input name='$vo[cf_ename][]' value='".$v."' type='checkbox' ";
                                              foreach($arr2 as $v2){
                                              if($v==$v2){echo "checked=checked"; }
                                          }

                                                        echo ">
                                                        <span class='text'>".$v."</span>
                                                    </label>
                                                </div>
                                            </div>";
                                            }
                                                  
                                           ?>

                                            
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                    
                                    <?php break; case "5": ?>
                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <?php 
                                                    $arr=explode(',',$vo['cf_values']);                                                    
                                                    foreach($arr as $v){
                                            echo "<div class='col-sm-1'>
                                                <div class='radio'>
                                                    <label>
                                                        <input name='$vo[cf_ename]' value='".$v."' class='inverted' type='radio'";
                                                         if($v==$vo['cf_value']){echo "checked='checked'";}
                                                        echo ">
                                                        <span class='text'>".$v."</span>
                                                    </label>
                                                </div>
                                            </div>";
                                            }
                                                  
                                           ?>
                                                                                 
                                            
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                    <?php break; case "6": ?>
                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <div class="col-sm-6">
                                                <input name="<?php echo htmlentities($vo['cf_ename']); ?>" type="file" />
                                                <?php if(($vo['cf_value']!='')): ?>
                                                <img src="http://127.0.0.1/cms/public<?php echo htmlentities($vo['cf_value']); ?>" width="80px" height="80px">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php break; ?>
                                        <?php endswitch; ?>
                                         <?php endif; ?>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>                               

                                        
                                   


                                </div>
                            </div>
                        </div>
                       

                        
                        <div id="profile11" class="tab-pane">
                           <?php if(is_array($conres) || $conres instanceof \think\Collection || $conres instanceof \think\Paginator): $i = 0; $__LIST__ = $conres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(($vo['cf_type']==2)): switch($vo['dt_type']): case "1": ?>
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <div class="col-sm-6">
                                                <input class="form-control"  value="<?php echo htmlentities($vo['cf_value']); ?>" name="<?php echo htmlentities($vo['cf_ename']); ?>" required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                    <?php break; case "2": ?>
                                     <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <div class="col-sm-6">
                                                <textarea name="<?php echo htmlentities($vo['cf_ename']); ?>" cols="110" rows="5"><?php echo htmlentities($vo['cf_value']); ?></textarea>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                    <?php break; case "3": ?>
                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <div class="col-sm-6">
                                                <select name="<?php echo htmlentities($vo['cf_ename']); ?>" style="width: 100%;">
                                                    <option selected="selected" value="">请选择</option>
                                                    <?php 
                                                    $arr=explode(',',$vo['cf_values']);                                                    
                                                    foreach($arr as $v){
                                                    echo "<option ";
                                                    if($vo['cf_value']==$v){echo "selected=selected";}
                                                    echo " value='".$v."'>".$v."</option>";
                                                   
                                                }
                                                    
                                                     ?>
                                                </select>
                                            </div>
                                        </div>
                                    <?php break; case "4": ?>
                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <?php 
                                                    $arr=explode(',',$vo['cf_values']);   
                                                    $arr2=explode(',',$vo['cf_value']);                                                  
                                                    foreach($arr as $v){                                                  
                                                  
                                                    
                                           echo "<div class='col-sm-1'>
                                                <div class='checkbox'>
                                                    <label>
                                                        <input name='$vo[cf_ename][]' value='".$v."' type='checkbox' ";
                                              foreach($arr2 as $v2){
                                              if($v==$v2){echo "checked=checked"; }
                                          }

                                                        echo ">
                                                        <span class='text'>".$v."</span>
                                                    </label>
                                                </div>
                                            </div>";
                                            }
                                                  
                                           ?>

                                            
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                    
                                    <?php break; case "5": ?>
                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <?php 
                                                    $arr=explode(',',$vo['cf_values']);                                                    
                                                    foreach($arr as $v){
                                            echo "<div class='col-sm-1'>
                                                <div class='radio'>
                                                    <label>
                                                        <input name='$vo[cf_ename]' value='".$v."' class='inverted' type='radio'";
                                                         if($v==$vo['cf_value']){echo "checked='checked'";}
                                                        echo ">
                                                        <span class='text'>".$v."</span>
                                                    </label>
                                                </div>
                                            </div>";
                                            }
                                                  
                                           ?>
                                                                                 
                                            
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                    <?php break; case "6": ?>
                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <div class="col-sm-6">
                                                <input name="<?php echo htmlentities($vo['cf_ename']); ?>" type="file" />
                                                <?php if(($vo['cf_value']!='')): ?>
                                                <img src="http://127.0.0.1/cms/public<?php echo htmlentities($vo['cf_value']); ?>" width="80px" height="80px">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php break; ?>
                                        <?php endswitch; ?>
                                         <?php endif; ?>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>             
                        </div>
                        
                        
                        <div id="profile12" class="tab-pane">
                            <?php if(is_array($conres) || $conres instanceof \think\Collection || $conres instanceof \think\Paginator): $i = 0; $__LIST__ = $conres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(($vo['cf_type']==3)): switch($vo['dt_type']): case "1": ?>
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <div class="col-sm-6">
                                                <input class="form-control"  value="<?php echo htmlentities($vo['cf_value']); ?>" name="<?php echo htmlentities($vo['cf_ename']); ?>" required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                    <?php break; case "2": ?>
                                     <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <div class="col-sm-6">
                                                <textarea name="<?php echo htmlentities($vo['cf_ename']); ?>" cols="110" rows="5"><?php echo htmlentities($vo['cf_value']); ?></textarea>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                    <?php break; case "3": ?>
                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <div class="col-sm-6">
                                                <select name="<?php echo htmlentities($vo['cf_ename']); ?>" style="width: 100%;">
                                                    <option selected="selected" value="">请选择</option>
                                                    <?php 
                                                    $arr=explode(',',$vo['cf_values']);                                                    
                                                    foreach($arr as $v){
                                                    echo "<option ";
                                                    if($vo['cf_value']==$v){echo "selected=selected";}
                                                    echo " value='".$v."'>".$v."</option>";
                                                   
                                                }
                                                    
                                                     ?>
                                                </select>
                                            </div>
                                        </div>
                                    <?php break; case "4": ?>
                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <?php 
                                                    $arr=explode(',',$vo['cf_values']);   
                                                    $arr2=explode(',',$vo['cf_value']);                                                  
                                                    foreach($arr as $v){                                                  
                                                  
                                                    
                                           echo "<div class='col-sm-1'>
                                                <div class='checkbox'>
                                                    <label>
                                                        <input name='$vo[cf_ename][]' value='".$v."' type='checkbox' ";
                                              foreach($arr2 as $v2){
                                              if($v==$v2){echo "checked=checked"; }
                                          }

                                                        echo ">
                                                        <span class='text'>".$v."</span>
                                                    </label>
                                                </div>
                                            </div>";
                                            }
                                                  
                                           ?>

                                            
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                    
                                    <?php break; case "5": ?>
                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <?php 
                                                    $arr=explode(',',$vo['cf_values']);                                                    
                                                    foreach($arr as $v){
                                            echo "<div class='col-sm-1'>
                                                <div class='radio'>
                                                    <label>
                                                        <input name='$vo[cf_ename]' value='".$v."' class='inverted' type='radio'";
                                                         if($v==$vo['cf_value']){echo "checked='checked'";}
                                                        echo ">
                                                        <span class='text'>".$v."</span>
                                                    </label>
                                                </div>
                                            </div>";
                                            }
                                                  
                                           ?>
                                                                                 
                                            
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                    <?php break; case "6": ?>
                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right"><?php echo htmlentities($vo['cf_cname']); ?></label>
                                            <div class="col-sm-6">
                                                <input name="<?php echo htmlentities($vo['cf_ename']); ?>" type="file" />
                                                <?php if(($vo['cf_value']!='')): ?>
                                                <img src="http://127.0.0.1/cms/public<?php echo htmlentities($vo['cf_value']); ?>" width="80px" height="80px">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php break; ?>
                                        <?php endswitch; ?>
                                         <?php endif; ?>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>             
                        </div>
                        



                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">保存信息</button>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

    <script src="<?php echo htmlentities(app('config')->get('__STATIC__')); ?>/admin/style/jquery_002.js"></script>
    <script src="<?php echo htmlentities(app('config')->get('__STATIC__')); ?>/admin/style/bootstrap.js"></script>
    <script src="<?php echo htmlentities(app('config')->get('__STATIC__')); ?>/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="<?php echo htmlentities(app('config')->get('__STATIC__')); ?>/admin/style/beyond.js"></script>

    <script type="text/javascript">
        UE.getEditor('cate_content',{    //content为要编辑的textarea的id
            initialFrameWidth: 900,   //初始化宽度
            initialFrameHeight: 500,   //初始化高度
        });
    </script>


</body></html>