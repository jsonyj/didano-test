<?php /* Smarty version Smarty-3.0.7, created on 2016-12-08 17:11:32
         compiled from "C:\Users\admin\Desktop\didanuo\WeiChat\App\Templates\Report\index.html" */ ?>
<?php /*%%SmartyHeaderCode:23705584923c4a463e9-07111517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adde84106c18cc3d694e61de28075cdec1575fd0' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\WeiChat\\App\\Templates\\Report\\index.html',
      1 => 1480042589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23705584923c4a463e9-07111517',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="css/calendar.min.css">

<script type="text/javascript" src="js/underscore.min.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>
<script type="text/javascript" src="js/calendar.zh-CN.js"></script>

<div id="calendar-page">

<div class="row top-nav-bar">
    <div class="col-xs-1 text-left">
        <a class="btn btn-sm on-active padding-left-0" href="?c=user"><i class="iconfont">&#xe600;</i></a>
    </div>
    <div class="col-xs-8 text-center">
        <?php $_template = new Smarty_Internal_Template("../Common/logo.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>
    <div class="col-xs-3 text-right logo-title">
        <h5 class="text-center margin-bottom-0">成长报告</h5>
    </div>
</div>

<div class="panel panel-default panel-margin">
    <div class="panel-heading padding-left-0 padding-right-0">
        <div class="row">
            <div class="col-xs-6 padding-5"><img src="<?php if ($_smarty_tpl->getVariable('student')->value['studentDetectionImg']['file_path']){?><?php echo @APP_RESOURCE_URL;?>
<?php echo $_smarty_tpl->getVariable('student')->value['studentDetectionImg']['file_path'];?>
<?php }else{ ?>http://tse1.mm.bing.net/th?id=OIP.M76446756dcb348b279464f77687a43b9o0&pid=15.1<?php }?>" class=" img-circle-avatar"></div>
             <div class="col-xs-6 padding-5">
                 <p><?php echo $_smarty_tpl->getVariable('student')->value['name'];?>
 <?php echo $_smarty_tpl->getVariable('student')->value['school_title'];?>
 <?php echo $_smarty_tpl->getVariable('student')->value['class_title'];?>
</p>
                 <hr>
                 <p>身高：<?php if ($_smarty_tpl->getVariable('student')->value['studentDetection']['height']){?><?php echo $_smarty_tpl->getVariable('student')->value['studentDetection']['height']/10;?>
厘米<?php }else{ ?>暂无数据<?php }?></p>
                 <hr>
                 <p>体重：<?php if ($_smarty_tpl->getVariable('student')->value['studentDetection']['weight']){?><?php echo $_smarty_tpl->getVariable('student')->value['studentDetection']['weight']/1000;?>
公斤<?php }else{ ?>暂无数据<?php }?></p>
             </div>
         </div>
    </div>
</div>

<div class="row report-body padding-bottom-0">
  <div class="col-xs-12 text-center"><h3 class="calendar-header no-margin"></h3></div>
</div>

<div class="row report-body padding-bottom-0">

  <div class="col-xs-6">
    <div class="btn-group">
      <button class="btn btn-default active" data-calendar-view="month">月</button>
      <button class="btn btn-default" data-calendar-view="year">年</button>
    </div>
  </div>

  <div class="col-xs-6 text-right">
    <div class="btn-group">
      <button class="btn btn-default" data-calendar-nav="prev">&lt;</button>
      <button class="btn btn-default" data-calendar-nav="today">今天</button>
      <button class="btn btn-default" data-calendar-nav="next">&gt;</button>
    </div>
  </div>

</div>

<div class="row report-body">
  <div class="col-xs-12">
    <div id="calendar"></div>
  </div>
</div>

</div>

<div id="report-page">
</div>

<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
var calendar = $("#calendar").calendar({
  events_source: '?c=report&a=event&studentId=<?php echo $_smarty_tpl->getVariable('student')->value['id'];?>
',
  tmpl_path: "calendar-tmpls/",
  weekbox: false,
  language: 'zh-CN',
  first_day: 1,
  view: 'month',
  onAfterViewLoad: function(view) {
    $('.calendar-header').text(this.getTitle());
    $('.btn-group button').removeClass('active');
    $('button[data-calendar-view="' + view + '"]').addClass('active');
  },
});

$('.btn-group button[data-calendar-view]').each(function() {
  var $this = $(this);
  $this.click(function() {
    calendar.view($this.data('calendar-view'));
  });
});

$('.btn-group button[data-calendar-nav]').each(function() {
  var $this = $(this);
  $this.click(function() {
    calendar.navigate($this.data('calendar-nav'));
  });
});

function showReportPage(url, title) {
  $.get(url, function(html) {
    $('#report-page').html(html);
    $('#calendar-page').fadeOut('fast', function() {
      $('#report-page').fadeIn('slow');

      //微信分享
      wx.config({
            debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
            appId: '<?php echo @WX_APP_ID;?>
', // 必填，公众号的唯一标识
            timestamp: '<?php echo $_smarty_tpl->getVariable('signPackage')->value['timestamp'];?>
', // 必填，生成签名的时间戳
            nonceStr: '<?php echo $_smarty_tpl->getVariable('signPackage')->value['nonceStr'];?>
', // 必填，生成签名的随机串
            signature: '<?php echo $_smarty_tpl->getVariable('signPackage')->value['signature'];?>
',// 必填，签名，见附录1
            jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
        });

        wx.ready(function(){

            wx.onMenuShareTimeline({
                title: title, // 分享标题
                link: '<?php echo @APP_WEICHAT_URL;?>
' + url + '&full=true&share=share', // 分享链接
                imgUrl: '', // 分享图标
                success: function () { 
                    // 用户确认分享后执行的回调函数
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                }
            });

            wx.onMenuShareAppMessage({
                title: title, // 分享标题
                link: '<?php echo @APP_WEICHAT_URL;?>
' + url + '&full=true&share=share', // 分享链接
                imgUrl: '', // 分享图标
                type: 'link', // 分享类型,music、video或link，不填默认为link
                dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                success: function () {
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                }
            });
        });
    });
  })
}

function closeReport() {
  $('#report-page').fadeOut('fast', function() {
    $('#calendar-page').fadeIn('slow');
    $('#report-page').html('');
  });
}

</script>