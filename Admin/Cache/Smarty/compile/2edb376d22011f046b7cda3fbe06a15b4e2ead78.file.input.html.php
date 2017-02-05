<?php /* Smarty version Smarty-3.0.7, created on 2016-12-08 14:03:49
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Help\input.html" */ ?>
<?php /*%%SmartyHeaderCode:191995848f7c532f781-56517378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2edb376d22011f046b7cda3fbe06a15b4e2ead78' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Help\\input.html',
      1 => 1480042648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191995848f7c532f781-56517378',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
if (!is_callable('smarty_function_brave_error_hint')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_error_hint.php';
if (!is_callable('smarty_function_ace_switch')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.ace_switch.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li><a href="?c=help&a=index">帮助一览</a></li>
    <li class="active"><?php if ($_GET['id']){?>编辑<?php }else{ ?>新增<?php }?>帮助</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->

      <div class="tabbable">
        <ul id="myTab" class="nav nav-tabs">
          <li class="active">
            <a href="#basic-tab" data-toggle="tab" aria-expanded="true">
              <i class="green ace-icon fa fa-file-text bigger-120"></i>
              基本信息
            </a>
          </li>

          <li class="disable">
            <a href="#file-tab" data-toggle="tab" aria-expanded="false">
              <i class="green ace-icon fa fa-cloud-upload bigger-120"></i>
              资源文件
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane fade active in" id="basic-tab">

            <form name="expert_form" method="post">
              <table class="table table-bordered table-form">
                  <tr>
                    <th class="must">标题：</th>
                    <td colspan="3">
                      <input type="text" name="form[title]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['title']);?>
"/>
                      <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'title'),$_smarty_tpl);?>

                    </td>
                  </tr>
                  <tr>
                    <th class="must">链接地址：</th>
                    <td colspan="3"> 
                      <input type="text" name="form[link]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['link']);?>
" placeholder="http://"/>
                      <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'link'),$_smarty_tpl);?>

                    </td>
                  </tr>
                  <tr>
                    <th>排序：</th>
                    <td colspan="3"> 
                      <input type="text" name="form[weight]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['weight']);?>
" />
                      <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'weight'),$_smarty_tpl);?>

                    </td>
                  </tr>
                  <tr>
                      <th class="must">有效状态：</th>
                      <td>
                          <?php echo smarty_function_ace_switch(array('name'=>"form[status]",'value'=>$_smarty_tpl->getVariable('form')->value['status'],'code'=>"1"),$_smarty_tpl);?>

                      </td>
                  </tr>
                  <tr class="option">
                      <th></th>
                      <td>
                        <input type="submit" class="btn btn-primary" name="complete" value="保存" />
                      </td>
                  </tr>
              </table>
          </form>
        </div>

        <div class="tab-pane" id="file-tab">
           <?php if ($_smarty_tpl->getVariable('form')->value['id']){?>
              <table class="table table-bordered table-form">
                  <tr>
                    <th class="must">图片：
                        <span class="help-block"><?php echo $_smarty_tpl->getVariable('code')->value['page_type_wh'][$_smarty_tpl->getVariable('form')->value['type']]['name'];?>
</span>
                    </th>
                    <td>
                      <form action="?c=help&a=upload&id=<?php echo $_smarty_tpl->getVariable('form')->value['id'];?>
" class="dropzone" id="dropzone-help-image" enctype="multipart/form-data">
                        <div class="fallback">
                          <input name="help[file]" type="file" multiple="" />
                        </div>
                      </form>
                    </td>
                  </tr>
              </table>
          <?php }else{ ?>
            <div class="alert alert-danger">
              <i class="ace-icon fa fa-warning"></i>
              请先填写并保存基本信息。
            </div>
          <?php }?>
        </div>

      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->

<!-- <script src="js/jquery.ztree.core-3.5.js"></script> -->
<!-- <script src="js/jquery.ztree.excheck-3.5.min.js"></script> -->
<!-- <script src="js/jquery.ztree.exedit-3.5.min.js"></script> -->
<!-- <link href="css/zTreeStyle/zTreeStyle.css" type="text/css" rel="stylesheet" /> -->

<script type="text/javascript">

jQuery(function($) {
  <?php if ($_smarty_tpl->getVariable('form')->value['id']){?>
  try {
    Dropzone.autoDiscover = false;

    var helpImage = createDropZone("#dropzone-help-image", 'help[file]', ".jpeg,.jpg,.png,.gif", 2, 1, '?c=help&a=getHelpImg&id=<?php echo $_GET['id'];?>
', '?c=help&a=deleteHelpImg&id=<?php echo $_GET['id'];?>
');
    
    $(document).one('ajaxloadstart.page', function(e) {
      try {
          helpImage.destroy();
      } catch(e) {}
    });

  } catch(e) {
    alert('请升级浏览器版本。');
  }
  <?php }?>

});

</script>