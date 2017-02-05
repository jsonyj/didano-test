<?php /* Smarty version Smarty-3.0.7, created on 2017-01-16 14:53:51
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Student\claimIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:25353587c6dffdae6d2-25506543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a4be693fc06f15f5df92075604f0f53a901ee5c' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Student\\claimIndex.html',
      1 => 1484549064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25353587c6dffdae6d2-25506543',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
if (!is_callable('smarty_function_brave_html_select')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_html_select.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>
  <ul class="breadcrumb">
    <li class="active">学生认领</li>
  </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
</br>
</br>
<h2 class="text-center"><font color="#EE0000"><?php if (!empty($_smarty_tpl->getVariable('claimImg_list',null,true,false)->value)){?>请点击图片完成认领！<?php }else{ ?>暂无数据！<?php }?></font></h2>
</br>
</br>
      <div class='clearfix'></div>
      <div class="table-responsive">
          <table class="table table-bordered table-hover">

                    <col  width="100"/>
                    <col  width="100"/>
                    <col  width="100"/>
                    <col  width="100"/>
                    <col  width="100"/>
                    <col  width="100"/>

                    <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('claimImg_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['img']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value%6==0){?>
                        <tr>
                    <?php }?>
                        <td  class="text-center worksbox">  
                            <img id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onclick="confirm(<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
,'<?php echo @APP_OSS_URL;?>
<?php echo $_smarty_tpl->tpl_vars['img']->value['path'];?>
',<?php echo $_smarty_tpl->tpl_vars['img']->value['detection_id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['img']->value['terminal_img_id'];?>
',<?php echo $_smarty_tpl->tpl_vars['img']->value['file_img_id'];?>
)" src="<?php echo @APP_OSS_URL;?>
<?php echo $_smarty_tpl->tpl_vars['img']->value['path'];?>
"  class="img_claim">
                        </td>

                        <?php if ($_smarty_tpl->tpl_vars['key']->value%6==0&&$_smarty_tpl->getVariable('i')->value!=0){?>
                            </tr>
                        <?php }?>
                    <?php }} ?>
          </table>
      </div>
      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->

<div class="modal fade" id="order_server_confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <h2 class="text-center" ><font color="#8B0000">请选择学生</font></h2>
      <div class="modal-body">
          <form action="?c=student&a=claimInput" method="post" id="id">

              <table class="table table-bordered table-condensed">
                  <tr>
                      <th  class="text-center worksbox">
                          <img id="click_id"  class="img_claim">
                      </th>
                      <td>
                      </br>
                          <center>
                          <table>
                              <tr>
                                <th><font color="#008B45">班级：</font></th>
                                    <td>
                                      <select class="form-control" id="class_id" style='width:230px;' id="class" onchange="selectClass(this.value)" name="form[class_id]">
                                          <?php echo smarty_function_brave_html_select(array('code'=>$_smarty_tpl->getVariable('claimClass_list')->value,'value'=>smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['value']),'empty'=>true),$_smarty_tpl);?>

                                      </select>
                                    </td>
                                </tr>
                                <tr>
                                <th><font color="#008B45">姓名：</font></th>
                                <td>
                                    <div class="student_list" style="display:none;">
                                    </div>
                                  <select class="form-control" id="student" style='width:230px;' onchange="selectStudent(this.value)" >
                                      <?php if (empty($_smarty_tpl->getVariable('form',null,true,false)->value['id'])||$_smarty_tpl->getVariable('form')->value['id']==0){?>
                                      <option value="">------</option>
                                      <?php }else{ ?>
                                      <?php echo smarty_function_brave_html_select(array('code'=>$_smarty_tpl->getVariable('claimStudent_list')->value,'value'=>smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['id']),'empty'=>true),$_smarty_tpl);?>

                                      <?php }?>
                                  </select>
                                </td>
                              </tr>
                          </table>
                      </center>
                      </td>
                  </tr>
              </table>

      </div>
      <div class="modal-footer">
        <button type="button" form="id" class="btn btn-lg btn-default" onclick="cancel()">取消</button>
        <button type="submit" form="id" class="btn btn-lg btn-danger" >认领</button>
     </div>
     </form>
    </div>
  </div>
</div>
<script>
function confirm(img_id,img_path,detection_id,terminal_img_id,file_img_id) {

    $('#click_id').attr('src',img_path);

    $("#order_server_confirm").modal('show');


    $('#class_id').change(getStudent);
    
    function getStudent() {
      
        var class_id = $(this).children('option:selected').val();
        
        $('.student_list').load('?c=student&a=getStudentList',{info:class_id,img_info:img_id,detection_info:detection_id,terminal_img_info:terminal_img_id,file_img_info:file_img_id},function(){
          
        $('.student_list').css("display","");
        
        $('#student').css("display","none");
        
        });
    }
}
function cancel() {
    $("#order_server_confirm").modal('hide');
}
function saveClaim() {
  if(!$('#class').val()) {
    $.notify('请选择班级。');
    return;
  }

  else if(!$('#student').val()) {
    $.notify('请选择学生。');
    return;
  }
}

</script>
