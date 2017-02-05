<?php /* Smarty version Smarty-3.0.7, created on 2016-12-06 11:06:59
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\School\dataStatistics.html" */ ?>
<?php /*%%SmartyHeaderCode:2189058462b53c2e921-37421966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44dcdde9dbf5e5276da15a6746c24e6ff88bcef4' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\School\\dataStatistics.html',
      1 => 1480912245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2189058462b53c2e921-37421966',
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
    <li class="active">设备运营统计</li>
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
          <input type="hidden" name="c" value="school" />
          <input type="hidden" name="a" value="dataStatistics" id="submit_action" />
          
          
          <table class="table table-bordered table-condensed ">
              <tr>
                <th>选择日期：</th>
                  <td>
                    <input id="start_date" readonly="readonly" type="text" name="sh[date_time]" size="30" class="form-control text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('sh')->value['date_time'],'Y-m-d');?>
" style="width:240px;" /><span style="color:red">*必选时间，否则无法查询<span>
                  </td>
                <td class="button" style="width:130px">
                    <div><button type="submit" class="btn btn-primary btn-xs" id="search_button"><i class="ace-icon fa fa-search"></i> 搜索</button>
                    <a href="?c=school&a=dataStatistics" class="btn btn-default btn-xs"><i class="ace-icon fa fa-undo"></i> 重置</a></div>
                </td>
              </tr>
          </table> 
           
      </form>
      
      </br>
      </br>
      <div class='clearfix'></div>
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">

            <col width="180" />
            <col width="180" />
            <col width="180"/>
            <col width="180" />
            <col width="180" />
            <col width="180" />
            <col width="180" />

            <tr>
              <th class="text-center">学校名称</th>
              <th class="text-center">
              本校未识别人数</th>
              <th class="text-center">绑定家长数</th>
              <th class="text-center">
              放学家长接送人数
              </th>
              <th class="text-center">学生总数</th>             
              <th class="text-center">成功晨检人数</th>
              <th class="text-center">晨检人数比例</th>
            </tr>

            <?php  $_smarty_tpl->tpl_vars['dataStatistics'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dataStatisticsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['dataStatistics']->key => $_smarty_tpl->tpl_vars['dataStatistics']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['dataStatistics']->key;
?>
            <tr id="row_<?php echo $_smarty_tpl->getVariable('admin')->value['id'];?>
">
              <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['dataStatistics']->value['title'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['dataStatistics']->value['unidentificationNum'];?>
</td>
              
              <td><?php echo $_smarty_tpl->tpl_vars['dataStatistics']->value['bindParentNum'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['dataStatistics']->value['packUpNum'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['dataStatistics']->value['studentNum'];?>
</td>             
              <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['dataStatistics']->value['successNum'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['dataStatistics']->value['percent'];?>
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
      alert("请选择查看设备运行时间!");
    }
 });

</script>