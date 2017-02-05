<?php /* Smarty version Smarty-3.0.7, created on 2016-11-25 11:34:20
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Index\login.html" */ ?>
<?php /*%%SmartyHeaderCode:327245837b13c301a13-58079087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d935818bc625f4f3546df434e1940bfcb11aa06' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Index\\login.html',
      1 => 1480042648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '327245837b13c301a13-58079087',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
if (!is_callable('smarty_function_brave_error_hint')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_error_hint.php';
?><div class="row">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="login-container">
      <div class="center">
        <h1>
          <i class="ace-icon fa fa-gear green"></i>
          <span class="red"></span>
          <span class="white" id="id-text2"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page')->value['title']);?>
</span>
        </h1>
        <h4 class="blue" id="id-company-text">&copy; 四川谛达诺科技有限公司</h4>
      </div>

      <div class="space-6"></div>

      <div class="position-relative">
        <div id="login-box" class="login-box visible widget-box no-border">
          <div class="widget-body">
            <div class="widget-main">
              <h4 class="header blue lighter bigger">
                <i class="ace-icon fa fa-coffee green"></i>
                请输入用户名和密码登录
              </h4>

              <div class="space-6"></div>

              <form name="login_form" method="post" action="?c=index&a=login" class="form-signin">
                <fieldset>
                  <label class="block clearfix">
                    <span class="block input-icon input-icon-right">
                      <input type="username" name="login[login]" id="inputUserName" class="form-control" placeholder="用户名" required autofocus value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('login')->value['login']);?>
">
                      <i class="ace-icon fa fa-user"></i>
                    </span>
                  </label>

                  <label class="block clearfix">
                    <span class="block input-icon input-icon-right">
                      <input type="password" name="login[password]" id="inputPassword" class="form-control" placeholder="密码" required value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('login')->value['password']);?>
">
                      <i class="ace-icon fa fa-lock"></i>
                    </span>
                  </label>

                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'login'),$_smarty_tpl);?>


                  <div class="space"></div>

                  <div class="clearfix">
                    <!--
                    <label class="inline">
                      <input type="checkbox" class="ace" />
                      <span class="lbl"> Remember Me</span>
                    </label>
                    -->

                    <button type="submit" class="width-35 pull-right btn btn-sm btn-primary" name="complete" value="登录">
                      <i class="ace-icon fa fa-key"></i>
                      <span class="bigger-110">登录</span>
                    </button>
                  </div>

                  <div class="space-4"></div>
                </fieldset>
              </form>

              <div class="space-6"></div>

            </div><!-- /.widget-main -->

          </div><!-- /.widget-body -->
        </div><!-- /.login-box -->

    </div>
  </div><!-- /.col -->
</div><!-- /.row -->