<?php /* Smarty version Smarty-3.0.7, created on 2016-12-09 14:53:11
         compiled from "C:\Users\admin\Desktop\didanuo\WeiChat\App\Templates\Report\article_list.html" */ ?>
<?php /*%%SmartyHeaderCode:27874584a54d7348273-45113217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d24f66624ea1d216dc912a8275b240c4c742d40' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\WeiChat\\App\\Templates\\Report\\article_list.html',
      1 => 1480042589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27874584a54d7348273-45113217',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('articleList')->value){?>

  <div class="more-block-hb">

    <div class="report-body padding-bottom-0 more-title-hb">
      <h4>更多精彩</h4>
    </div>

    <div class="report-body list-group  more-item ">
      <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('articleList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
?>
        <?php if ($_smarty_tpl->tpl_vars['article']->value['link']){?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" class="more-item-title-hb">
            <?php }else{ ?>
              <div class="list-group-item">
                <?php }?>
                  <p class="list-group-item-text list-group-item-text-article">
                    <?php echo $_smarty_tpl->tpl_vars['article']->value['body'];?>

                  </p>
                  <?php if ($_smarty_tpl->tpl_vars['article']->value['link']){?>
          </a>
          <?php }else{ ?>
            </div>
            <?php }?>
              <?php }} ?>
    </div>


    <?php }?>
  </div>