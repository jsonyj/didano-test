<?php /* Smarty version Smarty-3.0.7, created on 2017-01-12 12:08:44
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Parent\index.html" */ ?>
<?php /*%%SmartyHeaderCode:199675877014c9edb70-46323226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df02efffc8e446d12ef2df95fff8491fdca570be' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Parent\\index.html',
      1 => 1480042628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199675877014c9edb70-46323226',
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
    <li class="active">家长一览</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="parent" />
          <input type="hidden" name="a" value="index" />

          <table class="table table-bordered table-condensed ">
              <tr>
                <th>家长名称：</th>
                <td><input type="text" name="sh[parent_name]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['parent_name'];?>
" size="30"></td>
                <th>学生名称：</th>
                <td><input type="text" name="sh[student_name]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['student_name'];?>
" size="30"></td>
                <td class="button" style="width:130px" rowspan="2">
                    <div><button type="submit" class="btn btn-primary btn-xs"><i class="ace-icon fa fa-search"></i> 搜索</button>
                    <a href="?c=parent&a=index" class="btn btn-default btn-xs"><i class="ace-icon fa fa-undo"></i> 重置</a></div>
                </td>
              </tr>
              <tr>
                <th>电话号码：</th>
                <td colspan="3"><input type="text" name="sh[phone]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['phone'];?>
" size="30"></td>
              </tr>
          </table>

        <?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </form>
      
      <div class='clearfix'></div>
      <div class="text-right toolbar">
        <a style="width:80px;" class="btn btn-info btn-sm" href="?c=parent&a=input&pc=parent&pa=index">新增</a>
      </div>
      <div class="table-responsive">
      <table class="table table-bordered table-hover">

          <col width="180" />
          <col width="180" />
          <col />
          <col width="60" />
          <col width="70" />
          <col width="150" />
          <col width="101" />

          <tr>
            <th>家长名称</th>
            <th>家长电话</th>
            <th>学生信息</th>
            <th>类型</th>
            <th>有效状态</th>
            <th <?php echo smarty_function_brave_order(array('code'=>$_smarty_tpl->getVariable('code')->value['order']['default'],'array'=>'sh','key'=>'a','name'=>'field','txt'=>"创建时间"),$_smarty_tpl);?>
></th>
            <th>操作</th>
          </tr>

          <?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('parentList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['parent']->key;
?>
          <tr id="row_<?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['parent']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['parent']->value['phone'];?>
</td>
            <td>

              <table class="table table-striped table-condensed">

              <col />
              <col width="30">
              <col width="90">
              <col width="150">
              <col width="60">
              <col width="60">

              <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['parent']->value['studentList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->getVariable('code')->value['gender'][$_smarty_tpl->tpl_vars['student']->value['gender']]['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value['birthday'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value['school_title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value['class_title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value['relation_title'];?>
</td>
              </tr>
              <?php }} ?>

              </table>
            </td>
            <td><?php echo $_smarty_tpl->getVariable('code')->value['parentType'][$_smarty_tpl->tpl_vars['parent']->value['type']]['name'];?>
</td>
            <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['status'][$_smarty_tpl->tpl_vars['parent']->value['status']]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['parent']->value['created'];?>
</td>
            <td>
              <!-- <a class="btn btn-xs btn-danger" href="javascript:void(0);" onclick="linkConfirm('确定删除吗？', '?c=parent&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
')">删除</a> -->
              <a class="btn btn-xs btn-danger eachDelete" href="javascript:void(0);" onclick="deleteEach(this)" name="<?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
">删除</a>
              <a class="btn btn-xs btn-primary" href="?c=parent&a=input&pc=parent&pa=index&id=<?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
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
  function deleteEach(obj){
    var parentId = $(obj).attr("name");
    var tips = confirm("确定要删除该家长吗?");
    if(tips){
        var url = window.location.href;
        var urlArr = url.split("]=");
        var pageNum = urlArr[1];
        if(pageNum){  
          window.location.href="?c=parent&a=delete&page="+pageNum+"&id="+parentId;
        }else{
          window.location.href="?c=parent&a=delete&id="+parentId;
        }
    }
  }

</script>