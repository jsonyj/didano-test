<?php /* Smarty version Smarty-3.0.7, created on 2017-01-17 17:34:19
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Layout\default.html" */ ?>
<?php /*%%SmartyHeaderCode:8846587de51b221290-70336006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ae5da9af408a31b1d10b2cb0ca97b6704db5df7' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Layout\\default.html',
      1 => 1484644579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8846587de51b221290-70336006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page')->value['title']);?>
</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="css/dropzone.min.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />
    <link href="css/bootstrap-timepicker.min.css" type="text/css" rel="stylesheet" />
    <link href="css/bootstrap-dialog.min.css" type="text/css" rel="stylesheet" />
    <link href="umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="css/daterangepicker.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <link id="ace-skins-stylesheet" type="text/css" rel="stylesheet" href="css/ace-skins.min.css">

    <link id="common-stylesheet" type="text/css" rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/addone.css" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="js/jquery.2.1.1.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
    <script src="js/jquery.1.11.1.min.js"></script>
    <![endif]-->

    <!--[if !IE]> -->
    <script type="text/javascript">
      window.jQuery || document.write("<script src='js/jquery.min.js'>"+"<"+"/script>");
    </script>

    <!-- 时间插件 -->
    <script src="js/jquery-ui-timepicker-addon.js"></script>
    <script src="js/jquery-ui-timepicker-zh-CN.js"></script>
    <script src="js/jquery.ui.datepicker-zh-CN.js"></script>
    <link rel="stylesheet" href="css/jquery-ui-timepicker-addon.css" />

    <!-- <![endif]-->

    <!--[if IE]>
    <script type="text/javascript">
    window.jQuery || document.write("<script src='js/jquery1x.min.js'>"+"<"+"/script>");
    </script>
    <![endif]-->
    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->
    <script src="js/dropzone.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="umeditor/umeditor.min.js"></script>

    <!--[if lte IE 8]>
      <script src="assets/js/excanvas.min.js"></script>
    <![endif]-->
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/bootstrap-datetimepicker.zh-CN.js"></script>
    <script src="js/bootstrap-dialog.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-timepicker.js"></script>
    <script src="js/moment.locales.min.js" charset="UTF-8"></script>

    <script src="js/daterangepicker.js"></script>
    <script src="js/moment.js"></script>

    <script src="js/docs.min.js"></script>

    <!-- ace scripts -->
    <script src="js/ace-elements.min.js"></script>
    <script src="js/ace.min.js"></script>

    <script src="js/common.js"></script>

  </head>

  <body class="no-skin">
    <div id="navbar" class="navbar navbar-default">
      <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
      </script>

      <div class="navbar-container" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
          <span class="sr-only">Toggle sidebar</span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
          <a href="?c=index" class="navbar-brand">
            <small>
              <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page')->value['title']);?>
<span style="font-size:16px; margin-left:10px">（<?php echo smarty_modifier_escape($_SESSION[@SESSION_USER]['school_title']);?>
）</span>
            </small>
          </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
          <ul class="nav ace-nav">

            <li class="light-blue">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                <span class="user-info">
                  <small><span class="glyphicon glyphicon-user"></span> 欢迎,</small>
                  <?php echo smarty_modifier_escape($_SESSION[@SESSION_USER]['name']);?>

                </span>

                <i class="ace-icon fa fa-caret-down"></i>
              </a>

              <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                <li><a href="?c=index&a=change"><span class="glyphicon glyphicon-edit"></span> 修改密码</a></li>
                <li><a href="?c=index&a=logout"><span class="glyphicon glyphicon-log-out"></span> 退出登录</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- /.navbar-container -->
    </div>

    <div class="main-container" id="main-container">
      <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
      </script>

      <div id="sidebar" class="sidebar responsive">
        <script type="text/javascript">
          try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
        </script>

        <ul class="nav nav-list">
          <li class="<?php if ('index'==$_GET['c']){?>active open<?php }?>">
            <a href="?c=index">
              <i class="menu-icon fa fa-home"></i>
              <span class="menu-text"> 首页 </span>
            </a>

            <b class="arrow"></b>
          </li>

          <?php echo $_smarty_tpl->getVariable('menu')->value;?>

        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
          <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>

        <script type="text/javascript">
          try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
        </script>
      </div>

      <div class="main-content">
        <div class="main-content-inner">
        <?php echo $_smarty_tpl->getVariable('main')->value;?>

        </div>
      </div><!-- /.main-content -->

      <div class="footer">
        <div class="footer-inner">
          <div class="footer-content">
            <span class="bigger-120">
              <span class="black bolder"></span>
              小诺机器人 &copy; 2015-2016
            </span>
          </div>
        </div>
      </div>

      <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
      </a>
    </div><!-- /.main-container -->

  </body>
</html>
