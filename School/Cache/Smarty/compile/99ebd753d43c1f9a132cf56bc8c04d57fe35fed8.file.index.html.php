<?php /* Smarty version Smarty-3.0.7, created on 2017-01-19 09:37:02
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Student\index.html" */ ?>
<?php /*%%SmartyHeaderCode:108355880183eb68cc5-99978854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99ebd753d43c1f9a132cf56bc8c04d57fe35fed8' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Student\\index.html',
      1 => 1484789817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108355880183eb68cc5-99978854',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_brave_html_select')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_html_select.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.date_format.php';
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
          <input type="hidden" name="a" value="index" id="submit_action" />

          <table class="table table-bordered table-condensed ">
              <tr>
                <th>学生名称：</th>
                <td><input type="text" name="sh[name]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['name'];?>
" size="30" id="student_name"></td>
                <th>班级：</th>
                <td>
                  <select name="sh[class_id]" style="width:230px;" id="select-class">
                    <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('classList')->value,'value'=>$_smarty_tpl->getVariable('sh')->value['class_id'],'empty'=>true),$_smarty_tpl);?>

                  </select>
                </td>
                <td class="button" style="width:130px">
                    <div><button type="submit" class="btn btn-primary btn-xs" id="search_button"><i class="ace-icon fa fa-search"></i> 搜索</button>
                    <a href="?c=student&a=index" class="btn btn-default btn-xs"><i class="ace-icon fa fa-undo"></i> 重置</a></div>
                </td>
              </tr>
          </table>

        <?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      
      <div class='clearfix'></div>
      <div class="text-right toolbar">
        <a style="width:80px;" class="btn btn-info btn-sm" href="javascript:void(0);" id="delete_button1">批量删除</a>

        <a style="width:80px;" class="btn btn-info btn-sm" href="?c=student&a=input&pc=student&pa=index">新增</a>
        <a style="width:80px;" class="btn btn-info btn-sm" href="?c=student&a=import&pc=student&pa=index">导入</a>
        <!-- <a style="width:80px;" class="btn btn-info btn-sm" href="javascript:void(0);" id="export_button">导出</a> -->
        <!-- <a style="width:80px;" class="btn btn-info btn-sm" href="javascript:void(0);" id="print_button">打印</a> -->
      </div>
      <div class="export_select" id="export_select">
          <div class="export_select_title">请选择要导出的学生信息：</div>
          <div class="export_select_form">
              <div>
                  <tr>
                      <td><input type="checkbox" name="export_title[height]" value="身高/cm" checked="checked" /></td>
                      <td>身高/cm</td>
                  </tr>
              </div>
              <div>
                  <tr>
                      <td><input type="checkbox" name="export_title[weight]" value="体重/kg" checked="checked" /></td>
                      <td>体重/kg</td>
                  </tr>
              </div>
              <div>
                  <tr>
                      <td><input type="checkbox" name="export_title[temperature]" value="体温/℃" checked="checked" /></td>
                      <td>体温/℃</td>
                  </tr>
              </div>
             <!--  <table>
                  <tr>
                      <td>开始日期：</td>
                      <td><input id="al_start_date"  type="text" name="export_title[start_time]" style="height:30px; width:120px;" class="form-control text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('export_title')->value['start_time'],'Y-m-d');?>
"  />
                      <span style="color:red">*必选开始时间</span>
                      </td>
                  </tr>
              </table>
              <table class="al_date_tab">
                  <tr>
                      <td>结束日期：</td>
                      <td><input id="al_end_date"  type="text" name="export_title[end_time]" style="height:30px;width:120px;" class="form-control text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('export_title')->value['end_time'],'Y-m-d');?>
"  />
                      </td>
                  </tr>
              </table> -->
              
          </div>
          <div class="export_select_button">
              <a href="javascript:void(0)" style="text-decoration:none;"><span id="export_select_confirm">确定</span></a>
              <a href="javascript:void(0)" style="text-decoration:none;"><span id="export_select_cancel">取消</span></a>
          </div>
      </div>
      
      <div class="print_select" id="print_select">
          <div class="print_select_title">请选择要打印的学生信息：</div>
          <div class="print_select_form">
              <div>
                  <tr>
                      <td><input type="checkbox" name="print_title_height" value="身高/cm" checked="checked" id="print_title_height" /></td>
                      <td>身高/cm</td>
                  </tr>
              </div>
              <div>
                  <tr>
                      <td><input type="checkbox" name="print_title_weight" value="体重/kg" checked="checked" id="print_title_weight" /></td>
                      <td>体重/kg</td>
                  </tr>
              </div>
              <div>
                  <tr>
                      <td><input type="checkbox" name="print_title_temperature" value="体温/℃" checked="checked" id="print_title_temperature" /></td>
                      <td>体温/℃</td>
                  </tr>
              </div>
          </div>
          <div class="print_select_button">
              <a href="javascript:void(0)" style="text-decoration:none;"><span id="print_select_confirm">确定</span></a>
              <a href="javascript:void(0)" style="text-decoration:none;"><span id="print_select_cancel">取消</span></a>
          </div>
          </form>
      </div>
      
      <div class="table-responsive">
      <table class="table table-bordered table-hover">

          <col width="180" />
          <col width="50" />
          <col width="80" />
          <col width="120" />
          <col />
          <col width="70" />
          <col width="150" />
          <col width="101" />

          <tr>
            <th>学生名称</th>
            <th>性别</th>
            <th>生日</th>
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
            <td><input name="studentId" type="checkbox" class="hidden studentCB" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
"/><?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
</td>
            <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['gender'][$_smarty_tpl->tpl_vars['student']->value['gender']]['name'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['student']->value['birthday']=='0000-00-00'){?><?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['student']->value['birthday']);?>
<?php }?></td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['class_title'];?>
</td>
            <td>
              <table class="table table-striped table-condensed">

              <col width="60">
              <col />
              <col width="120">
              <col width="60">
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
                  <td><a class="btn btn-xs btn-danger eachDelete" href="javascript:void(0);" onclick="deleteParent(this)" name="<?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
">x</a></td>
                </tr>
              <?php }} ?>
              </table>
            </td>
            <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['status'][$_smarty_tpl->tpl_vars['student']->value['status']]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value['created'];?>
</td>
            <td>
              <!-- <a class="btn btn-xs btn-danger" href="javascript:void(0);" onclick="linkConfirm('确定删除吗？', '?c=student&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
')">删除</a> -->
              <a class="btn btn-xs btn-danger eachDelete" href="javascript:void(0);" onclick="deleteEach(this)" name="<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
">删除</a>
              <a class="btn btn-xs btn-primary" href="?c=student&a=input&pc=student&pa=index&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
">编辑</a>
            </td>
          </tr>
          <?php }} ?>
          

      </table>
      <div class='clearfix'></div>
      <div class="text-right toolbar">
        <a style="width:80px;" class="btn btn-info btn-sm btn-danger hidden" href="javascript:void(0);" id="delete_button2">删除</a>
      </div>
      </div>
      <div style="display: none;">
          <!--print_start-->
          <table style="border: #000 1px solid; align: center; width: 100%;" cellpadding="0" cellspacing="0">
              <tr>
                  <th>历史记录</th>
                  <th>日志类型</th>
                  <th>操作人</th>
                  <th>操作时间</th>
              </tr>
              <?php  $_smarty_tpl->tpl_vars['log_operation_print'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('log_operation_print_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['log_operation_print']->key => $_smarty_tpl->tpl_vars['log_operation_print']->value){
?>
                  <tr>
                      <td style="border:solid #add9c0; border-width:1px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['log_operation_print']->value['detail'];?>
</td>
                      <td style="border:solid #add9c0; border-width:1px; text-align: center;"><?php echo $_smarty_tpl->getVariable('code_sub_type')->value[$_smarty_tpl->tpl_vars['log_operation_print']->value['sub_type']]['name'];?>
</td>
                      <td style="border:solid #add9c0; border-width:1px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['log_operation_print']->value['user_name'];?>
</td>
                      <td style="border:solid #add9c0; border-width:1px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['log_operation_print']->value['created'];?>
</td>
                  </tr>
              <?php }} ?>
          </table>
          <!--print_end-->
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

$("#export_button").click(function(){
    $("#export_select").css("display", "block");
});
$("#search_button").click(function(){
    $("#submit_action").attr("value", "index");
    $("#search-form").submit();
});
$("#export_select_confirm").click(function(){
    $("#submit_action").attr("value", "export");
    $("#search-form").submit();
    $("#export_select").css("display", "none");
});
$("#export_select_cancel").click(function(){
    $("#export_select").css("display", "none");
});

$("#print_button").click(function(){
    $("#print_select").css("display", "block");
});
$("#print_select_confirm").click(function(){
    var print_title_height = null;
    var print_title_weight = null;
    var print_title_temperature = null;
    var sh_name = $("#student_name").val();
    var sh_class_id = $("#select-class").val();
    
    if ($("#print_title_height").is(":checked")) {
        print_title_height = $("#print_title_height").attr('value');
    }
    if ($("#print_title_weight").is(":checked")) {
        print_title_weight = $("#print_title_weight").attr('value');
    }
    if ($("#print_title_temperature").is(":checked")) {
        print_title_temperature = $("#print_title_temperature").attr('value');
    }
    
    var newWindow=window.open('?c=student&a=print&print_title_height='+print_title_height+'&print_title_weight='+print_title_weight+'&print_title_temperature='+print_title_temperature+'&sh[name]='+sh_name+'&sh[class_id]='+sh_class_id, function(){}, "_blank");
      $("#print_select").css("display", "none");
});
$("#print_select_cancel").click(function(){
      $("#print_select").css("display", "none");
});

$("#delete_button1").click(function(){
    $(".studentCB").removeClass("hidden");
    $("#delete_button2").removeClass("hidden");
});
$("#delete_button2").click(function(){
    var tips = confirm("确定要删除选中的小朋友吗？");
    if(tips){
      var url = window.location.href;
      var urlArr = url.split("]=");
      var pageNum = urlArr[1];
      var checkedList = new Array();
      $("input[name = 'studentId']:checked").each(function(){
        checkedList.push($(this).val());
      });
      var checkedStr = checkedList.toString();
      if(pageNum){  
        window.location.href="?c=student&a=batchDelete&page="+pageNum+"&id="+checkedStr;
      }else{
        window.location.href="?c=student&a=batchDelete&id="+checkedStr;
      }
    }
});

function deleteEach(obj){
  var id = $(obj).attr("name");
  var tips = confirm("确定要删除该小朋友吗?");
  if(tips){
      var url = window.location.href;
      var urlArr = url.split("]=");
      var pageNum = urlArr[1];
      if(pageNum){  
        window.location.href="?c=student&a=delete&page="+pageNum+"&id="+id;
      }else{
        window.location.href="?c=student&a=delete&id="+id;
      }
  }
}
  function deleteParent(obj){
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