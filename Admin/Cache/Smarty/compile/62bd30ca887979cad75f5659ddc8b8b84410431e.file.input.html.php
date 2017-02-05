<?php /* Smarty version Smarty-3.0.7, created on 2016-11-30 11:32:32
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\School\input.html" */ ?>
<?php /*%%SmartyHeaderCode:16541583e48505fb3f1-52202177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62bd30ca887979cad75f5659ddc8b8b84410431e' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\School\\input.html',
      1 => 1480153802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16541583e48505fb3f1-52202177',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
if (!is_callable('smarty_function_brave_error_hint')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_error_hint.php';
if (!is_callable('smarty_function_ace_switch')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.ace_switch.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li>
      <a href="?c=school&=index">学校一览</a>
    </li>
    <li class="active"><?php if ($_GET['id']){?>编辑<?php }else{ ?>新增<?php }?>学校</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->

        <form name="data_form" method="post">
          <table class="table table-bordered table-form">
              <tr>
                <th class="must">名称：</th>
                <td>
                  <input type="text" name="form[title]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['title']);?>
"/>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'title'),$_smarty_tpl);?>

                </td>
              </tr>
              <tr>
                <th class="must">电话：</th>
                <td>
                  <input type="text" name="form[phone]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['phone']);?>
"/>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'phone'),$_smarty_tpl);?>

                </td>
              </tr>
              <tr>
                <th class="must">地址：</th>
                <td>
                  <input type="text" name="form[address]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['address']);?>
"/>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'address'),$_smarty_tpl);?>

                </td>
              </tr>
              <tr>
                <th class="must">超级管理员名称：</th>
                <td>
                  <input type="text" name="form[admin_login]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['admin_login']);?>
"/>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'admin_login'),$_smarty_tpl);?>

                  <span id="helpBlock" class="help-block">学校端管理系统登录使用，如：admin</span>
                </td>
              </tr>
              <tr>
                <th class="<?php if (!$_GET['id']){?>must<?php }?>">超级管理员密码：</th>
                <td>
                  密码：<input type="password" name="form[admin_password]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['admin_password']);?>
"/>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'admin_password'),$_smarty_tpl);?>

                  <br>
                  确认：<input type="password" name="form[admin_password_confirm]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['admin_password_confirm']);?>
"/>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'admin_password_confirm'),$_smarty_tpl);?>

                  <span id="helpBlock" class="help-block">不修改情况下可留空</span>
                </td>
              </tr>
              <tr>
                  <th class="must">有效状态：</th>
                  <td>
                    <?php echo smarty_function_ace_switch(array('name'=>"form[status]",'value'=>$_smarty_tpl->getVariable('form')->value['status'],'code'=>"1"),$_smarty_tpl);?>

                  </td>
              </tr>
              <tr class="option">
                <th></th>
                <td>
                  <input type="submit" class="btn btn-primary" name="complete" value="保存" />
                </td>
              </tr>
          </table>
      </form>

      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->