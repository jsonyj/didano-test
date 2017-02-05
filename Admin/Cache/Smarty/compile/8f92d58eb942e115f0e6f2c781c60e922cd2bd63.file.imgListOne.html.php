<?php /* Smarty version Smarty-3.0.7, created on 2016-12-09 11:43:10
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Student\imgListOne.html" */ ?>
<?php /*%%SmartyHeaderCode:14606584a284e05a3b8-62043631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f92d58eb942e115f0e6f2c781c60e922cd2bd63' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Student\\imgListOne.html',
      1 => 1480042648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14606584a284e05a3b8-62043631',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li>
      <a href="?c=student&a=dreamIndex&pc=student&pa=dreamIndex">学生梦想</a>
    </li>
    <li class="active">梦想图片(放大版)</li>
  </ul><!-- /.breadcrumb -->

</div>
    <div></br></div>
    <div></br></div>
    <div></br></div>
    <div></br></div>
    <div>
    <center>
        <table>
            <td>
                <td class="text-center"><img src="<?php echo @APP_RESOURCE_URL;?>
<?php echo $_smarty_tpl->getVariable('form')->value['img_url'];?>
" class="dream_more"></td>
            </td>
        </table>
    </center>
    </div>
<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->

      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->
