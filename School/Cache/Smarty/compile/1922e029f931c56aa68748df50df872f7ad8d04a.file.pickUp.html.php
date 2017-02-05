<?php /* Smarty version Smarty-3.0.7, created on 2017-01-16 12:03:25
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Parent\pickUp.html" */ ?>
<?php /*%%SmartyHeaderCode:5120587c460d245aa9-45907900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1922e029f931c56aa68748df50df872f7ad8d04a' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Parent\\pickUp.html',
      1 => 1481688900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5120587c460d245aa9-45907900',
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
    <li class="active">接送一览</li>
  </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
</br>
</br>

      <!-- PAGE CONTENT BEGINS -->
      <form method="get" name="search_form" class="search-form" id="search-form">
          <input type="hidden" name="c" value="parent" />
          <input type="hidden" name="a" value="pickUp" id="submit_action" />
          
          
          <table class="table table-bordered table-condensed ">
              <tr>
                <th>学生姓名：</th>
                <td><input type="text" name="sh[name]" value="<?php echo $_smarty_tpl->getVariable('sh')->value['name'];?>
" size="30" id="student_name"></td>
                <th>选择日期：</th>
                  <td>
                    <input id="start_date" readonly="readonly" type="text" name="sh[date_time]" size="30" class="form-control text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('sh')->value['date_time'],'Y-m-d');?>
" style="width:240px;" /><span style="color:red">*必选时间，否则无法查询<span>
                  </td>
                <td class="button" style="width:130px">
                    <div><button type="submit" class="btn btn-primary btn-xs" id="search_button"><i class="ace-icon fa fa-search"></i> 搜索</button>
                    <a href="?c=parent&a=pickUp" class="btn btn-default btn-xs"><i class="ace-icon fa fa-undo"></i> 重置</a></div>
                </td>
              </tr>
          </table>
          <?php if (!empty($_smarty_tpl->getVariable('pickUpPic_list',null,true,false)->value)){?><?php $_template = new Smarty_Internal_Template("../Common/paginate.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>  
           
      </form>
      
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
                    <h2 class="text-center"><font color="#EE0000"><?php if (empty($_smarty_tpl->getVariable('pickUpPic_list',null,true,false)->value)){?>请查询家长接送照片！<?php }?></font></h2>
                    <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pickUpPic_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['img']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value%6==0){?>
                        <tr>
                    <?php }?>
                        <td  class="text-center worksbox">
                            <a target="_blank" href="<?php echo @APP_OSS_URL;?>
<?php echo $_smarty_tpl->tpl_vars['img']->value['path'];?>
">
                            <img  id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"src="<?php echo @APP_OSS_URL;?>
<?php echo $_smarty_tpl->tpl_vars['img']->value['path'];?>
"  class="img_claim"/></a>
                            <?php if ($_smarty_tpl->tpl_vars['img']->value['subPath']){?>
                              <a target="_blank" href="<?php echo @APP_OSS_URL;?>
<?php echo $_smarty_tpl->tpl_vars['img']->value['subPath'];?>
">
                              <img  id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"src="<?php echo @APP_OSS_URL;?>
<?php echo $_smarty_tpl->tpl_vars['img']->value['subPath'];?>
"  class="img_claim"/></a>
                            <?php }?>
                            <p><?php echo $_smarty_tpl->tpl_vars['img']->value['createTime'];?>
</p>
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
<script type="text/javascript">

$(document).ready(function(){
    showDatePicker();
});

function showDatePicker(){
    $("#start_date").datepicker({
        inline:true, 
        dateFormat: "yy-mm-dd",
        currentText:'确定',
        showButtonPanel:true,
    });

    $("#end_date").datepicker({
        inline:true,
        dateFormat: "yy-mm-dd",
        closeText:'确定',
        showButtonPanel:true,
    });

    $("#al_start_date").datepicker({
      inline:true,
      dateFormat:"yy-mm-dd",
      closeText:'确定',
      showButtonPanel:true,
    });

    $("#al_end_date").datepicker({
      inline:true,
      dateFormat:"yy-mm-dd",
      closeText:'确定',
      showButtonPanel:true,
    })

}

 $("#search_button").click(function(){
    var valStr = $("#start_date").val();
    if(!valStr){
      alert("请选择家长接送照片日期!");
    }
 });

</script>