<?php /* Smarty version Smarty-3.0.7, created on 2016-12-02 17:28:41
         compiled from "C:\Users\admin\Desktop\didanuo\WeiChat\App\Templates\Student\qrcode.html" */ ?>
<?php /*%%SmartyHeaderCode:222658413ec94e77a6-14446269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e17f656ac2c5ab5981dbc201f13a12ef5d589c97' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\WeiChat\\App\\Templates\\Student\\qrcode.html',
      1 => 1480042588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222658413ec94e77a6-14446269',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row top-nav-bar">
    <div class="col-xs-1 text-left">
        <a class="btn btn-sm on-active padding-left-0" href="?c=user"><i class="iconfont">&#xe600;</i></a>
    </div>
    <div class="col-xs-8 text-center">
        <?php $_template = new Smarty_Internal_Template("../Common/logo.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>
    <div class="col-xs-3 text-right logo-title">
        <h4 class="text-center margin-top-15 margin-bottom-0"></h4>
    </div>
</div>

<div class="padding-5">
    <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('parent')->value['student_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['student']->key;
?>
    <input type="button" key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="student_list btn width-100 <?php if ($_smarty_tpl->tpl_vars['key']->value==0){?>btn-danger<?php }else{ ?>btn-info<?php }?>" id="student_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
"/>

    <div id="qrcode_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="qrcode_list panel-margin panel-align <?php if ($_smarty_tpl->tpl_vars['key']->value==0){?> divShow <?php }else{ ?> divHidden <?php }?>">
        <div class="panel-heading no-bottom">
            <div class="row">
                <div class="col-xs-6 text-center">
                    <div style="padding-top: 70%">二维码接送，方便</div>
                </div>
                <div class="col-xs-6 text-center">
                    <img style="width: 100%" src="<?php echo @APP_RESOURCE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['student']->value['qrcode_url'];?>
?rand=<?php echo $_smarty_tpl->getVariable('random_num')->value;?>
" />
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3 text-center"></div>
                <div class="col-xs-6 text-center">
                    <img style="width: 100%" src="<?php echo @APP_RESOURCE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['student']->value['qrcode_url'];?>
?rand=<?php echo $_smarty_tpl->getVariable('random_num')->value;?>
" />
                </div>
                <div class="col-xs-3 text-center"></div>
            </div>

            <div class="row">
                <div class="col-xs-6 text-center">
                    <img style="width: 100%" src="<?php echo @APP_RESOURCE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['student']->value['qrcode_url'];?>
?rand=<?php echo $_smarty_tpl->getVariable('random_num')->value;?>
" />
                </div>
                <div class="col-xs-6 text-center">
                    <div style="padding-top: 20%">二维码实时更新，安全</div>
                </div>
            </div>

        </div>
    </div>
    <?php }} ?>
</div>

<script type="text/javascript">

$('.student_list').click(function() {
    
    var key = $(this).attr('key');
    $('.student_list').removeClass('btn-danger');
    $('.student_list').addClass('btn-info');
    $(this).removeClass('btn-info');
    $(this).addClass('btn-danger');
    
    $('.qrcode_list').removeClass('divShow');
    $('.qrcode_list').addClass('divHidden');
    $('#qrcode_' + key).removeClass('divHidden');
    $('#qrcode_' + key).addClass('divShow');
    
})

</script>
