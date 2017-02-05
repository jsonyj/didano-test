<?php /* Smarty version Smarty-3.0.7, created on 2017-01-12 10:42:22
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Student\import_confirm.html" */ ?>
<?php /*%%SmartyHeaderCode:245055876ed0ee418a0-53121029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad17598db0876cdecf6e89743a4853f198a3f98' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Student\\import_confirm.html',
      1 => 1484188110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245055876ed0ee418a0-53121029',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li>
      <a href="?c=student&a=index">学生一览</a>
    </li>
    <li class="active">导入</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <?php if (!$_smarty_tpl->getVariable('importDataValid')->value||!$_smarty_tpl->getVariable('importDataList')->value){?>
      <div class="alert alert-danger" role="alert">您准备向 <?php echo $_smarty_tpl->getVariable('class')->value['title'];?>
 导入的学生家长记录有错误，请核对后 <a href="?c=student&a=import">重新上传</a></div>
      <?php }else{ ?>
      <div class="alert alert-info" role="alert">您准备向 <?php echo $_smarty_tpl->getVariable('class')->value['title'];?>
 导入 <?php echo count($_smarty_tpl->getVariable('importDataList')->value);?>
 条学生家长记录</div>
      <?php }?>

      <?php if ($_smarty_tpl->getVariable('importDataList')->value){?>
      <div class="table-responsive">
          <table class="table table-bordered table-hover">
    
              <col width="30">
              <col width="100" />
              <col width="100" />
              <col width="100" >
              <col width="100" >
              <col />
              <!-- <col width="100" />
              <col width="70" />
              <col width="80" /> -->
    
              <tr>
                  <th>#</th>
                  <th>班级</th>
                  <th>学生名称</th>
                  <th>学生性别</th>
                  <th>学生生日</th>
                  <th>家长信息</th>
                  <!-- <th>家长电话</th>
                  <th>家长称谓</th>
                  <th>家长权限</th> -->
              </tr>
    
              <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, null);?>
              <?php  $_smarty_tpl->tpl_vars['excel'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('importDataList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['excel']->key => $_smarty_tpl->tpl_vars['excel']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['excel']->key;
?>
              <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?>
              <tr>
                  <td><?php echo $_smarty_tpl->getVariable('index')->value;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['excel']->value['class_name'];?>
 <br> <span class="red"><?php echo $_smarty_tpl->tpl_vars['excel']->value['errors']['class_name'];?>
</span></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['excel']->value['student_name'];?>
 <br> <span class="red"><?php echo $_smarty_tpl->tpl_vars['excel']->value['errors']['student_name'];?>
</span></td>
                  <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['excel']->value['student_gender'];?>
 <br> <span class="red"><?php echo $_smarty_tpl->tpl_vars['excel']->value['errors']['student_gender'];?>
</span></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['excel']->value['student_birthday'];?>
 <br> <span class="red"><?php echo $_smarty_tpl->tpl_vars['excel']->value['errors']['student_birthday'];?>
</span></td>

                  <td>
                   <table class="table table-striped table-condensed">

                  <!-- <col width="60">
                  <col />
                  <col width="120">
                  <col width="60"> -->

                  <?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['excel']->value['parent_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value){
?>
                    <?php if ($_smarty_tpl->tpl_vars['parent']->value[0]){?>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['parent']->value[0];?>
 <br> <span class="red"><?php echo $_smarty_tpl->tpl_vars['parent']->value['errors'][0];?>
</span></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['parent']->value[1];?>
 <br> <span class="red"><?php echo $_smarty_tpl->tpl_vars['parent']->value['errors'][1];?>
</span></td>
                      </tr>
                    <?php }?>
                  <?php }} ?>

                  </table>
                  </td>


                  <!-- <td><?php echo $_smarty_tpl->tpl_vars['excel']->value['parent_name'];?>
 <br> <span class="red"><?php echo $_smarty_tpl->tpl_vars['excel']->value['errors']['parent_name'];?>
</span></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['excel']->value['parent_phone'];?>
 <br> <span class="red"><?php echo $_smarty_tpl->tpl_vars['excel']->value['errors']['parent_phone'];?>
</span></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['excel']->value['relation_title'];?>
 <br> <span class="red"><?php echo $_smarty_tpl->tpl_vars['excel']->value['errors']['relation_title'];?>
</span></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['excel']->value['parent_type'];?>
 <br> <span class="red"><?php echo $_smarty_tpl->tpl_vars['excel']->value['errors']['parent_type'];?>
</span></td> -->
              </tr>
              <?php }} ?>
    
          </table>
          <?php if ($_smarty_tpl->getVariable('importDataValid')->value){?>
          <div class="text-center">
            <form method="post" name="data_form" class="data-form" id="data-form">
              <input type="hidden" name="op" value="save" />
              <input type="button" class="btn btn-default" value="返回" onclick="history.back();" />
              <input type="submit" class="btn btn-danger" value="确定" />
            </form>
          </div>
          <?php }?>
      </div>
      <?php }?>
      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->

<script type="text/javascript">
</script>