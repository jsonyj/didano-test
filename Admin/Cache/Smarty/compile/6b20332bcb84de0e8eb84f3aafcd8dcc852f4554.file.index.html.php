<?php /* Smarty version Smarty-3.0.7, created on 2016-11-26 15:37:59
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Student\index.html" */ ?>
<?php /*%%SmartyHeaderCode:740458393bd7584331-66391925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b20332bcb84de0e8eb84f3aafcd8dcc852f4554' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Student\\index.html',
      1 => 1480042648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '740458393bd7584331-66391925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_brave_html_select')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_html_select.php';
if (!is_callable('smarty_function_brave_order')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_order.php';
if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li class="active">学生一览</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="student" />
          <input type="hidden" name="a" value="index" />

          <table class="table table-bordered table-condensed ">
              <tr>
                <th>学生名称：</th>
                <td colspan="3"><input type="text" name="sh[name]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['name'];?>
" size="30"></td>
                <td class="button" style="width:130px" rowspan="2">
                    <div><button type="submit" class="btn btn-primary btn-xs"><i class="ace-icon fa fa-search"></i> 搜索</button>
                    <a href="?c=student&a=index" class="btn btn-default btn-xs"><i class="ace-icon fa fa-undo"></i> 重置</a></div>
                </td>
              </tr>
              <tr>
                <th>学校：</th>
                <td>
                  <select name="sh[school_id]" style="width:230px;" id="select-school">
                    <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('schoolList')->value,'value'=>$_smarty_tpl->getVariable('sh')->value['school_id'],'empty'=>true),$_smarty_tpl);?>

                  </select>
                </td>
                <th>班级：</th>
                <td>
                  <select name="sh[class_id]" style="width:230px;" id="select-class">
                    <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('classList')->value,'value'=>$_smarty_tpl->getVariable('sh')->value['class_id'],'empty'=>true),$_smarty_tpl);?>

                  </select>
                </td>
              </tr>
          </table>

        <?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </form>
      
      <div class='clearfix'></div>
      <div class="text-right toolbar">
        <a style="width:80px;" class="btn btn-info btn-sm" href="?c=student&a=input&pc=student&pa=index">新增</a>
      </div>
      <div class="table-responsive">
      <table class="table table-bordered table-hover">

          <col width="180" />
          <col width="50" />
          <col width="80" />
          <col width="160" />
          <col width="120" />
          <col />
          <col width="70" />
          <col width="150" />
          <col width="101" />

          <tr>
            <th>学生名称</th>
            <th>性别</th>
            <th>生日</th>
            <th>学校名称</th>
            <th>班级名称</th>
            <th>家长信息</th>
            <th>有效状态</th>
            <th <?php echo smarty_function_brave_order(array('code'=>$_smarty_tpl->getVariable('code')->value['order']['default'],'array'=>'sh','key'=>'a','name'=>'field','txt'=>"创建时间"),$_smarty_tpl);?>
></th>
            <th>操作</th>
          </tr>

          <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('studentList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['student']->key;
?>
          <tr id="row_<?php echo $_smarty_tpl->getVariable('admin')->value['id'];?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
</td>
            <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['gender'][$_smarty_tpl->tpl_vars['student']->value['gender']]['name'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['student']->value['birthday']=='0000-00-00'){?><?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['student']->value['birthday']);?>
<?php }?></td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['school_title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['class_title'];?>
</td>
            <td>
              <table class="table table-striped table-condensed">
              
              <col width="60">
              <col />
              <col width="120">
              <col width="60">

              <?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['student']->value['parentList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value){
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['parent']->value['relation_title'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['parent']->value['name'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['parent']->value['phone'];?>
</td>
                  <td><?php echo $_smarty_tpl->getVariable('code')->value['parentType'][$_smarty_tpl->tpl_vars['parent']->value['type']]['name'];?>
</td>
                </tr>
              <?php }} ?>
              </table>
            </td>
            <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['status'][$_smarty_tpl->tpl_vars['student']->value['status']]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['created'];?>
</td>
            <td>
              <a class="btn btn-xs btn-danger" href="javascript:void(0);" onclick="linkConfirm('确定删除吗？', '?c=student&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
')">删除</a>
              <a class="btn btn-xs btn-primary" href="?c=student&a=input&pc=student&pa=index&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
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
$('#select-school').change(function() {
  $.get('?c=class&a=getClassOption&id=' + $(this).val(), function(resp) {
    if(resp.code == 0) {
      var html = '<option selected="selected" value="">------</option>';
      $.each(resp.optionList, function(n, o) {
        html += '<option value="' + o.value + '">' + o.name + '</option>';
      })
      $('#select-class').html(html);
    } else {
      alert(resp.message);
    }
  }, 'json');
});
</script>