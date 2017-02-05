<?php /* Smarty version Smarty-3.0.7, created on 2016-12-02 17:27:22
         compiled from "C:\Users\admin\Desktop\didanuo\WeiChat\App\Templates\User\index.html" */ ?>
<?php /*%%SmartyHeaderCode:513658413e7aee8d00-82162846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbc8ed9a070837e5cb80e0e4db80fd42889ad511' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\WeiChat\\App\\Templates\\User\\index.html',
      1 => 1480042589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '513658413e7aee8d00-82162846',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- logo -->
<div class="row top-nav-bar">
    <div class="text-left">
    </div>
    <div class="col-xs-9 text-center">
        <?php $_template = new Smarty_Internal_Template("../Common/logo.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>
    <div class="col-xs-3 text-right logo-title">
        <h4 class="text-center">宝贝中心</h4>
    </div>
</div>
<!-- /.logo -->

<div class="row user-profile-body">

  <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('parent')->value['studentList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
?>
  <div class="panel panel-default no-margin">
    <div class="panel-heading padding-left-0 padding-right-0">
      <div class="row">
        <div class="col-xs-6 padding-5">
            <img  class=" img-circle-avatar" src="<?php if ($_smarty_tpl->tpl_vars['student']->value['studentDetectionImg']['file_path']){?><?php echo @APP_RESOURCE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['student']->value['studentDetectionImg']['file_path'];?>
<?php }else{ ?>http://tse1.mm.bing.net/th?id=OIP.M76446756dcb348b279464f77687a43b9o0&pid=15.1<?php }?>">
        </div>
        <div class="col-xs-6 padding-5">
          <p><?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['student']->value['school_title'];?>
 <?php echo $_smarty_tpl->tpl_vars['student']->value['class_title'];?>
</p>
          <hr>
          <p>身高：<?php if ($_smarty_tpl->tpl_vars['student']->value['studentDetection']['height']){?><?php echo $_smarty_tpl->tpl_vars['student']->value['studentDetection']['height']/10;?>
厘米<?php }else{ ?>暂无数据<?php }?></p>
          <hr>
          <p>体重：<?php if ($_smarty_tpl->tpl_vars['student']->value['studentDetection']['weight']/1000){?><?php echo $_smarty_tpl->tpl_vars['student']->value['studentDetection']['weight']/1000;?>
公斤<?php }else{ ?>暂无数据<?php }?></p>
        </div>
      </div>
    </div>
    
    <div class="panel-heading no-bottom">
        <a href="?c=report&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
">
            <div class="row">
                <div class="col-xs-4 no-padding"><img src="img/report.jpg" class="img-responsive"></div>
                <div class="col-xs-8">
                    <h4>健康日历</h4>
                    <p>点击查看宝贝历史健康数据</p>
                </div>
            </div>
        </a>
        
        <hr>
        <a href="?c=group&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
">
            <div class="row">
                <div class="col-xs-4 no-padding"><img src="img/group.jpg" class="img-responsive"></div>
                <div class="col-xs-8">
                    <h4>家庭成员管理</h4>
                    <p>让家人一起关心宝贝</p>
                </div>
            </div>
        </a>
        
        <hr>
        <input type="button" class="btn width-100 btn-primary" value="二维码查看" onclick="window.location.href='?c=student&a=qrcode&student_id=<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
'"/>
    </div>
    
  </div>
  <br>
  <?php }} ?>

</div>

<script>
</script>
