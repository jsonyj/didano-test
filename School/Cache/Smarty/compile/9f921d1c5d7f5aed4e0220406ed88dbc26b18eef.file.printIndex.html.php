<?php /* Smarty version Smarty-3.0.7, created on 2017-01-17 17:34:19
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Student\printIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:8841587de51b129b45-90890796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f921d1c5d7f5aed4e0220406ed88dbc26b18eef' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Student\\printIndex.html',
      1 => 1484644566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8841587de51b129b45-90890796',
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
    <li class="active">学生信息打印</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <div class='clearfix'></div>
      <div class="text-center toolbar">
        <a class="btn btn-info btn-lg" href="javascript:void(0);" id="print_button">学生信息打印</a>
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
  </div><!-- /.row -->
</div><!-- /.page-content -->

<script type="text/javascript">

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

</script>