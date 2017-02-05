<?php /* Smarty version Smarty-3.0.7, created on 2016-12-05 16:25:51
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Branch\index.html" */ ?>
<?php /*%%SmartyHeaderCode:229415845248f793241-29836946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e309f620a92def86b3a2f40a5fb183e98408d8fe' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Branch\\index.html',
      1 => 1480926323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229415845248f793241-29836946',
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
    <li class="active">群一览</li>
  </ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->     
       <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="branch" />
          <input type="hidden" name="a" value="index" />
        <?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </form>
      
      <div class='clearfix'></div>
      <div class="text-right toolbar">
        <a style="width:80px;" class="btn btn-info btn-sm" href="?c=branch&a=input">新增</a>
      </div>
      <div class="table-responsive">
      <table class="table table-bordered table-hover">

          <col width="180" />
          <col width="180" />
          <col width="180" />
          <col width="180" />
          <col width="180" />
          <col width="180" />

          <tr>
            <th class="text-center">群名称</th>
            <th class="text-center">群号</th>
            <th class="text-center">群说明</th>
            <th class="text-center">创建时间</th>
            <th class="text-center">更新时间</th>
            <th class="text-center">操作</th>
          </tr>

          <?php  $_smarty_tpl->tpl_vars['branch'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('branchList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['branch']->key => $_smarty_tpl->tpl_vars['branch']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['branch']->key;
?>        
            <tr id="row_<?php echo $_smarty_tpl->getVariable('admin')->value['id'];?>
">
              <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['branch']->value['branch_name'];?>
</td>
              <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['branch']->value['branch_no'];?>
</td>
              <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['branch']->value['branch_des'];?>
</td>
              <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['branch']->value['created'];?>
</td>
              <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['branch']->value['updated'];?>
</td>
              <td class="text-center">
              	<a class="btn btn-xs btn-primary" href="?c=branch&a=input&pc=branch&pa=index&id=<?php echo $_smarty_tpl->tpl_vars['branch']->value['id'];?>
">编辑</a>
                <a class="btn btn-xs btn-danger" href="javascript:void(0);" onclick="linkConfirm('确定删除吗？', '?c=branch&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['branch']->value['id'];?>
')">删除</a>
              </td>              
            </tr>
          <?php }} ?>
      </table>
      </div>
      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->