<?php /* Smarty version Smarty-3.0.7, created on 2016-11-25 11:32:37
         compiled from "C:\Users\admin\Desktop\didanuo\Brave\Template\Exception\debug.html" */ ?>
<?php /*%%SmartyHeaderCode:311005837b0d514fce3-11222448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b758bedbbcd3d0e8fdde4023264380c14858a22' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Brave\\Template\\Exception\\debug.html',
      1 => 1480042586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311005837b0d514fce3-11222448',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<style>
#exception_handle {width: 100%; margin: 0; padding: 0; border: 1px solid #800000; border-top: none;}
#exception_handle h3 {font-size: 14px; margin: 0px; background-color: #800000; color: #FFF;}
#exception_handle table {font-size: 12px; text-align: left; margin: 2px;}
</style>

<div id="exception_handle">
<h3>&nbsp;Brave Error Handler</h3>
<table>
    <tr>
        <th>TYPE:</th>
        <td><?php echo $_smarty_tpl->getVariable('errtypes')->value[$_smarty_tpl->getVariable('error')->value['errno']];?>
</td>
    </tr>
    <?php if ($_smarty_tpl->getVariable('error')->value['errfile']!=''){?>
    <tr>
        <th>FILE:</th>
        <td><?php echo $_smarty_tpl->getVariable('error')->value['errfile'];?>
</td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('error')->value['errline']!=''){?>
    <tr>
        <th>LINE:</th>
        <td><?php echo $_smarty_tpl->getVariable('error')->value['errline'];?>
</td>
    </tr>
    <?php }?>
    <tr>
        <th valign="top">MSG:</th>
        <td><?php echo $_smarty_tpl->getVariable('error')->value['errstr'];?>
</td>
    </tr>
</table>
</div>