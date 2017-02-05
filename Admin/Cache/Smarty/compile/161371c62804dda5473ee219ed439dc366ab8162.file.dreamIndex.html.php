<?php /* Smarty version Smarty-3.0.7, created on 2016-12-12 10:48:22
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Student\dreamIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:14586584e0ff6846db8-72865721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '161371c62804dda5473ee219ed439dc366ab8162' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Student\\dreamIndex.html',
      1 => 1481256981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14586584e0ff6846db8-72865721',
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
    <li class="active">学生梦想</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="student" />
          <input type="hidden" name="a" value="dreamIndex" />
        <?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </form>

      <div class='clearfix'></div>
      <div class="text-right toolbar">
        <a style="width:80px;" class="btn btn-info btn-sm" href="?c=student&a=dreamInput&pc=student&pa=dreamInput">新增</a>
      </div>
      <div class="table-responsive">
      <table class="table table-bordered table-hover">

          <col />
          <col />
          <col width="170" />
          <col width="121" />

          <tr>
            <th>梦想名称</th>
            <th>梦想图片(点击可放大)</th>
            <th <?php echo smarty_function_brave_order(array('code'=>$_smarty_tpl->getVariable('code')->value['order']['default'],'array'=>'sh','key'=>'a','name'=>'field','txt'=>"创建时间"),$_smarty_tpl);?>
></th>
            <th class="text-center">操作</th>
          </tr>

          <?php  $_smarty_tpl->tpl_vars['dream'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dream_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['dream']->key => $_smarty_tpl->tpl_vars['dream']->value){
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['dream']->value['name'];?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['dream']->value['img_url']==''){?>
                <td></td>
            <?php }else{ ?>
                <td><a href="?c=student&a=imgListOne&id=<?php echo $_smarty_tpl->tpl_vars['dream']->value['id'];?>
"><img src="<?php echo @APP_OSS_URL;?>
<?php echo $_smarty_tpl->tpl_vars['dream']->value['img_url'];?>
"  class="img_little"></a></td>
            <?php }?>
            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['dream']->value['created'];?>
</td>
            <td class="text-center">
              <a class="btn btn-xs btn-danger" href="javascript:void(0);" onclick="linkConfirm('确定删除吗？', '?c=student&a=deleteDream&id=<?php echo $_smarty_tpl->tpl_vars['dream']->value['id'];?>
')">删除</a>
              <a class="btn btn-xs btn-primary" href="?c=student&a=dreamInput&pc=student&pa=dreamInput&id=<?php echo $_smarty_tpl->tpl_vars['dream']->value['id'];?>
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

<script>
function exportExcel() {
  var form = $('#search-form');
  location.href= '?' + form.serialize() + '&export=excel';
}

</script>
