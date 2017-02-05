<?php /* Smarty version Smarty-3.0.7, created on 2016-11-25 11:35:41
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Common\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:144035837b18d115f70-61430334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ab77558299c03067a57d45b9f0d66b733b4ebe0' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Common\\menu.html',
      1 => 1480042648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144035837b18d115f70-61430334',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
?><?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
 $_smarty_tpl->tpl_vars['c']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
<li class="<?php if ($_smarty_tpl->tpl_vars['c']->value==$_GET['c']||$_smarty_tpl->tpl_vars['c']->value==$_GET['pc']){?>active open<?php }?>">
    <a href="javascript:void(0);" class="dropdown-toggle">
      <i class="menu-icon fa <?php echo $_smarty_tpl->tpl_vars['m']->value['icon'];?>
"></i>
      <span class="menu-text"> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['m']->value['name']);?>
 </span>
      <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">

      <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['m']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
 $_smarty_tpl->tpl_vars['a']->value = $_smarty_tpl->tpl_vars['s']->key;
?>
      <li class="<?php if ($_smarty_tpl->tpl_vars['c']->value==$_GET['c']&&$_smarty_tpl->tpl_vars['a']->value==$_GET['a']||$_smarty_tpl->tpl_vars['c']->value==$_GET['pc']&&$_smarty_tpl->tpl_vars['a']->value==$_GET['pa']){?>active<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['s']->value['uri'];?>
">
          <i class="menu-icon fa fa-caret-right"></i>
          <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['s']->value['name']);?>

        </a>

        <b class="arrow"></b>
      </li>
      <?php }} ?>

    </ul>

</li>
<?php }} ?>