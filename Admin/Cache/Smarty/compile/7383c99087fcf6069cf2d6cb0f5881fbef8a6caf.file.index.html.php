<?php /* Smarty version Smarty-3.0.7, created on 2017-01-10 16:13:13
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Help\index.html" */ ?>
<?php /*%%SmartyHeaderCode:13788587497994172d2-11653697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7383c99087fcf6069cf2d6cb0f5881fbef8a6caf' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Help\\index.html',
      1 => 1481623165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13788587497994172d2-11653697',
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
    <li class="active">帮助一览</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="help" />
          <input type="hidden" name="a" value="index" />

          <table class="table table-bordered table-condensed ">
              <tr>
                  <th>标题：</th>
                  <td colspan="3"><input type="text" name="sh[title]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['title'];?>
" size="30"></td>
                  <td style="width:130px">
                    <div><button type="submit" class="btn btn-primary btn-xs"><i class="ace-icon fa fa-search"></i> 搜索</button>
                    <a href="?c=help&a=index" class="btn btn-default btn-xs"><i class="ace-icon fa fa-undo"></i> 重置</a></div>
                  </td>
              </tr>

          </table>

        <?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </form>

      <div class='clearfix'></div>
      <div class="text-right toolbar">
        <a style="width:80px;" class="btn btn-info btn-sm" href="?c=help&a=input&pc=help&pa=input">新增</a>
      </div>
      <div class="table-responsive">
      <table class="table table-bordered table-hover">
          <col  />
          <col  />
          <col  />
          <col width="90" />
          <col width="180"/>
          <col width="101" />

          <tr>
            <th>标题</th>
            <th>链接地址</th>
            <th>图片</th>
            <th>序号</th>
            <th class="text-center">启用状态</th>
            <th class="text-center"<?php echo smarty_function_brave_order(array('code'=>$_smarty_tpl->getVariable('code')->value['order']['default'],'array'=>'sh','key'=>'a','name'=>'field','txt'=>"创建时间"),$_smarty_tpl);?>
></th>
            <th class="text-center">操作</th>
          </tr>

          <?php  $_smarty_tpl->tpl_vars['help'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('help_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['help']->key => $_smarty_tpl->tpl_vars['help']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['help']->key;
?>
          <tr id="row_<?php echo $_smarty_tpl->tpl_vars['help']->value['id'];?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['help']->value['title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['help']->value['link'];?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['help']->value['icon_img']==''){?>
                <td></td>
            <?php }else{ ?>
                <td><img src="<?php echo @APP_OSS_URL;?>
<?php echo $_smarty_tpl->tpl_vars['help']->value['icon_img'];?>
"  class="img_little"></td>
            <?php }?>
            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['help']->value['weight'];?>
</td>
            <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['status'][$_smarty_tpl->tpl_vars['help']->value['status']]['name'];?>
</td>
            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['help']->value['created'];?>
</td>
            <td class="text-center">
              <a class="btn btn-xs btn-primary" href="?c=help&a=input&pc=help&pa=input&id=<?php echo $_smarty_tpl->tpl_vars['help']->value['id'];?>
">编辑</a>
              <a class="btn btn-xs btn-danger" href="javascript:void(0);" onclick="javascript:linkConfirm('确定删除吗？', '?c=help&a=deleted&id=<?php echo $_smarty_tpl->tpl_vars['help']->value['id'];?>
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
