<?php /* Smarty version Smarty-3.0.7, created on 2016-12-02 09:44:28
         compiled from "C:\Users\admin\Desktop\didanuo\Rest\App\Templates\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:11955840d1fc888a57-80547426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '767679149ae545f670fd7f7c02826e9f371423c4' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Rest\\App\\Templates\\Index\\index.html',
      1 => 1480042728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11955840d1fc888a57-80547426',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.replace.php';
?><div class="alert alert-warning" role="alert">
  <ol>
    <li>除上传文件接口外，其它接口所有参数采用 json 格式提交，如：{"key":"value", "lng":31.1234, "lat":141.1234}</li>
    <li>设备ID需要在每次请求的 http header 中上传，key 为 device_no</li>
  </ol>
</div>

<div class="panel panel-default">

  <div class="panel-heading"><strong>接口一览</strong></div>

  <div class="panel-body">
  <?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('classes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
?>
  <div class="panel panel-default">
    <div class="panel-heading"><strong><?php echo $_smarty_tpl->tpl_vars['class']->value['description'];?>
</strong></div>
    <ul class="list-group">
      <?php  $_smarty_tpl->tpl_vars['method'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['class']->value['method']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['method']->key => $_smarty_tpl->tpl_vars['method']->value){
?>
      <li class="list-group-item">
        <a href="#<?php echo lcfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['class']->value['name'],'Controller',''));?>
-<?php echo lcfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['method']->value['name'],'Action',''));?>
" >
          <div><?php echo $_smarty_tpl->tpl_vars['method']->value['description'];?>
</div>
          <span>地址：http://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_smarty_tpl->getVariable('port')->value;?>
/api/<?php echo lcfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['class']->value['name'],'Controller',''));?>
/<?php echo lcfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['method']->value['name'],'Action',''));?>
</span>
        </a>
        <a target="_blank" href="<?php echo lcfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['class']->value['name'],'Controller',''));?>
/<?php echo lcfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['method']->value['name'],'Action',''));?>
"><span class="glyphicon glyphicon-new-window"></span></a>
      </li>
      <?php }} ?>
    </ul>
  </div>
  <?php }} ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading"><strong>接口详细</strong></div>
  <div class="panel-body">
  <?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('classes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
?>

    <?php  $_smarty_tpl->tpl_vars['method'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['class']->value['method']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['method']->key => $_smarty_tpl->tpl_vars['method']->value){
?>
    <a name="<?php echo lcfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['class']->value['name'],'Controller',''));?>
-<?php echo lcfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['method']->value['name'],'Action',''));?>
" ></a>
    <table class="table table-bordered">
      <tr>
        <th>API说明</th>
        <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['method']->value['description'];?>
</td>
      <tr>
      <tr>
        <th>请求地址</th>
        <td colspan="4">
          <span>http://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_smarty_tpl->getVariable('port')->value;?>
/api/<?php echo lcfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['class']->value['name'],'Controller',''));?>
/<?php echo lcfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['method']->value['name'],'Action',''));?>
</span>
          <a target="_blank" href="<?php echo lcfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['class']->value['name'],'Controller',''));?>
/<?php echo lcfirst(smarty_modifier_replace($_smarty_tpl->tpl_vars['method']->value['name'],'Action',''));?>
"><span class="glyphicon glyphicon-new-window"></span></a>
        </td>
      <tr>
      <th width="15%">项目名</th>
      <th width="15%">变量名</th>
      <th width="10%">类型</th>
      <th width="10%">必须</th>
      <th width="50%">备注</th>
      <?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['method']->value['param']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['param']->value['name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['param']->value['var'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['param']->value['type'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['param']->value['required'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['param']->value['remark'];?>
</td>
        </tr>
      <?php }} ?>
      <tr><th colspan="5">返回值</th><tr>
      <tr><th>说明</th><td colspan="4"><pre><?php echo $_smarty_tpl->tpl_vars['method']->value['return']['array'];?>
</pre></td><tr>
      <tr><th>JSON</a></th><td colspan="4"><?php echo $_smarty_tpl->tpl_vars['method']->value['return']['json'];?>
</td><tr>
    </table>
    <?php }} ?>

  <?php }} ?>
  </div>
</div>