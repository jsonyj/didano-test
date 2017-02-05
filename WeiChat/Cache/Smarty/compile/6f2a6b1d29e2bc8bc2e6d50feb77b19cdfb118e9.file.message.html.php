<?php /* Smarty version Smarty-3.0.7, created on 2016-12-02 17:27:20
         compiled from "C:\Users\admin\Desktop\didanuo\WeiChat\App\Templates\Index\message.html" */ ?>
<?php /*%%SmartyHeaderCode:755258413e78d9f114-16414662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f2a6b1d29e2bc8bc2e6d50feb77b19cdfb118e9' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\WeiChat\\App\\Templates\\Index\\message.html',
      1 => 1480042589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '755258413e78d9f114-16414662',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row row-content margin-lr-none">
  <?php if ($_smarty_tpl->getVariable('message')->value['url']){?><a href="<?php echo $_smarty_tpl->getVariable('message')->value['url'];?>
"><?php }?>
    <div class="alert alert-<?php echo $_smarty_tpl->getVariable('message')->value['type'];?>
" role="alert" style="font-size:20px;"><i class="iconfont iconfont-<?php echo $_smarty_tpl->getVariable('message')->value['type'];?>
">&#xe60c;</i> <?php echo $_smarty_tpl->getVariable('message')->value['body'];?>
</div>
  <?php if ($_smarty_tpl->getVariable('message')->value['url']){?></a><?php }?>
</div>

<script>
</script>
