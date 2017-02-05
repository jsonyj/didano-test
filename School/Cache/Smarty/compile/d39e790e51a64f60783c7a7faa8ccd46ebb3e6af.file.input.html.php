<?php /* Smarty version Smarty-3.0.7, created on 2017-01-18 16:36:58
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Parent\input.html" */ ?>
<?php /*%%SmartyHeaderCode:24620587f292a9a0bf9-81537533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd39e790e51a64f60783c7a7faa8ccd46ebb3e6af' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Parent\\input.html',
      1 => 1484726563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24620587f292a9a0bf9-81537533',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
if (!is_callable('smarty_function_brave_error_hint')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_error_hint.php';
if (!is_callable('smarty_function_brave_html_select')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_html_select.php';
if (!is_callable('smarty_function_ace_switch')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.ace_switch.php';
if (!is_callable('smarty_function_brave_order')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_order.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li>
      <a href="?c=parent&a=index">家长一览</a>
    </li>
    <li class="active"><?php if ($_GET['id']){?>编辑<?php }else{ ?>新增<?php }?>家长</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->

        <div class="tabbable">
          <ul id="myTab" class="nav nav-tabs">
            <li class="<?php if ($_GET['tab']==''){?>active<?php }else{ ?>disable<?php }?>">
              <a href="#base-tab" data-toggle="tab" aria-expanded="false">
                <i class="green ace-icon fa fa-table bigger-120"></i>
                基本信息
              </a>
            </li>
  
            <li class="<?php if ($_GET['tab']=='student-tab'){?>active<?php }else{ ?>disable<?php }?>">
              <a href="#student-tab" data-toggle="tab" aria-expanded="false">
                <i class="green ace-icon fa fa-user bigger-120"></i>
                学生信息
              </a>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane fade in <?php if ($_GET['tab']==''){?>active<?php }?>" id="base-tab">

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
                      <th class="must">手机号码：</th>
                      <td>
                        <input type="text" name="form[phone]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['phone']);?>
"/>
                        <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'phone'),$_smarty_tpl);?>

                      </td>
                    </tr>
                    <tr>
                      <th>账户类型：</th>
                      <td>
                        <select  name="form[type]" style='width:330px;' id="select-class">
                          <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('code')->value['parentType'],'value'=>$_smarty_tpl->getVariable('form')->value['type'],'empty'=>true),$_smarty_tpl);?>

                        </select>
                        <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'type'),$_smarty_tpl);?>

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

            </div>

            <div class="tab-pane fade in <?php if ($_GET['tab']=='student-tab'){?>active<?php }?>" id="student-tab">
              <?php if ($_smarty_tpl->getVariable('form')->value['id']){?>

                <div class="text-right toolbar">
                  <a style="width:80px;" class="btn btn-info btn-sm" href="?c=parent&a=inputStudent&pc=parent&pa=index&parentId=<?php echo $_smarty_tpl->getVariable('form')->value['id'];?>
">新增</a>
                </div>
                <div class="table-responsive">
                  <table class="table table-bordered table-hover">

                      <col width="100" />
                      <col width="180" />
                      <col width="50" />
                      <col width="80" />
                      <col width="260" />
                      <col />
                      <col width="150" />
                      <col width="100" />

                      <tr>
                        <th>称谓</th>
                        <th>学生名称</th>
                        <th>性别</th>
                        <th>生日</th>
                        <th>学校名称</th>
                        <th>班级名称</th>
                        <th <?php echo smarty_function_brave_order(array('code'=>$_smarty_tpl->getVariable('code')->value['order']['default'],'array'=>'sh','key'=>'a','name'=>'field','txt'=>"创建时间"),$_smarty_tpl);?>
></th>
                        <th>操作</th>
                      </tr>

                      <?php  $_smarty_tpl->tpl_vars['parentStudent'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('parentStudentList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['parentStudent']->key => $_smarty_tpl->tpl_vars['parentStudent']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['parentStudent']->key;
?>
                      <tr id="row_<?php echo $_smarty_tpl->getVariable('admin')->value['id'];?>
">
                        <td><?php echo $_smarty_tpl->tpl_vars['parentStudent']->value['relation_title'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['parentStudent']->value['student_name'];?>
</td>
                        <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['gender'][$_smarty_tpl->tpl_vars['parentStudent']->value['student_gender']]['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['parentStudent']->value['student_birthday'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['parentStudent']->value['school_title'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['parentStudent']->value['class_title'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['parentStudent']->value['created'];?>
</td>
                        <td>
                          <a class="btn btn-xs btn-danger" href="javascript:void(0);" onclick="linkConfirm('确定删除吗？', '?c=parent&a=deleteStudent&id=<?php echo $_smarty_tpl->tpl_vars['parentStudent']->value['id'];?>
')">删除</a>
                          <a class="btn btn-xs btn-primary" href="?c=parent&a=inputStudent&pc=parent&pa=index&parentId=<?php echo $_smarty_tpl->getVariable('form')->value['id'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['parentStudent']->value['id'];?>
">编辑</a>
                        </td>
                      </tr>
                      <?php }} ?>

                  </table>
                </div>

              <?php }else{ ?>
                <div class="alert alert-danger">
                  <i class="ace-icon fa fa-warning"></i>
                  请先填写并保存基本信息。
                </div>
              <?php }?>
            </div>

          </div>

        </div>

      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->