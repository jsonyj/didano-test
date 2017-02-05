<?php /* Smarty version Smarty-3.0.7, created on 2016-12-18 10:59:28
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Version\index.html" */ ?>
<?php /*%%SmartyHeaderCode:9265855fb90cce866-56640143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93c599f4d737351eabeb10635b224552ae7f6dc1' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Version\\index.html',
      1 => 1481681079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9265855fb90cce866-56640143',
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
    <li class="active">版本一览</li>
  </ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->     
       <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="version" />
          <input type="hidden" name="a" value="index" />
        <?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </form>
      
      <div class='clearfix'></div>
      <div class="text-right toolbar">
        <a style="width:80px;" class="btn btn-info btn-sm" href="?c=version&a=input">新增</a>
      </div>
      <div class="table-responsive">
      <table class="table table-bordered table-hover">

          <col width="180" />
          <col width="180" />
          <col width="180" />
          <col width="180" />
          <col width="180" />
          <col width="180" />
          <col width="180" />
          <col width="180" />
          <col width="180" />
          <col width="180" />

          <tr>
            <th class="text-center">主版本号</th>
            <th class="text-center">群名称</th>
            <th class="text-center">群版本号</th>
            <th class="text-center">设备类型</th>
            <th class="text-center">设备型号</th>
            <th class="text-center">下载地址</th>
            <th class="text-center">版本说明</th>
            <th class="text-center">创建时间</th>
            <th class="text-center">更新时间</th>
            <th class="text-center">操作</th>
          </tr>

          <?php  $_smarty_tpl->tpl_vars['version'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('versionList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['version']->key => $_smarty_tpl->tpl_vars['version']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['version']->key;
?>        
            <tr id="row_<?php echo $_smarty_tpl->getVariable('admin')->value['id'];?>
">
              <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['version']->value['main_version'];?>
</td>
              <td class="text-center">
                <?php echo $_smarty_tpl->tpl_vars['version']->value['branch_name'];?>

              </td>
              <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['version']->value['branch_version'];?>
</td>
              <td class="text-center">
                <?php if ($_smarty_tpl->tpl_vars['version']->value['device_type']==1){?>robot_android<?php }elseif($_smarty_tpl->tpl_vars['version']->value['device_type']==2){?>robot_linux<?php }else{ ?>gates_linux<?php }?>
                </td>
              <td class="text-center">
                <?php echo $_smarty_tpl->tpl_vars['version']->value['model_no'];?>

              </td>
              <td class="text-center"><a href="<?php echo @APP_OSS_URL;?>
<?php echo $_smarty_tpl->tpl_vars['version']->value['version_url'];?>
">点击下载</a></td>
              <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['version']->value['version_des'];?>
</td>
              <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['version']->value['created'];?>
</td>
              <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['version']->value['updated'];?>
</td>
              <td class="text-center">
                <a class="btn btn-xs btn-primary" href="?c=version&a=input&pc=version&pa=index&id=<?php echo $_smarty_tpl->tpl_vars['version']->value['id'];?>
">编辑</a>
                <a class="btn btn-xs btn-danger" href="javascript:void(0);" onclick="linkConfirm('确定删除吗？', '?c=version&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['version']->value['id'];?>
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