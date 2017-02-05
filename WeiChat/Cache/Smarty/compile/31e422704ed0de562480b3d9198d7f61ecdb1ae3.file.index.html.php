<?php /* Smarty version Smarty-3.0.7, created on 2016-12-08 17:11:37
         compiled from "C:\Users\admin\Desktop\didanuo\WeiChat\App\Templates\Group\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6103584923c91f35d7-80250690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31e422704ed0de562480b3d9198d7f61ecdb1ae3' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\WeiChat\\App\\Templates\\Group\\index.html',
      1 => 1480042589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6103584923c91f35d7-80250690',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
 
    <!--首页 index -->
    <div class="ui-header-w">
        <div class="container-fluid">
            <div class="row">
                  <div class="inner">
                     <?php if ($_smarty_tpl->getVariable('student_list')->value){?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('student_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
?>
                            <a class="btn btn-lg btn-default col-xs-12 <?php if (count($_smarty_tpl->getVariable('student_list')->value)==1){?>hidden<?php }?> <?php if ($_smarty_tpl->tpl_vars['val']->value['id']==$_smarty_tpl->getVariable('studentId')->value){?>btn-green-bk<?php }else{ ?><?php }?>" href="?c=group&a=index&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</a>
                        <?php }} ?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="section sec-welfare">
        <div class="container">
            <div class="row parent-index-div">
            <?php if ($_smarty_tpl->getVariable('parentList')->value){?>
                <div class="col-xs-12 padding-none">
                    <?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('parentList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['parent']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['key']->value%2==0){?>
                        <div class="col-xs-4-7 group-jiao-div group-left padding-none margin-top-15">
                            <div class="name-phone">
                                <span class="parent-name"><?php echo $_smarty_tpl->tpl_vars['parent']->value['relation_title'];?>
</span>
                                <a class="parent-phone" href="tel:<?php echo $_smarty_tpl->tpl_vars['parent']->value['phone'];?>
"><i class="iconfont iconfont-color-blue">&#xe619;</i><?php echo $_smarty_tpl->tpl_vars['parent']->value['phone'];?>
</a>
                            </div>
                            <div class="al-parent-img al-img-border">
                                <img src="<?php echo @APP_RESOURCE_URL;?>
/system/<?php echo $_smarty_tpl->tpl_vars['parent']->value['relation_id'];?>
.png"/>
                            </div>
                            <div class="parent-weibu text-center clear-both">
                                <a class="parent-bianji col-xs-6" href="?c=group&a=input&id=<?php echo $_GET['id'];?>
&parent_id=<?php echo $_smarty_tpl->tpl_vars['parent']->value['parent_id'];?>
"><i class="iconfont iconfont-color-blue">&#xe61b;</i>编辑</a>
                                 <?php if ($_smarty_tpl->getVariable('login_parent_info')->value['type']){?>
                                    <?php if (($_smarty_tpl->tpl_vars['parent']->value['parent_id']!=$_smarty_tpl->getVariable('login_parent_info')->value['id'])&&(!$_smarty_tpl->tpl_vars['parent']->value['type'])){?>
                                    <a class="parent-shanc col-xs-6" href="javascript:void(0);" onclick="deleteGroup(<?php echo $_smarty_tpl->tpl_vars['parent']->value['parent_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['parent']->value['student_id'];?>
, this)" data-style="zoom-out" data-size="l"><i class="iconfont iconfont-color-blue">&#xe61a;</i>删除</a>
                                    <?php }?>
                                <?php }else{ ?>
                                    <?php if (($_smarty_tpl->tpl_vars['parent']->value['parent_created']>$_smarty_tpl->getVariable('login_parent_info')->value['created'])&&(!$_smarty_tpl->tpl_vars['parent']->value['type'])){?>
                                    <a  class="parent-shanc col-xs-6" href="javascript:void(0);" onclick="deleteGroup(<?php echo $_smarty_tpl->tpl_vars['parent']->value['parent_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['parent']->value['student_id'];?>
, this)" data-style="zoom-out" data-size="l" ><i class="iconfont iconfont-color-blue">&#xe61a;</i> 删除</a>
                                    <?php }?>
                                <?php }?>
                                
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="col-xs-4-7 group-jiao-div group-right padding-none margin-top-15">
                            <div class="name-phone">
                                <span class="parent-name"><?php echo $_smarty_tpl->tpl_vars['parent']->value['relation_title'];?>
</span>
                                <a class="parent-phone" href="tel:<?php echo $_smarty_tpl->tpl_vars['parent']->value['phone'];?>
"><i class="iconfont iconfont-color-blue">&#xe619;</i><?php echo $_smarty_tpl->tpl_vars['parent']->value['phone'];?>
</a>
                            </div>
                            <div class="al-parent-img al-img-border">
                                <img src="<?php echo @APP_RESOURCE_URL;?>
/system/<?php echo $_smarty_tpl->tpl_vars['parent']->value['relation_id'];?>
.png"/>
                            </div>
                            <div class="parent-weibu text-center">
                                <a class="parent-bianji col-xs-6" href="?c=group&a=input&id=<?php echo $_GET['id'];?>
&parent_id=<?php echo $_smarty_tpl->tpl_vars['parent']->value['parent_id'];?>
"><i class="iconfont iconfont-color-blue">&#xe61b;</i>编辑</a>
                                 <?php if ($_smarty_tpl->getVariable('login_parent_info')->value['type']){?>
                                    <?php if (($_smarty_tpl->tpl_vars['parent']->value['parent_id']!=$_smarty_tpl->getVariable('login_parent_info')->value['id'])&&(!$_smarty_tpl->tpl_vars['parent']->value['type'])){?>
                                    <a class="parent-shanc col-xs-6" href="javascript:void(0);" onclick="deleteGroup(<?php echo $_smarty_tpl->tpl_vars['parent']->value['parent_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['parent']->value['student_id'];?>
, this)" data-style="zoom-out" data-size="l"><i class="iconfont iconfont-color-blue">&#xe61a;</i>删除</a>
                                    <?php }?>
                                <?php }else{ ?>
                                    <?php if (($_smarty_tpl->tpl_vars['parent']->value['parent_created']>$_smarty_tpl->getVariable('login_parent_info')->value['created'])&&(!$_smarty_tpl->tpl_vars['parent']->value['type'])){?>
                                    <a  class="parent-shanc col-xs-6" href="javascript:void(0);" onclick="deleteGroup(<?php echo $_smarty_tpl->tpl_vars['parent']->value['parent_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['parent']->value['student_id'];?>
, this)" data-style="zoom-out" data-size="l" ><i class="iconfont iconfont-color-blue">&#xe61a;</i> 删除</a>
                                    <?php }?>
                                <?php }?>
                                
                            </div>
                        </div>
                        <?php }?>
                    
                    <?php }} ?>
                </div>
            <?php }else{ ?>
            
            <?php }?>
            </div>
        </div>
    </div>
    
    <div class="section sec-welfare margin-top-30 margin-bottom-100">
        <div class="container">
            <div class="row parent-index-biao">
                <div class="col-xs-12 text-center padding-none">
                    <a type="button" class="btn btn-info col-xs-12 al-btn-color" href="?c=group&a=input&id=<?php echo $_GET['id'];?>
">新增成员</a>
                </div>
            </div>
        </div>
    </div>
      
    <div class="margin-top-100 height-di-w"></div>
    <!--底部导航条-->
   <footer class="footer">
        <!--跳转到首页-->
        <div class="col-xs-12 text-center padding-lrq-10">
            <a href="?c=parent&a=index&studentId=<?php echo $_smarty_tpl->getVariable('studentId')->value;?>
" class="<?php if ($_GET['a']=='index'&&$_GET['c']=='parent'){?>color-green <?php }?>" ><i class="iconfont iconfont-color-hei">&#xe613;</i><div>首页</div></a>

            <!--跳转到接送报告-->
            <a href="?c=parent&a=report&studentId=<?php echo $_smarty_tpl->getVariable('studentId')->value;?>
&type=<?php echo @REPORT_TYPE_DAY;?>
" class="<?php if ($_GET['a']=='report'){?>color-green <?php }?>" ><i class="iconfont iconfont-color-hei">&#xe616;</i><div>报告</div></a>

            <!--跳转到查询-->
            <a href="?c=query&a=index&studentId=<?php echo $_smarty_tpl->getVariable('studentId')->value;?>
" class="<?php if ($_GET['a']=='index'&&$_GET['c']=='query'){?>color-green <?php }?>"><i class="iconfont iconfont-color-hei">&#xe617;</i><div>查询</div></a>

            <!--跳转到关系绑定-->
            <a href="?c=group&a=index&id=<?php echo $_smarty_tpl->getVariable('studentId')->value;?>
" class="<?php if ($_GET['a']=='index'&&$_GET['c']=='group'){?>color-green <?php }?>"><i class="iconfont iconfont-color-hei">&#xe615;</i><div>家庭管理</div></a>


            <!--跳转到电话绑a定-->
            <a href="?c=public&a=messageIndex&studentId=<?php echo $_smarty_tpl->getVariable('studentId')->value;?>
"><span class="xiaoxi-tishi hidden"></span><i class="iconfont iconfont-color-hei">&#xe614;</i><div>消息</div></a>
        </div>
        <script>
            var _hmt = _hmt || [];
            (function() {
                var hm = document.createElement("script");
                hm.src = "//hm.baidu.com/hm.js?06abfa8d15984e47d948d94dafbb9483";
                var s = document.getElementsByTagName("script")[0]; 
                s.parentNode.insertBefore(hm, s);
            })();
        </script>
    </footer>
    
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

<script>

    $(function() {
        xiaoxiTishi();
        function  xiaoxiTishi(){
            $.get('?c=public&a=ajaxMessageTishi', function(rs){
                if(rs.code == 0){
                    $('.xiaoxi-tishi').removeClass('hidden');
                }else{
                    $('.xiaoxi-tishi').addClass('hidden');
                }
            }, 'json');
        }
    });


function deleteGroup(parentId, studentId, btn) {
  showConfirmDialog('确定删除成员', function() {
    var l = Ladda.create(btn);
    l.start();
    $.get('?c=group&a=delete&id=' + parentId + '&studentId=' + studentId, function(resp) {
      if(resp.code == 0) {
        location.href = location.href;
      } else {
        toast(resp.message);
      }
    }, 'json').always(function() {
      l.stop();
    });
  }, function() {
    
  });
}

function weixinshare() {
    $('#shard-bar').fadeIn('slow');
}

function hideShareBar() {
    $('#shard-bar').fadeOut('slow');
}

wx.config({
    debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
    appId: '<?php echo @WX_APP_ID;?>
', // 必填，公众号的唯一标识
    timestamp: <?php echo $_smarty_tpl->getVariable('signPackage')->value['timestamp'];?>
, // 必填，生成签名的时间戳
    nonceStr: '<?php echo $_smarty_tpl->getVariable('signPackage')->value['nonceStr'];?>
', // 必填，生成签名的随机串
    signature: '<?php echo $_smarty_tpl->getVariable('signPackage')->value['signature'];?>
',// 必填，签名，见附录1
    jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
});

wx.ready(function(){

    wx.onMenuShareTimeline({
        title: '小诺健康机器人', // 分享标题
        link: '<?php echo @APP_WEICHAT_URL;?>
?c=index&a=index', // 分享链接
        imgUrl: '<?php echo @APP_RESOURCE_URL;?>
system/qrcode_logo.jpg', // 分享图标
        success: function () { 
            // 用户确认分享后执行的回调函数
        },
        cancel: function () {
            // 用户取消分享后执行的回调函数
        }
    });

    wx.onMenuShareAppMessage({
        title: '小诺健康机器人', // 分享标题
        desc: '小诺健康机器人，让关爱不一样！',// 分享描述
        link: '<?php echo @APP_WEICHAT_URL;?>
?c=index&a=index', // 分享链接
        imgUrl: '<?php echo @APP_RESOURCE_URL;?>
system/qrcode_logo.jpg', // 分享图标
        type: 'link', // 分享类型,music、video或link，不填默认为link
        dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
        success: function () {
        },
        cancel: function () {
            // 用户取消分享后执行的回调函数
        }
    });
});

</script>