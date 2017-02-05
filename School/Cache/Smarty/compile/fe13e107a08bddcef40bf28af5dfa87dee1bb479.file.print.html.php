<?php /* Smarty version Smarty-3.0.7, created on 2017-01-16 12:08:16
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Student\print.html" */ ?>
<?php /*%%SmartyHeaderCode:14387587c4730930f19-02914699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe13e107a08bddcef40bf28af5dfa87dee1bb479' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Student\\print.html',
      1 => 1480042628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14387587c4730930f19-02914699',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div>
<!--startprint-->
<table border="1px" cellspacing="0" cellpadding="0" style="width: 100%;">
    <tr>
        <?php  $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('print_title')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['title']->key => $_smarty_tpl->tpl_vars['title']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['title']->key;
?>
            <th><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</th>
        <?php }} ?>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['print_arr'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('printList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['print_arr']->key => $_smarty_tpl->tpl_vars['print_arr']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['print_arr']->key;
?>
        <tr>
            <?php  $_smarty_tpl->tpl_vars['print'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['print_arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['print']->key => $_smarty_tpl->tpl_vars['print']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['print']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value=='gender'){?>
                    <td class="text-center"><?php echo $_smarty_tpl->getVariable('code')->value['gender'][$_smarty_tpl->tpl_vars['print']->value['gender']]['name'];?>
</td>
                <?php }else{ ?>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['print']->value;?>
</td>
                <?php }?>
            <?php }} ?>
        </tr>
    <?php }} ?>
</table>
<!--endprint-->
</div>

<script type="text/javascript">
    bdhtml=window.document.body.innerHTML;
    sprnstr="<!--startprint-->";
    eprnstr="<!--endprint-->";
    prnhtml=bdhtml.substr(bdhtml.indexOf(sprnstr));
    prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));
    window.document.body.innerHTML=prnhtml; 
    window.print();
    window.close();
</script>