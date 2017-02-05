<?php /* Smarty version Smarty-3.0.7, created on 2017-01-12 10:37:30
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1566458758e667a6975-98409778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7184cc69f13859d5577780c90468dfe3e161ec05' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Index\\index.html',
      1 => 1483008051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1566458758e667a6975-98409778',
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
    <li class="active">首页</li>
  </ul><!-- /.breadcrumb -->

</div>
<script src="js/line/Chart.js"></script>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->

          <table class="table table-bordered table-form">
              <tr>
                <th>学校名称：</th>
                <td>
                  <?php echo $_SESSION[@SESSION_USER]['school_title'];?>

                </td>
              </tr>
              <tr>
                <th>电话：</th>
                <td>
                  <?php echo $_SESSION[@SESSION_USER]['school_phone'];?>

                </td>
              </tr>
              <tr>
                <th>地址：</th>
                <td>
                  <?php echo $_SESSION[@SESSION_USER]['school_address'];?>

                </td>
              </tr>
          </table>

      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->