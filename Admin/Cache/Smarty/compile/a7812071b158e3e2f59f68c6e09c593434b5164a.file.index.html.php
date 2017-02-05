<?php /* Smarty version Smarty-3.0.7, created on 2016-12-05 17:19:02
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Device\index.html" */ ?>
<?php /*%%SmartyHeaderCode:25732584531068fa493-68385779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7812071b158e3e2f59f68c6e09c593434b5164a' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Device\\index.html',
      1 => 1480929528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25732584531068fa493-68385779',
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
    <li class="active">设备一览</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="device" />
          <input type="hidden" name="a" value="index" />

          <table class="table table-bordered table-condensed ">
              <tr>
                <th>编号：</th>
                <td><input type="text" name="sh[no]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['no'];?>
" size="30"></td>
                <th>学校：</th>
                <td><input type="text" name="sh[school_title]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['school_title'];?>
" size="30"></td>
                <td class="button" style="width:130px">
                    <div><button type="submit" class="btn btn-primary btn-xs"><i class="ace-icon fa fa-search"></i> 搜索</button>
                    <a href="?c=device&a=index" class="btn btn-default btn-xs"><i class="ace-icon fa fa-undo"></i> 重置</a></div>
                </td>
              </tr>
          </table>

        <?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </form>
      
      <div class='clearfix'></div>
      <div class="text-right toolbar">
        <a style="width:80px;" class="btn btn-info btn-sm" href="?c=device&a=input&pc=device&pa=index">新增</a>
      </div>
      <div class="table-responsive">
      <table class="table table-bordered table-hover">

          <col width="260" />
          <col />
          <col width="70" />
          <col width="150" />
          <col width="101" />

          <tr>
            <th>编号</th>
            <th>学校名称</th>
            <th>版本类型</th>
            <th>主版本号</th>
            <th>群版本号</th>
            <th>设备类型</th>
            <th>有效状态</th>
            <th <?php echo smarty_function_brave_order(array('code'=>$_smarty_tpl->getVariable('code')->value['order']['default'],'array'=>'sh','key'=>'a','name'=>'field','txt'=>"创建时间"),$_smarty_tpl);?>
></th>
            <th>操作</th>
          </tr>

          <?php  $_smarty_tpl->tpl_vars['device'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('deviceList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['device']->key => $_smarty_tpl->tpl_vars['device']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['device']->key;
?>
          <tr id="row_<?php echo $_smarty_tpl->tpl_vars['device']->value['id'];?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['device']->value['no'];?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['device']->value['school_title'];?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['device']->value['version_type'];?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['device']->value['main_version'];?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['device']->value['branch_version'];?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['device']->value['model'];?>
</td>
            <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['status'][$_smarty_tpl->tpl_vars['device']->value['status']]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['device']->value['created'];?>
</td>
            <td>
              <a class="btn btn-xs btn-danger" href="javascript:void(0);" onclick="linkConfirm('确定删除吗？', '?c=device&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['device']->value['id'];?>
')">删除</a>
              <a class="btn btn-xs btn-primary" href="?c=device&a=input&pc=device&pa=index&id=<?php echo $_smarty_tpl->tpl_vars['device']->value['id'];?>
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
</script>