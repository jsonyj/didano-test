<?php /* Smarty version Smarty-3.0.7, created on 2016-11-26 15:37:59
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Student\../Common/paginate.html" */ ?>
<?php /*%%SmartyHeaderCode:2680558393bd78db8a5-85388177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5da98846838291b8bf11e0f9998c88412b22e06' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Student\\../Common/paginate.html',
      1 => 1480042648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2680558393bd78db8a5-85388177',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_brave_uri_replace')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_uri_replace.php';
if (!is_callable('smarty_function_brave_html_select')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_html_select.php';
?><div class="btn-toolbar pull-right pagination-wrapper" role="toolbar" aria-label="">

    <div class="btn-group" role="group" aria-label="">
      <div class="form-control-static" ><?php echo number_format($_smarty_tpl->getVariable('paging')->value['count']);?>
 件</div>
    </div>

    <div class="btn-group" role="group" aria-label="">

      <ul class="pagination pagination-sm">

          <?php if ($_smarty_tpl->getVariable('paging')->value['count']){?>
          <?php if ($_smarty_tpl->getVariable('paging')->value['pre']){?>
          <li><a href="<?php echo smarty_function_brave_uri_replace(array('array'=>'sh','page'=>1),$_smarty_tpl);?>
">&laquo;</a></li>
          <li><a href="<?php echo smarty_function_brave_uri_replace(array('array'=>'sh','page'=>$_smarty_tpl->getVariable('paging')->value['pre']),$_smarty_tpl);?>
">&lt;</a></li>
          <?php }else{ ?>
          <li class="invalid"><span>&lt;&lt;</span></li>
          <li class="invalid"><span>&lt;</span></li>
          <?php }?>

          <?php if ($_smarty_tpl->getVariable('paging')->value['start']){?>
          <li><a href="<?php echo smarty_function_brave_uri_replace(array('array'=>'sh','page'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('paging')->value['start'];?>
</a></li>
          <?php }?>

          <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['main']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['main']['name'] = 'main';
$_smarty_tpl->tpl_vars['smarty']->value['section']['main']['start'] = (int)$_smarty_tpl->getVariable('paging')->value['main']['start'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['main']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('paging')->value['main']['start']+$_smarty_tpl->getVariable('paging')->value['main']['count']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['main']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['main']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['main']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['main']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['main']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['main']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['main']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['main']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['main']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['main']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['main']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['main']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['main']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['main']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['main']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['main']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['main']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['main']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['main']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['main']['total']);
?>
          <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['main']['index']==$_smarty_tpl->getVariable('paging')->value['page']){?>
          <li class="active"><span><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['main']['index'];?>
</span></li>
          <?php }else{ ?>
          <li><a href="<?php echo smarty_function_brave_uri_replace(array('array'=>'sh','page'=>$_smarty_tpl->getVariable('smarty')->value['section']['main']['index']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['main']['index'];?>
</a></li>
          <?php }?>
          <?php endfor; endif; ?>
          
          <?php if ($_smarty_tpl->getVariable('paging')->value['end']){?>
          <li><a href="<?php echo smarty_function_brave_uri_replace(array('array'=>'sh','page'=>$_smarty_tpl->getVariable('paging')->value['pages']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('paging')->value['end'];?>
</a></li>
          <?php }?>

          <?php if ($_smarty_tpl->getVariable('paging')->value['next']){?>
          <li><a href="<?php echo smarty_function_brave_uri_replace(array('array'=>'sh','page'=>$_smarty_tpl->getVariable('paging')->value['next']),$_smarty_tpl);?>
">&gt;</a></li>
          <li><a href="<?php echo smarty_function_brave_uri_replace(array('array'=>'sh','page'=>$_smarty_tpl->getVariable('paging')->value['pages']),$_smarty_tpl);?>
">&gt;&gt;</a></li>
          <?php }else{ ?>
          <li class="invalid"><span>&gt;</span></li>
          <li class="invalid"><span>&gt;&gt;</span></li>
          <?php }?>

          <?php }?>
      </ul>

    </div>

    <?php if ($_smarty_tpl->getVariable('paging')->value['code']['one']){?>
    <div class="btn-group" role="group" aria-label="">
      <select class="form-control" name="sh[one]" onchange="pagingChange()">
          <?php echo smarty_function_brave_html_select(array('code'=>$_smarty_tpl->getVariable('paging')->value['code']['one'],'value'=>$_smarty_tpl->getVariable('sh')->value['one']),$_smarty_tpl);?>

      </select>
    </div>
    <?php }?>

    <?php if ($_smarty_tpl->getVariable('paging')->value['count']){?>
    <div class="btn-group" role="group" aria-label="">
      <div class="input-group input-group-sm">
          <input class="form-control page-input" type="text" name="sh[page]" value="">
          <span class="input-group-btn">
              <input class="btn btn-primary btn-xs" type="submit" value="GO">
          </span>
      </div>
    </div>
    <?php }?>

</div>