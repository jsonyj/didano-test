<?php /* Smarty version Smarty-3.0.7, created on 2016-11-30 11:36:12
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Article\index.html" */ ?>
<?php /*%%SmartyHeaderCode:24680583e492c345233-35533331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ef452f9323c58fc22685832c55bbbffc1f85c12' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Article\\index.html',
      1 => 1480042647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24680583e492c345233-35533331',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_brave_html_select')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_html_select.php';
if (!is_callable('smarty_function_brave_error_hint')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_error_hint.php';
if (!is_callable('smarty_function_brave_order')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_order.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li class="active">文章一览</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="article" />
          <input type="hidden" name="a" value="index" />

          <table class="table table-bordered table-condensed ">
              <tr>
                <th>标题：</th>
                <td colspan="3"><input type="text" name="sh[title]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['title'];?>
" size="30"></td>
                <th>内容：</th>
                <td>
                  <select  name="form[body]" style='width:330px;'>
                    <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('code')->value['class_id'],'value'=>$_smarty_tpl->getVariable('form')->value['class_id'],'empty'=>true),$_smarty_tpl);?>

                  </select>
                  <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'class_id'),$_smarty_tpl);?>

                </td>
                <td class="button" style="width:130px">
                    <div><button type="submit" class="btn btn-primary btn-xs"><i class="ace-icon fa fa-search"></i> 搜索</button>
                    <a href="?c=article&a=index" class="btn btn-default btn-xs"><i class="ace-icon fa fa-undo"></i> 重置</a></div>
                </td>
              </tr>
          </table>

        <?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </form>
      
      <div class='clearfix'></div>
      <div class="text-right toolbar">
        <a style="width:80px;" class="btn btn-info btn-sm" href="?c=article&a=input&pc=article&pa=index">新增</a>
      </div>
      <div class="table-responsive">
      <table class="table table-bordered table-hover">

          <col width="200" />
          <col />
          <col width="250" />
          <col width="100" />
          <col width="70" />
          <col width="150" />
          <col width="101" />

          <tr>
            <th>标题</th>
            <th>内容</th>
            <th>显示时间</th>
            <th>类型</th>
            <th>有效状态</th>
            <th <?php echo smarty_function_brave_order(array('code'=>$_smarty_tpl->getVariable('code')->value['order']['default'],'array'=>'sh','key'=>'a','name'=>'field','txt'=>"创建时间"),$_smarty_tpl);?>
></th>
            <th>操作</th>
          </tr>

          <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('articleList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['article']->key;
?>
          <tr id="row_<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</td>
            <td>
              <?php if ($_smarty_tpl->tpl_vars['article']->value['link']){?>
              <div class="margin-bottom-5">链接：<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
</a></div>
              <?php }?>
              <?php echo $_smarty_tpl->tpl_vars['article']->value['body'];?>

            </td>
            <td><?php echo date('Y-m-d H:i',strtotime($_smarty_tpl->tpl_vars['article']->value['start']));?>
 - <?php echo date('Y-m-d H:i',strtotime($_smarty_tpl->tpl_vars['article']->value['end']));?>
</td>
            <td><?php echo implode('<br>',$_smarty_tpl->tpl_vars['article']->value['auth']['type_title']);?>
</td>
            <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['status'][$_smarty_tpl->tpl_vars['article']->value['status']]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['article']->value['created'];?>
</td>
            <td>
              <a class="btn btn-xs btn-danger" href="javascript:void(0);" onclick="linkConfirm('确定删除吗？', '?c=article&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
')">删除</a>
              <a class="btn btn-xs btn-primary" href="?c=article&a=input&pc=article&pa=index&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
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