<?php /* Smarty version Smarty-3.0.7, created on 2017-01-19 14:31:15
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Class\input.html" */ ?>
<?php /*%%SmartyHeaderCode:9158805d33e3d4a1-62255945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e36b8797117ba85be32e9689a592b97401731c1b' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Class\\input.html',
      1 => 1484807470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9158805d33e3d4a1-62255945',
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
      <a href="?c=class&=index">班级一览</a>
    </li>
    <li class="active"><?php if ($_GET['id']){?>编辑<?php }else{ ?>新增<?php }?>班级</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->

        <form name="data_form" method="post">
          <?php if ($_smarty_tpl->getVariable('form')->value['id']){?><input type="hidden" name="form[id]" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['id']);?>
" /><?php }?>
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
                <th class="must">开学日期：</th>
                <td>
                  <div class='input-group date' id='datetimepicker1'>
                    <input type="text" name="form[start]" size="30" class="form-control form-control-datepicker text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['start']);?>
"/>
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                  <span id="helpBlock" class="help-block">请输入首次开学日期，计算入学年级使用</span>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'start'),$_smarty_tpl);?>

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

<script type="text/javascript">
jQuery(function($) {
});
</script>