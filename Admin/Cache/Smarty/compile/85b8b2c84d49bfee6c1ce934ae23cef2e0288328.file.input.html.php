<?php /* Smarty version Smarty-3.0.7, created on 2016-11-29 16:11:15
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Student\input.html" */ ?>
<?php /*%%SmartyHeaderCode:14079583d3823e764d1-40615660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85b8b2c84d49bfee6c1ce934ae23cef2e0288328' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Student\\input.html',
      1 => 1480042648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14079583d3823e764d1-40615660',
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
      <a href="?c=student&a=index">学生一览</a>
    </li>
    <li class="active"><?php if ($_GET['id']){?>编辑<?php }else{ ?>新增<?php }?>学生</li>
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
                <th class="must">姓名：</th>
                <td>
                  <input type="text" name="form[name]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['name']);?>
"/>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'name'),$_smarty_tpl);?>

                </td>
              </tr>
              <tr>
                <th class="must">性别：</th>
                <td>
                  <select  name="form[gender]" style='width:330px;'>
                    <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('code')->value['gender'],'value'=>$_smarty_tpl->getVariable('form')->value['gender'],'empty'=>true),$_smarty_tpl);?>

                  </select>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'gender'),$_smarty_tpl);?>

                </td>
              </tr>
              <tr>
                <th>生日：</th>
                <td>
                  <div class='input-group date' id='datetimepicker1'>
                    <input type="text" name="form[birthday]" size="30" class="form-control form-control-datepicker text" value="<?php if ($_smarty_tpl->getVariable('form')->value['birthday']=='0000-00-00'){?><?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['birthday']);?>
<?php }?>"/>
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'birthday'),$_smarty_tpl);?>

                </td>
              </tr>
              <tr>
                <th class="must">学校：</th>
                <td>
                  <select name="form[school_id]" style='width:330px;' id="select-school">
                    <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('schoolList')->value,'value'=>$_smarty_tpl->getVariable('form')->value['school_id'],'empty'=>true),$_smarty_tpl);?>

                  </select>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'school_id'),$_smarty_tpl);?>

                </td>
              </tr>
              <tr>
                <th class="must">班级：</th>
                <td>
                  <select  name="form[class_id]" style='width:330px;' id="select-class">
                    <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('classList')->value,'value'=>$_smarty_tpl->getVariable('form')->value['class_id'],'empty'=>true),$_smarty_tpl);?>

                  </select>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'class_id'),$_smarty_tpl);?>

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
$('#select-school').change(function() {
  $.get('?c=class&a=getClassOption&id=' + $(this).val(), function(resp) {
    if(resp.code == 0) {
      var html = '<option selected="selected" value="">------</option>';
      $.each(resp.optionList, function(n, o) {
        html += '<option value="' + o.value + '">' + o.name + '</option>';
      })
      $('#select-class').html(html);
    } else {
      alert(resp.message);
    }
  }, 'json');
});
</script>