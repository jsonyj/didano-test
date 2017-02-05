<?php /* Smarty version Smarty-3.0.7, created on 2016-11-30 11:36:20
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Student\hobbyIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:9128583e4934cf1d19-43639545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8c44975246e356dc738e778b74d60ed5b339e7a' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Student\\hobbyIndex.html',
      1 => 1480042648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9128583e4934cf1d19-43639545',
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
    <li class="active">学生爱好</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="student" />
          <input type="hidden" name="a" value="hobbyIndex" />

          <table class="table table-bordered table-condensed ">
              <tr>
                  <th>爱好：</th>
                  <td colspan="3"><input type="text" name="sh[title]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['title'];?>
" size="30"></td>
                  <td style="width:130px">
                    <div><button type="submit" class="btn btn-primary btn-xs"><i class="ace-icon fa fa-search"></i> 搜索</button>
                    <a href="?c=student&a=hobbyIndex" class="btn btn-default btn-xs"><i class="ace-icon fa fa-undo"></i> 重置</a></div>
                  </td>
              </tr>

          </table>

        <?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </form>

      <div class='clearfix'></div>
      <div class="text-right toolbar">
        <a style="width:80px;" class="btn btn-info btn-sm" href="?c=student&a=hobbyInput&pc=student&pa=hobbyInput">新增</a>
      </div>
      <div class="table-responsive">
      <table class="table table-bordered table-hover">

          <col  />
          <col  />
          <col width="131" />

          <tr>
            <th>爱好名称</th>
            <th <?php echo smarty_function_brave_order(array('code'=>$_smarty_tpl->getVariable('code')->value['order']['default'],'array'=>'sh','key'=>'a','name'=>'field','txt'=>"创建时间"),$_smarty_tpl);?>
></th>
            <th>操作</th>
          </tr>

          <?php  $_smarty_tpl->tpl_vars['hobby'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hobby_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['hobby']->key => $_smarty_tpl->tpl_vars['hobby']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['hobby']->key;
?>
          <tr id="row_<?php echo $_smarty_tpl->tpl_vars['hobby']->value['id'];?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['hobby']->value['title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['hobby']->value['created'];?>
</td>
            <td>
              <a class="btn btn-xs btn-primary" href="?c=student&a=hobbyInput&pc=student&pa=hobbyInput&id=<?php echo $_smarty_tpl->tpl_vars['hobby']->value['id'];?>
">编辑</a>
              <a class="btn btn-xs btn-danger" href="javascript:void(0);" onclick="javascript:linkConfirm('确定删除吗？', '?c=student&a=deleteHobby&id=<?php echo $_smarty_tpl->tpl_vars['hobby']->value['id'];?>
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
