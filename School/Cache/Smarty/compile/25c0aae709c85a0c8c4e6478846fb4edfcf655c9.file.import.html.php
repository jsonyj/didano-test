<?php /* Smarty version Smarty-3.0.7, created on 2017-01-12 10:44:32
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Student\import.html" */ ?>
<?php /*%%SmartyHeaderCode:96815876ed906ca852-04374231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25c0aae709c85a0c8c4e6478846fb4edfcf655c9' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Student\\import.html',
      1 => 1484189063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96815876ed906ca852-04374231',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_brave_html_select')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_html_select.php';
if (!is_callable('smarty_function_brave_error_hint')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_error_hint.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li>
      <a href="?c=student&a=index">学生一览</a>
    </li>
    <li class="active">导入</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <form method="post" name="search_form" class="search-form" id="data-form" enctype="multipart/form-data">
          <input type="hidden" name="complete" value="complete" />
          
          <table class="table table-bordered table-form">

            <!-- <tr>
              <th class="must">班级：</th>
              <td>
                <select  name="form[class_id]" style='width:330px;' id="select-class">
                  <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('classList')->value,'value'=>$_smarty_tpl->getVariable('form')->value['class_id'],'empty'=>true),$_smarty_tpl);?>

                </select>
                <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'class_id'),$_smarty_tpl);?>

              </td>
            </tr>
 -->
            <tr>
              <th class="must">数据文件：</th>
              <td>
                <div class="form-group" style="margin-bottom:0px;">
                  <label class="ace-file-input" style='width:330px;'>
                    <input type="file" id="import-file" name="file">
                  </label>
                </div>
                <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'file'),$_smarty_tpl);?>

                <div><a href="/res/import-template.xlsx" >下载模板</a></div>
              </td>
            </tr>

            <tr class="option">
              <th></th>
              <td>
                <input type="submit" class="btn btn-primary" name="complete" value="提交" />
              </td>
            </tr>

          </table>
      </form>

      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->

<script type="text/javascript">
$('#import-file').ace_file_input({
  no_file:'请选择 ...',
  btn_choose:'选择',
  btn_change:'修改',
  droppable:false,
  onchange:null,
  thumbnail:false //| true | large
  //whitelist:'xls|xlsx'
  //blacklist:'exe|php'
  //onchange:''
  //
});
</script>