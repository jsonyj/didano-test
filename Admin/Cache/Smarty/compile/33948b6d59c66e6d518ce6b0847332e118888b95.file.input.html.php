<?php /* Smarty version Smarty-3.0.7, created on 2016-12-09 10:14:04
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Version\input.html" */ ?>
<?php /*%%SmartyHeaderCode:18133584a136c8db341-39064992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33948b6d59c66e6d518ce6b0847332e118888b95' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Version\\input.html',
      1 => 1480932818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18133584a136c8db341-39064992',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li>
      <a href="?c=version&a=index">版本一览</a>
    </li>
    <li class="active"><?php if ($_GET['id']){?>编辑<?php }else{ ?>新增<?php }?>版本</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->

        <form name="data_form" method="post" enctype="multipart/form-data">
          <?php if ($_smarty_tpl->getVariable('form')->value['id']){?><input type="hidden" name="form[id]" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['id']);?>
" /><?php }?>
          <table class="table table-bordered table-form">
              <tr>
                <th class="must">选择文件：</th>
                <td>
                  <input type="file" name="file" size="30" class="form-control text"/>
                </td>
              </tr>
              <tr>
                <th class="must">设备类型：</th>
                <td>
                  <select  name="form[device_type]" style='width:330px;' id="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['device_type']);?>
">
                    <option value ="1">robot_android</option>
                    <option value ="2">robot_linux</option>
                    <option value ="3">gates_linux</option>
                  </select>
                </td>
              </tr>
              
              <tr>
                <th class="must">群名称：</th>
                <td>
                  <select name="form[branch_id]" style='width:330px;' id="status<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['branch_id']);?>
">
                  <?php  $_smarty_tpl->tpl_vars['branch'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('branchList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['branch']->key => $_smarty_tpl->tpl_vars['branch']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['branch']->key;
?> 
                    <option value ="<?php echo $_smarty_tpl->tpl_vars['branch']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['branch']->value['branch_name'];?>
</option>
                  <?php }} ?>
                  </select>

                </td>
              </tr>
             
              <tr>
                <th class="must">版本号：</th>
                <td>
                  <input type="text" name="form[version_no]" size="30" class="form-control text" value="<?php if ($_smarty_tpl->getVariable('form')->value['branch_id']==0){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['main_version']);?>
<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['branch_version']);?>
<?php }?>"/>
                  <font color="red">*主版本3位编写，eg：1.2.1；群版本2位编写，eg：2.1（2对应群号）</font>
                </td>

              </tr>
              <tr>
                <th class="must">设备型号：</th>
                <td>
                  <input type="text" name="form[model_no]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['model_no']);?>
"/>
                </td>
              </tr>
              <tr>
                <th class="must">版本说明：</th>
                <td>
                  <input type="text" name="form[version_des]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['version_des']);?>
"/>
                </td>
              </tr>
              <tr class="option">
                <th></th>
                <td>
                  <input type="submit" class="btn btn-primary" name="complete" value="上传" />
                </td>
              </tr>
          </table>
      </form>

      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->

<script type="text/javascript">
    $(document).ready(function(){
       $("#status").attr("value",'${requestScope.status}'); 
    })
</script>