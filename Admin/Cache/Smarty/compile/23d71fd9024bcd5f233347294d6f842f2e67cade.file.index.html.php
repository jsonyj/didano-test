<?php /* Smarty version Smarty-3.0.7, created on 2016-12-05 17:12:23
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\School\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3113758452f774d3f83-55700241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23d71fd9024bcd5f233347294d6f842f2e67cade' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\School\\index.html',
      1 => 1480918556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3113758452f774d3f83-55700241',
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
    <li class="active">学校一览</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="school" />
          <input type="hidden" name="a" value="index" />
          <input type="hidden" name="a" value="index" id="submit_action" />

          <table class="table table-bordered table-condensed ">
              <tr>
                <th>名称：</th>
                <td><input type="text" name="sh[title]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['title'];?>
" size="30"></td>
                <th>地址：</th>
                <td><input type="text" name="sh[address]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['address'];?>
" size="30"></td>
                <td class="button" style="width:130px" rowspan="2">
                    <div><button type="submit" class="btn btn-primary btn-xs"><i class="ace-icon fa fa-search"></i> 搜索</button>
                    <a href="?c=school&a=index" class="btn btn-default btn-xs"><i class="ace-icon fa fa-undo"></i> 重置</a></div>
                </td>
              </tr>
              <tr>
                <th>电话：</th>
                <td colspan="3"><input type="text" name="sh[phone]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['phone'];?>
" size="30"></td>
              </tr>
          </table>

        <?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </form>
      
      <div class='clearfix'></div>
      <div class="text-right toolbar">
        <a style="width:80px;" class="btn btn-info btn-sm" href="?c=school&a=input&pc=school&pa=index">新增</a>
      </div>
      <div class="table-responsive">
      <table class="table table-bordered table-hover">

          <col width="260" />
          <col width="120" />
          <col />
          <col width="70" />
          <col width="150" />
          <col width="101" />

          <tr>
            <th>名称</th>
            <th>联系电话</th>
            <th>地址</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['school']->value['phone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['school']->value['address'];?>
</td>
            <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['status'][$_smarty_tpl->tpl_vars['school']->value['status']]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['school']->value['created'];?>
</td>
            <td>
              <a class="btn btn-xs btn-danger" href="javascript:void(0);" onclick="linkConfirm('确定删除吗？', '?c=school&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['school']->value['id'];?>
')">删除</a>
              <a class="btn btn-xs btn-primary" href="?c=school&a=input&pc=school&pa=index&id=<?php echo $_smarty_tpl->tpl_vars['school']->value['id'];?>
">编辑</a>

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
  $("#export_button").click(function(){
    $("#submit_action").attr("value", "exportImg");
    $("#search-form").submit();
});
</script>
