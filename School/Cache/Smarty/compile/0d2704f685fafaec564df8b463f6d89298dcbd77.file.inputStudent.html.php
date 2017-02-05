<?php /* Smarty version Smarty-3.0.7, created on 2017-01-12 12:17:12
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Parent\inputStudent.html" */ ?>
<?php /*%%SmartyHeaderCode:229155877034815e9f9-84768094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d2704f685fafaec564df8b463f6d89298dcbd77' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Parent\\inputStudent.html',
      1 => 1480042628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229155877034815e9f9-84768094',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
if (!is_callable('smarty_function_brave_html_select')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_html_select.php';
if (!is_callable('smarty_function_brave_error_hint')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_error_hint.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li>
      <a href="?c=parent&a=index">家长一览</a>
    </li>
    <li>
      <a href="?c=parent&a=input&pc=parent&pa=index&id=<?php echo $_smarty_tpl->getVariable('parent')->value['id'];?>
&tab=student-tab">编辑家长</a>
    </li>
    <li class="active"><?php if ($_GET['id']){?>编辑<?php }else{ ?>新增<?php }?>关联学生</li>
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
                <th class="must">家长姓名：</th>
                <td><p class="form-control-static"><?php echo $_smarty_tpl->getVariable('parent')->value['name'];?>
</p></td>
              </tr>
              <tr>
                <th class="must">家长电话：</th>
                <td><p class="form-control-static"><?php echo $_smarty_tpl->getVariable('parent')->value['phone'];?>
</p></td>
              </tr>
              <tr>
                <th class="must">学生班级：</th>
                <td>
                  <select  name="form[class_id]" style='width:330px;' id="select-class">
                    <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('classList')->value,'value'=>$_smarty_tpl->getVariable('form')->value['class_id'],'empty'=>true),$_smarty_tpl);?>

                  </select>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'class_id'),$_smarty_tpl);?>

                </td>
              </tr>
              <tr>
                <th class="must">学生姓名：</th>
                <td>
                  <select  name="form[student_id]" style='width:330px;' id="select-student">
                    <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('studentList')->value,'value'=>$_smarty_tpl->getVariable('form')->value['student_id'],'empty'=>true),$_smarty_tpl);?>

                  </select>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'student_id'),$_smarty_tpl);?>

                </td>
              </tr>
              <tr>
                <th class="must">家长称谓：</th>
                <td>
                  <select id="select-relation" name="form[relation_id]" style='width:330px;'>
                    <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('code')->value['relation'],'value'=>$_smarty_tpl->getVariable('form')->value['relation_id'],'empty'=>true),$_smarty_tpl);?>

                  </select>
                  <div class="select-divh <?php if ($_smarty_tpl->getVariable('form')->value['relation_id']!=@PARENT_TYPE_OTHER){?>hidden<?php }?>" style="margin-top:10px;">
                      <input type="text" name="form[relation_title]" size="30" placeholder="请输入您的称谓" class="form-control text" value="<?php echo $_smarty_tpl->getVariable('form')->value['relation_title'];?>
"/>
                  </div>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'relation_id'),$_smarty_tpl);?>

                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'relation_title'),$_smarty_tpl);?>

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
      $('#select-student').html('<option selected="selected" value="">------</option>');
    } else {
      alert(resp.message);
    }
  }, 'json');
});

$('#select-class').change(function() {
  $.get('?c=student&a=getStudentOption&id=' + $(this).val(), function(resp) {
    if(resp.code == 0) {
      var html = '<option selected="selected" value="">------</option>';
      $.each(resp.optionList, function(n, o) {
        html += '<option value="' + o.value + '">' + o.name + '</option>';
      })
      $('#select-student').html(html);
    } else {
      alert(resp.message);
    }
  }, 'json');
});

$('#select-relation').change(function(){
    var val = $(this).val();
    if(val == "<?php echo @PARENT_TYPE_OTHER;?>
"){
        $('.select-divh').removeClass('hidden');
    }else{
        $('.select-divh').addClass('hidden');
    }


});
</script>