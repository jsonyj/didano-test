<?php /* Smarty version Smarty-3.0.7, created on 2016-12-05 17:37:49
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Branch\input.html" */ ?>
<?php /*%%SmartyHeaderCode:25565845356d8415f7-40435881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e091eec781b5d803b5461186f7f84f37a7bddf24' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Branch\\input.html',
      1 => 1480930659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25565845356d8415f7-40435881',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li>
      <a href="?c=branch&a=index">群一览</a>
    </li>
    <li class="active"><?php if ($_GET['id']){?>编辑<?php }else{ ?>新增<?php }?>群</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->

        <form name="data_form" method="post" enctype="multipart/form-data">
          <?php if ($_smarty_tpl->getVariable('form')->value['id']){?><input type="hidden" name="form[id]" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['id']);?>
" /><?php }?>
          <table class="table table-bordered table-form">
              <tr>
                <th class="must">群名称：</th>
                <td>
                  <input type="text" name="form[branch_name]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['branch_name']);?>
"/>
                </td>
              </tr>
              <tr>
                <th class="must">群号：</th>
                <td>
                  <input type="text" name="form[branch_no]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['branch_no']);?>
"/>
                </td>
              </tr>
              <tr>
                <th class="must">群说明：</th>
                <td>
                  <input type="text" name="form[branch_des]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['branch_des']);?>
"/>
                </td>
              </tr>
              <tr class="option">
                <th></th>
                <td>
                  <input type="submit" class="btn btn-primary" name="complete" value="上传" />
                </td>
              </tr>
          </table>
      </form>

      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->

<script type="text/javascript">
</script>