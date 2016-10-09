<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <base href="<?php echo base_url().TPL_NAME.'/'.ADMIN_THEME.'/'; ?>;"/>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="<?php echo base_url()?>" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo base_url('system')?>">首页</a></li>
                <li><a target="_blank" href="<?php echo $this->siteUrl;?>" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="<?php echo base_url('user/get_user')?>">修改资料</a></li>
                <li><a href="<?php echo base_url('login/loginOut')?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>留言管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo base_url('article/article_list')?>"><i class="icon-font">&#xe008;</i>管理留言</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo base_url('system/site_info')?>"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        <?php if($this->uri->rsegment(1) != 'module'): ?>
    	<?php $this->load->view(isset($tpl) && $tpl ? $tpl : 'sys_home');?>
        <?php else: ?>
        <?php if(!isset($msg)){echo $content;}else{$this->load->view($tpl);} ?>
        <?php endif; ?>
    </div>
    <!--/main-->
</div>
</body>
</html>