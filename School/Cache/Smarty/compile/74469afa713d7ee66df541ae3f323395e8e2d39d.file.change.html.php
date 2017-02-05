<?php /* Smarty version Smarty-3.0.7, created on 2017-01-16 16:59:13
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Index\change.html" */ ?>
<?php /*%%SmartyHeaderCode:7416587c8b61781652-08939823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74469afa713d7ee66df541ae3f323395e8e2d39d' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Index\\change.html',
      1 => 1480042628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7416587c8b61781652-08939823',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
if (!is_callable('smarty_function_brave_error_hint')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_error_hint.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li class="active">修改密码</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->

        <form name="admin_form" method="post">
          <table class="table table-bordered">
              <tr>
                <th>名称：</th>
                <td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('user')->value['name']);?>
</td>
              </tr>
              <tr>
                <th>登录账号：</th>
                <td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('user')->value['login']);?>
</td>
              </tr>
              <tr>
                <th>登录密码：</th>
                <td>
                  <input type="password" name="form[password]" size="30" class="form-control text" value="" />
                  <label style="margin-top:5px;">
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'password'),$_smarty_tpl);?>

                  <strong>确认密码：</strong></label>
                  <input type="password" name="form[password_confirm]" size="30" class="form-control text" value="" />
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'password_confirm'),$_smarty_tpl);?>

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