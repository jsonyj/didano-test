<?php /* Smarty version Smarty-3.0.7, created on 2017-01-12 15:42:17
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Staff\index.html" */ ?>
<?php /*%%SmartyHeaderCode:613658773359229730-38083056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8250c4d6451776919c77c9592dcd9d597958e4f8' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Staff\\index.html',
      1 => 1480042628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '613658773359229730-38083056',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_brave_html_select')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_html_select.php';
if (!is_callable('smarty_function_brave_order')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_order.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.date_format.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li class="active">职工一览</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="staff" />
                  
          <input type="hidden" name="a" value="index" />

          <table class="table table-bordered table-condensed ">
              <tr>
                <th>姓名：</th>
                <td><input type="text" name="sh[name]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['name'];?>
" size="30"></td>
                <th>电话号码：</th>
                <td><input type="text" name="sh[phone]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['phone'];?>
" size="30"></td>
                <td rowspan="2" class="button" style="width:130px;">
                    <div><button type="submit" class="btn btn-primary btn-xs"><i class="ace-icon fa fa-search"></i> 搜索</button>
                    <a href="?c=staff&a=index" class="btn btn-default btn-xs"><i class="ace-icon fa fa-undo"></i> 重置</a></div>
                </td>
              </tr>
              <tr>
                  <th>职工类型：</th>
                  <td colspan="3">
                      <select name="sh[type]" class="form-control text">
                          <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('code')->value['staff_type'],'value'=>$_smarty_tpl->getVariable('sh')->value['type'],'empty'=>true),$_smarty_tpl);?>

                      </select>
                  </td>
              </tr>
          </table>

        <?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </form>

      <div class='clearfix'></div>
      <div class="text-right toolbar">
          <a style="width:80px;" class="btn btn-info btn-sm" href="?c=staff&a=input&pc=staff&pa=input">新增</a>
      </div>
      <div class="table-responsive">
      <table class="table table-bordered table-hover">

          <col />
          <col width="120" />
          <col width="100" />
          <col width="100" />
          <col width="200" />
          <col width="100" />
          <col width="150" />
          <col width="105" />

          <tr>
            <th>姓名</th>
            <th>电话</th>
            <th>班级</th>
            <th>职工类型</th>
            <th class="text-center">签到类型</th>
            <th>有效状态</th>
            <th <?php echo smarty_function_brave_order(array('code'=>$_smarty_tpl->getVariable('code')->value['order']['default'],'array'=>'sh','key'=>'a','name'=>'field','txt'=>"创建时间"),$_smarty_tpl);?>
></th>
            <th>操作</th>
          </tr>

          <?php  $_smarty_tpl->tpl_vars['staff'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('staffList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['staff']->key => $_smarty_tpl->tpl_vars['staff']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['staff']->key;
?>
          <tr id="row_<?php echo $_smarty_tpl->tpl_vars['staff']->value['id'];?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['staff']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['staff']->value['phone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['staff']->value['class_title'];?>
</td>
            <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['staff_type'][$_smarty_tpl->tpl_vars['staff']->value['type']]['name'];?>
</td>
            <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['staff']->value['type']!=@ACT_SCHOOL_HEADMASTER){?>
                <?php echo $_smarty_tpl->tpl_vars['staff']->value['title'];?>
<br/>(<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['staff']->value['in_time'],'H:i');?>
~<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['staff']->value['out_time'],'H:i');?>
)
                <?php }?>
            </td>
            <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['status'][$_smarty_tpl->tpl_vars['staff']->value['status']]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['staff']->value['created'];?>
</td>
            <td>
              <a class="btn btn-xs btn-danger" href="javascript:void(0);" onclick="linkConfirm('确定删除吗？', '?c=staff&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['staff']->value['id'];?>
')">删除</a>
              <a class="btn btn-xs btn-primary" href="?c=staff&a=input&pc=staff&pa=input&id=<?php echo $_smarty_tpl->tpl_vars['staff']->value['id'];?>
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

</script>
