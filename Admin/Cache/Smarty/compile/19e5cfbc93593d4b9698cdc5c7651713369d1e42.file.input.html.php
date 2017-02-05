<?php /* Smarty version Smarty-3.0.7, created on 2016-12-05 17:19:00
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Device\input.html" */ ?>
<?php /*%%SmartyHeaderCode:273658453104167e50-89148594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19e5cfbc93593d4b9698cdc5c7651713369d1e42' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Device\\input.html',
      1 => 1480929531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273658453104167e50-89148594',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
if (!is_callable('smarty_function_brave_error_hint')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_error_hint.php';
if (!is_callable('smarty_function_brave_html_select')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_html_select.php';
if (!is_callable('smarty_function_ace_switch')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.ace_switch.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li>
      <a href="?c=device&=index">设备一览</a>
    </li>
    <li class="active"><?php if ($_GET['id']){?>编辑<?php }else{ ?>新增<?php }?>设备</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->

        <form name="data_form" method="post">
          <table class="table table-bordered table-form">
              <tr>
                <th class="must">编号：</th>
                <td>
                  <input type="text" name="form[no]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['no']);?>
"/>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'no'),$_smarty_tpl);?>

                </td>
              </tr>
              <tr>
                <th class="must">学校：</th>
                <td>
                  <select  name="form[school_id]" style='width:330px;' value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['school_title']);?>
">
                    <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('schoolList')->value,'value'=>$_smarty_tpl->getVariable('form')->value['school_id'],'empty'=>true),$_smarty_tpl);?>

                  </select>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'school_id'),$_smarty_tpl);?>

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