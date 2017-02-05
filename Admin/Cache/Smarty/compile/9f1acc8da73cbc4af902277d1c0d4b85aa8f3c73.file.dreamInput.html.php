<?php /* Smarty version Smarty-3.0.7, created on 2016-12-09 11:36:34
         compiled from "C:\Users\admin\Desktop\didanuo\Admin\App\Templates\Student\dreamInput.html" */ ?>
<?php /*%%SmartyHeaderCode:21681584a26c24137a8-32896437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f1acc8da73cbc4af902277d1c0d4b85aa8f3c73' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\Admin\\App\\Templates\\Student\\dreamInput.html',
      1 => 1480042648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21681584a26c24137a8-32896437',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
if (!is_callable('smarty_function_brave_error_hint')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_error_hint.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
  </script>

  <ul class="breadcrumb">
    <li>
      <a href="?c=student&a=dreamIndex&pc=student&pa=dreamIndex">学生梦想</a>
    </li>
    <li class="active"><?php if ($_GET['id']){?>修改<?php }else{ ?>新增<?php }?>梦想</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->

        <div class="tabbable">

          <ul id="myTab" class="nav nav-tabs">
            <li class="<?php if ($_GET['tab']==''){?>active<?php }else{ ?>disable<?php }?>">
              <a href="#base-tab" data-toggle="tab" aria-expanded="false">
                <i class="green ace-icon fa fa-table bigger-120"></i>
                梦想描述
              </a>
            </li>

            <li class="<?php if ($_GET['tab']=='other-tab'){?>active<?php }else{ ?>disable<?php }?>">
              <a href="#other-tab" data-toggle="tab" aria-expanded="false">
                <i class="green ace-icon fa fa-user bigger-120"></i>
                选择梦想上传
              </a>
            </li>
          </ul>
        </div>

          <div class="tab-content">

            <div class="tab-pane fade in <?php if ($_GET['tab']==''){?>active<?php }?>" id="base-tab">

                <form name="data_form" method="post">
                  <table class="table table-bordered table-form">
                      <tr>
                        <th class="must">梦想描述:</th>
                        <td>
                          <input type="text" name="form[name]" size="30" class="form-control text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['name']);?>
"/>
                          <?php echo smarty_function_brave_error_hint(array('errors'=>$_smarty_tpl->getVariable('errors')->value,'name'=>'name'),$_smarty_tpl);?>

                        </td>
                      </tr>

                      <tr class="option">
                        <th></th>
                        <td>
                          <input type="submit" class="btn btn-primary" name="complete" value="保存" />
                        </td>
                      </tr>
                  </table>
                </form>

              </div>

              <div class="tab-pane fade in <?php if ($_GET['tab']=='other-tab'){?>active<?php }?>" id="other-tab">
                <?php if ($_GET['id']){?>

                <table class="table table-bordered table-form">
                    <tr>
                    <th class="must">图片：</th>
                      <td>
                        <form action="?c=student&a=upload&id=<?php echo $_GET['id'];?>
" class="dropzone" id="dropzone-icon-img" enctype="multipart/form-data">
                          <div class="fallback">
                           <input name="dream[file]" type="file" multiple="" />
                          </div>
                        </form>
                      </td>
                    </tr>
                </table>

                <?php }else{ ?>
                  <div class="alert alert-danger">
                    <i class="ace-icon fa fa-warning"></i>
                    请先保存梦想基本信息
                  </div>
                <?php }?>

              </div>

            </div>

          </div>

        </div>

      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->

<script type="text/javascript">
jQuery(function($) {
    <?php if ($_GET['id']){?>
        try {
            Dropzone.autoDiscover = false;

            var topImage = createDropZone("#dropzone-icon-img", 'dream[file]', ".jpeg,.jpg,.png,.gif", 1, 1, '?c=student&a=getDreamImg&id=<?php echo $_GET['id'];?>
', '?c=student&a=deleteDreamImg&id=<?php echo $_GET['id'];?>
');

            $(document).one('ajaxloadstart.page', function(e) {
                try {
                    topImage.destroy();
                } catch(e) {}
            });

        } catch(e) {
            alert('请使用谷歌或者火狐浏览器。');
        }
    <?php }?>
});
</script>
