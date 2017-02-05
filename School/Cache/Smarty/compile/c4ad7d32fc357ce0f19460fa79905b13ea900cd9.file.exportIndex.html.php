<?php /* Smarty version Smarty-3.0.7, created on 2017-01-17 17:12:26
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Student\exportIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:23808587ddffad45637-13979863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4ad7d32fc357ce0f19460fa79905b13ea900cd9' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Student\\exportIndex.html',
      1 => 1484644342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23808587ddffad45637-13979863',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.date_format.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li class="active">学生信息导出</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="student" />
          <input type="hidden" name="a" value="index" id="submit_action" />
      
      <div class='clearfix'></div>
      <div class="text-center toolbar">
        <a class="btn btn-info btn-lg" href="javascript:void(0);" id="export_button">学生信息导出</a>
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
</script>