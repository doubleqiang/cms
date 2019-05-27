<?php /*a:3:{s:55:"D:\wamp\www\cms\application\admin\view\config\edit.html";i:1558932727;s:55:"D:\wamp\www\cms\application\admin\view\common\head.html";i:1558588993;s:55:"D:\wamp\www\cms\application\admin\view\common\left.html";i:1558589964;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>配置管理-企业后台</title>

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
                        <a href="#">配置理</a>
                    </li>
                                        <li class="active">修改配置</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <form class="form-horizontal" role="form" action="" method="post">
            <div class="widget-main ">
                <div class="tabbable">
                    <ul class="nav nav-tabs tabs-flat" id="myTab11">
                        <li class="active">
                            <a data-toggle="tab" href="#home11">
                               修改配置
                            </a>
                        </li>
                       
                    </ul>
                    <div class="tab-content tabs-flat">
                        <div id="home11" class="tab-pane active">
                            <div class="widget-body">
                                <div id="horizontal-form">

                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right">配置中文名称</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" value="<?php echo htmlentities($confs['cf_cname']); ?>"  placeholder="" name="cf_cname" required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                         <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right">配置英文名称</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" value="<?php echo htmlentities($confs['cf_ename']); ?>"  placeholder="" name="cf_ename" required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right">配置值</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" value="<?php echo htmlentities($confs['cf_value']); ?>"  placeholder="" name="cf_value"  type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                         <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right">配置可选值</label>
                                            <div class="col-sm-6">
                                                <textarea name="cf_values" cols="110" rows="5"><?php echo htmlentities($confs['cf_values']); ?></textarea>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>


                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right">配置所属项</label>
                                            <div class="col-sm-6">
                                                <select name="cf_type" style="width: 100%;">
                                                    <option <?php if(($confs['cf_type']==1)): ?> selected="selected"<?php endif; ?> value="1">基本配置</option>
                                                    <option <?php if(($confs['cf_type']==2)): ?> selected="selected"<?php endif; ?>  value="2">联系方式</option>
                                                    <option  <?php if(($confs['cf_type']==3)): ?> selected="selected"<?php endif; ?> value="3">SEO配置</option>                                                   
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label no-padding-right">显示类型</label>
                                            <div class="col-sm-6">
                                                <select name="dt_type" style="width: 100%;">
                                                    <option <?php if(($confs['dt_type']==1)): ?> selected="selected"<?php endif; ?> value="1">文本框</option>
                                                    <option <?php if(($confs['dt_type']==2)): ?> selected="selected"<?php endif; ?>  value="2">文本域</option>
                                                    <option <?php if(($confs['dt_type']==3)): ?> selected="selected"<?php endif; ?>  value="3">下拉菜单</option>
                                                    <option <?php if(($confs['dt_type']==4)): ?> selected="selected"<?php endif; ?>  value="4">复选框</option>
                                                    <option <?php if(($confs['dt_type']==5)): ?> selected="selected"<?php endif; ?>  value="5">单选框</option>
                                                    <option <?php if(($confs['dt_type']==6)): ?> selected="selected"<?php endif; ?>  value="6">附件</option>
                                                   
                                                </select>
                                            </div>
                                        </div>

                                     

                                      

                                    


                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="cf_id" value="<?php echo htmlentities($confs['cf_id']); ?>">
                        
                        
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