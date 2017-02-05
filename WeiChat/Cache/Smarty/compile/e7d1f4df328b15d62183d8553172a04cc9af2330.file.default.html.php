<?php /* Smarty version Smarty-3.0.7, created on 2016-12-02 17:26:14
         compiled from "C:\Users\admin\Desktop\didanuo\WeiChat\App\Templates\Layout\default.html" */ ?>
<?php /*%%SmartyHeaderCode:1114958413e36953094-14019288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7d1f4df328b15d62183d8553172a04cc9af2330' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\WeiChat\\App\\Templates\\Layout\\default.html',
      1 => 1480042589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1114958413e36953094-14019288',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
?><!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page')->value['title']);?>
</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/bootstrap-notify.min.css">
    <link rel="stylesheet" href="css/bootstrap-dialog.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/ladda-themeless.min.css">
    <link rel="stylesheet" href="css/addone.css">
    <link rel="stylesheet" href="css/mobiscroll.custom-2.5.2.min.css">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-notify.min.js"></script>
    <script src="js/bootstrap-dialog.min.js"></script>
    <script src="js/spin.min.js"></script> 
    <script src="js/ladda.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/mobiscroll.custom-2.5.2.min.js"></script>
    
    <!--如果不需要jquery ajax 则可以不引入-->
  </head>

  <body>
     <?php echo $_smarty_tpl->getVariable('main')->value;?>

  </body>
</html>