<?php /* Smarty version Smarty-3.0.7, created on 2016-11-26 15:31:56
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Downimg\index.html" */ ?>
<?php /*%%SmartyHeaderCode:885858393a6c4fefa3-59443591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3d3891378a01c1c4c2ea26b58af285c9a82137c' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Downimg\\index.html',
      1 => 1480144849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '885858393a6c4fefa3-59443591',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_brave_order')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_order.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li class="active">图片管理</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="downimg" />
          <input type="hidden" name="a" value="index" />
        <?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </form>
      
      <div class='clearfix'></div>
      <div class="table-responsive">
      <table class="table table-bordered table-hover">

          <col width="260" />
          <col width="120" />
          <col />
          <col width="70" />
          <col width="150" />
          <col width="101" />

          <tr>
            <th>学校名称</th>
            <th>有效状态</th>
            <th <?php echo smarty_function_brave_order(array('code'=>$_smarty_tpl->getVariable('code')->value['order']['default'],'array'=>'sh','key'=>'a','name'=>'field','txt'=>"创建时间"),$_smarty_tpl);?>
></th>
            <th>操作</th>
          </tr>

          <?php  $_smarty_tpl->tpl_vars['school'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('schoolList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['school']->key => $_smarty_tpl->tpl_vars['school']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['school']->key;
?>
          <tr id="row_<?php echo $_smarty_tpl->getVariable('admin')->value['id'];?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['school']->value['title'];?>
</td>
            <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['status'][$_smarty_tpl->tpl_vars['school']->value['status']]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['school']->value['created'];?>
</td>
            <td>
              <a class="btn btn-xs btn-primary" href="javascript:void(0);" onclick="linkConfirm('确定导出该学校学生照片吗？', '?c=downimg&a=downImg&id=<?php echo $_smarty_tpl->tpl_vars['school']->value['id'];?>
')">导出</a>
            </td>
          </tr>
          <?php }} ?>

      </table>
      </div>
      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->

<script type="text/javascript">

</script>