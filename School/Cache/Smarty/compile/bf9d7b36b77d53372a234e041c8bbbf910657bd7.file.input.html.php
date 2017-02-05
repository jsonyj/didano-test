<?php /* Smarty version Smarty-3.0.7, created on 2017-01-18 18:52:21
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Student\input.html" */ ?>
<?php /*%%SmartyHeaderCode:63587f48e5d09fe4-94465630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf9d7b36b77d53372a234e041c8bbbf910657bd7' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Student\\input.html',
      1 => 1484736739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63587f48e5d09fe4-94465630',
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
                <td style="width:330px;">
                  <input  class="btn btn-primary" id="addParentBtn" value="添加家长" />
                </td>
              </tr>

            <?php if ($_smarty_tpl->getVariable('parent_list')->value){?>
            <?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('parent_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['parent']->key;
?>
              <div class="show">

                <tr>
                  <th class="must">家长称谓：</th>
                  <input type="hidden" name="form[parent<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][id]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parent']->value['id']);?>
" />
                  <td>
                    <select id="select-relation" onchange="selectRelation(this)" name="form[parent<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][relation_id]" value style="width:330px;">
                        <?php echo smarty_function_brave_html_select(array('maxSize'=>"30",'code'=>$_smarty_tpl->getVariable('code')->value['relation'],'value'=>$_smarty_tpl->tpl_vars['parent']->value['relation_id'],'empty'=>true),$_smarty_tpl);?>

                    </select>
                    <div class="select-divh <?php if ($_smarty_tpl->tpl_vars['parent']->value['relation_id']!=@PARENT_TYPE_OTHER){?>hidden<?php }?>" style="margin-top:10px;">
                        <input type="text" name="form[parent<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][relation_title]" size="30" placeholder="请输入您的称谓" class="form-control text" value="<?php echo $_smarty_tpl->tpl_vars['parent']->value['relation_title'];?>
"/>
                    </div>
                    <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'relation_id'),$_smarty_tpl);?>

                    <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'relation_title'),$_smarty_tpl);?>

                  </td>
                </tr>
                <tr>
                  <th class="must">手机号码：</th>
                  <td>
                    <input type="text" name="form[parent<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][phone]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parent']->value['phone']);?>
"/>
                    <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'phone'),$_smarty_tpl);?>

                  </td>
                </tr>
              </div>
              <?php }} ?>
            <?php }?>
             <!--  <tr>
                <table class="table table-bordered table-form">
                    <tr>
                      <th class="must">家长1称谓：</th>
                      <td>
                        <select id="select-relation" onchange="selectRelation(this)" name="form[parent1][relation_id]" style="width:330px;">
                            <?php echo smarty_function_brave_html_select(array('maxSize'=>"30",'code'=>$_smarty_tpl->getVariable('code')->value['relation'],'value'=>$_smarty_tpl->getVariable('form')->value['relation_id'],'empty'=>true),$_smarty_tpl);?>

                        </select>
                        <div class="select-divh <?php if ($_smarty_tpl->getVariable('form')->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent1']['index']]['relation_id']!=@PARENT_TYPE_OTHER){?>hidden<?php }?>" style="margin-top:10px;">
                            <input type="text" name="form[parent1][relation_title]" size="30" placeholder="请输入您的称谓" class="form-control text" value="<?php echo $_smarty_tpl->getVariable('form')->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent1']['index']]['relation_title'];?>
"/>
                        </div>
                        <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'relation_id'),$_smarty_tpl);?>

                        <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'relation_title'),$_smarty_tpl);?>

                      </td>
                    </tr>
                    <tr>
                      <th class="must">手机号码：</th>
                      <td>
                        <input type="text" name="form[parent1][phone]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent1']['index']]['phone']);?>
"/>
                        <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'phone'),$_smarty_tpl);?>

                      </td>
                    </tr>
                </table>
              </tr> -->
              <!-- <tr>
                <table class="table table-bordered table-form hidden">
                    <tr>
                      <th class="must">家长2称谓：</th>
                      <td>
                        <select id="select-relation" onchange="selectRelation(this)" name="form[parent2][relation_id]" style="width:330px;">
                            <?php echo smarty_function_brave_html_select(array('maxSize'=>"30",'code'=>$_smarty_tpl->getVariable('code')->value['relation'],'value'=>$_smarty_tpl->getVariable('form')->value['relation_id'],'empty'=>true),$_smarty_tpl);?>

                        </select>
                        <div class="select-divh <?php if ($_smarty_tpl->getVariable('form')->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent2']['index']]['relation_id']!=@PARENT_TYPE_OTHER){?>hidden<?php }?>" style="margin-top:10px;">
                            <input type="text" name="form[parent2][relation_title]" size="30" placeholder="请输入您的称谓" class="form-control text" value="<?php echo $_smarty_tpl->getVariable('form')->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent2']['index']]['relation_title'];?>
"/>
                        </div>
                        <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'relation_id'),$_smarty_tpl);?>

                        <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'relation_title'),$_smarty_tpl);?>

                      </td>
                    </tr>
                    <tr>
                      <th class="must">手机号码：</th>
                      <td>
                        <input type="text" name="form[parent2][phone]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent2']['index']]['phone']);?>
"/>
                        <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'phone'),$_smarty_tpl);?>

                      </td>
                      <th></th>
                      <td>
                        <input type="text" name="form[parent2][id]"  value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value[$_smarty_tpl->getVariable('smarty')->value['section']['parent2']['index']]['id']);?>
"/>
                        <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'id'),$_smarty_tpl);?>

                      </td>
                    </tr>
                </table>
              </tr> -->



              <tr class="option saveBtn">
                <th></th>
                <td style="width:330px;">
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
var clickNum = 0;
clickNum = "<?php echo $_smarty_tpl->getVariable('form')->value['parentNum'];?>
"; 
$("#addParentBtn").click(function(){
    clickNum++;
    if(clickNum <= 6){
      var parentStr = 'parent'+clickNum;
      var tableStr = '<tr><th class="must">家长'+clickNum+'称谓：</th><td><select id="select-relation'+clickNum+'" onchange="selectRelation(this)" name="form['+parentStr+'][relation_id]" style="width:330px;"><?php echo smarty_function_brave_html_select(array('maxSize'=>"30",'code'=>$_smarty_tpl->getVariable('code')->value['relation'],'value'=>$_smarty_tpl->getVariable('form')->value['+parentStr+']['relation_id'],'empty'=>true),$_smarty_tpl);?>
</select><div class="select-divh <?php if ($_smarty_tpl->getVariable('form')->value['relation_id']!=@PARENT_TYPE_OTHER){?>hidden<?php }?>" style="margin-top:10px;"><input type="text" name="form['+parentStr+'][relation_title]" size="30" placeholder="请输入您的称谓" class="form-control text" value="<?php echo $_smarty_tpl->getVariable('form')->value['+parentStr+']['relation_title'];?>
"/></div><?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'relation_id'),$_smarty_tpl);?>
<?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'relation_title'),$_smarty_tpl);?>
</td></tr><tr><th class="must">手机号码：</th><td><input type="text" name="form['+parentStr+'][phone]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['+parentStr+']['phone']);?>
"/><?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'phone'),$_smarty_tpl);?>
</td></tr><input type="hidden" name="form['+parentStr+'][id]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['+parentStr+']['id']);?>
"/><?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'id'),$_smarty_tpl);?>
';
      $(".saveBtn").before(tableStr);
    }else{
      alert("温馨提示：最多只能添加6个家长哦");
    }

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

function selectRelation(obj){
  var val = $(obj).val();
  if(val == "<?php echo @PARENT_TYPE_OTHER;?>
"){
        $(obj).siblings('.select-divh').removeClass('hidden');
    }else{
        $(obj).siblings('.select-divh').addClass('hidden');
    }
}


</script>