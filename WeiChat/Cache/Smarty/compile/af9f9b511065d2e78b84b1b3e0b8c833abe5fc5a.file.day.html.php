<?php /* Smarty version Smarty-3.0.7, created on 2016-12-09 14:53:10
         compiled from "C:\Users\admin\Desktop\didanuo\WeiChat\App\Templates\Report\day.html" */ ?>
<?php /*%%SmartyHeaderCode:4525584a54d6d886c7-59097491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af9f9b511065d2e78b84b1b3e0b8c833abe5fc5a' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\WeiChat\\App\\Templates\\Report\\day.html',
      1 => 1480042589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4525584a54d6d886c7-59097491',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.date_format.php';
?><style type="text/css">
.panel.panel-default.panel-margin .panel-heading.padding-left-0.padding-right-0 .row .col-xs-5.padding-2 p {
	font-size: 15px;
}
</style>
<div class="row top-nav-bar">
    <div class="col-xs-8 text-center">
        <?php $_template = new Smarty_Internal_Template("../Common/logo.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>
    <div class="col-xs-3 text-right logo-title">
        <h5 class="text-center margin-bottom-0">健康报告</h5>
    </div>
    <div class="col-xs-1 text-left logo-title">
        <a class="btn btn-sm on-active padding-right-0" href="<?php if ($_GET['full']){?>?c=user<?php }else{ ?>javascript:void(0)<?php }?>" <?php if (!$_GET['full']){?>onclick="closeReport();"<?php }?>><i class="iconfont">&#xe609;</i></a>
    </div>
</div>

<div class="report-body padding-bottom-0">
  <h4>今日晨检结果</h4>
</div>

<div class="panel panel-default panel-margin">
    <div class="panel-heading padding-left-0 padding-right-0">
        <div class="row">
            <div class="col-xs-7 padding-2">
            <?php if ($_smarty_tpl->getVariable('detection')->value['status']==@DETECTION_STATUS_NORMAL){?>
                <img class="img-circle-avatar1" src="<?php if ($_smarty_tpl->getVariable('student')->value['studentDetectionImg']['file_path']){?><?php echo @APP_RESOURCE_URL;?>
<?php echo $_smarty_tpl->getVariable('student')->value['studentDetectionImg']['file_path'];?>
<?php }else{ ?>http://tse1.mm.bing.net/th?id=OIP.M76446756dcb348b279464f77687a43b9o0&pid=15.1<?php }?>" >
            <?php }else{ ?>
                <img class="img-circle-avatar1" src="http://tse1.mm.bing.net/th?id=OIP.M76446756dcb348b279464f77687a43b9o0&pid=15.1" >
            <?php }?>
            </div>
             <div class="col-xs-5 padding-2">
                 <p>姓名：<?php echo $_smarty_tpl->getVariable('student')->value['name'];?>
  </p>
              
                  <p>到校时间：<br>
                 <?php if ($_smarty_tpl->getVariable('detection')->value['created']){?><?php echo date('Y-m-d H:i',strtotime($_smarty_tpl->getVariable('detection')->value['created']));?>
<?php }else{ ?>暂无数据<?php }?></p>
       
                 <p>身高：<?php if ($_smarty_tpl->getVariable('detection')->value['height']){?><?php echo $_smarty_tpl->getVariable('detection')->value['height']/10;?>
厘米<?php }else{ ?>暂无数据<?php }?><br>
                    
                 体重：<?php if ($_smarty_tpl->getVariable('detection')->value['weight']){?><?php echo $_smarty_tpl->getVariable('detection')->value['weight']/1000;?>
公斤<?php }else{ ?>暂无数据<?php }?><br>  
                 体温：<?php if ($_smarty_tpl->getVariable('detection')->value['temperature']){?><?php echo $_smarty_tpl->getVariable('detection')->value['temperature'];?>
℃<?php }else{ ?>暂无数据<?php }?>               </p>
             </div>
         </div>
         <div class="row" style="padding-top: 10px;">
             <div style="padding-left: 15px;">
             <?php if ($_smarty_tpl->getVariable('detection')->value['status']==@DETECTION_STATUS_NORMAL){?>
                 <input type="button" class="btn btn-primary" value="照片发错了" onclick="claim();"/>
                 <?php if (smarty_modifier_date_format($_smarty_tpl->getVariable('detection')->value['created'],'%Y-%m-%d')==smarty_modifier_date_format(time(),'%Y-%m-%d')){?>
                 <input type="button" class="btn btn-primary" value="微信推送" onclick="studentReportDay(<?php echo $_smarty_tpl->getVariable('detection')->value['student_id'];?>
);"/>
                 <?php }?>
             <?php }else{ ?>
                 <input type="button" class="btn btn-primary" value="去领取" onclick="window.location.href = '?c=claim&id=<?php echo $_smarty_tpl->getVariable('student')->value['id'];?>
&day=<?php echo $_smarty_tpl->getVariable('day')->value;?>
'"/>
             <?php }?>
             说明：以上为额头体表温度
             </div>
         </div>
    </div>
</div>

<?php $_template = new Smarty_Internal_Template("article_list.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="report-body padding-bottom-0">
  <h4>一周体温变化</h4>
</div>

<div class="panel panel-default panel-margin">
  <img class="img-rounded width-100" src="?c=report&a=chart&studentId=<?php echo $_smarty_tpl->getVariable('student')->value['id'];?>
&type=1&start=<?php if ($_smarty_tpl->getVariable('detection')->value['created']){?><?php echo $_smarty_tpl->getVariable('detection')->value['created'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('day')->value;?>
<?php }?>">
  <p style="padding-left: 10px;padding-top: 10px;">如果宝贝体温连续升高，家长要特别关注哦！</p>
</div>


<!-- 退回 -->
<div class="modal fade msg-modal" id="claim_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <form id="comment_form">
              <input type="hidden" name="form[detection_id]" value="<?php if ($_smarty_tpl->getVariable('detection')->value){?><?php echo $_smarty_tpl->getVariable('detection')->value['id'];?>
<?php }?>">
              <input type="hidden" name="form[terminal_img_id]" value="<?php if ($_smarty_tpl->getVariable('detection')->value){?><?php echo $_smarty_tpl->getVariable('detection')->value['terminal_img_id'];?>
<?php }?>">
              <input type="hidden" name="form[student_id]" value="<?php if ($_smarty_tpl->getVariable('detection')->value){?><?php echo $_smarty_tpl->getVariable('detection')->value['student_id'];?>
<?php }?>">
              <input type="hidden" name="form[day]" value="<?php if ($_smarty_tpl->getVariable('detection')->value){?><?php echo $_smarty_tpl->getVariable('detection')->value['created'];?>
<?php }?>">
              <input type="hidden" name="form[first]" value="<?php if ($_smarty_tpl->getVariable('detection')->value){?><?php echo $_smarty_tpl->getVariable('detection')->value['first'];?>
<?php }?>">
              <input type="hidden" name="form[lastest]" value="<?php if ($_smarty_tpl->getVariable('detection')->value){?><?php echo $_smarty_tpl->getVariable('detection')->value['lastest'];?>
<?php }?>">
              
              <div class="row">
                <div class="col-xs-6">
                    <img class="img-responsive img-circle-avatar1" src="<?php if ($_smarty_tpl->getVariable('student')->value['studentDetectionImg']['file_path']){?><?php echo @APP_RESOURCE_URL;?>
<?php echo $_smarty_tpl->getVariable('student')->value['studentDetectionImg']['file_path'];?>
<?php }else{ ?>http://tse1.mm.bing.net/th?id=OIP.M76446756dcb348b279464f77687a43b9o0&pid=15.1<?php }?>">
                </div>
                <div class="col-xs-6 ">
                    <img class="img-responsive img-circle-avatar1" src="<?php if ($_smarty_tpl->getVariable('detectionStatus')->value['file_path']){?><?php echo @APP_RESOURCE_URL;?>
<?php echo $_smarty_tpl->getVariable('detectionStatus')->value['file_path'];?>
<?php }else{ ?>http://tse1.mm.bing.net/th?id=OIP.M76446756dcb348b279464f77687a43b9o0&pid=15.1<?php }?>">
                </div>
              </div>
              <p class="text-center" style="font-size: 14px;">在这一刻，这个小朋友和你您家<b>“<?php echo $_smarty_tpl->getVariable('student')->value['name'];?>
”</b>是挺像的，确认不是您家宝宝？</p>
          </form>
      </div>
      <div class="dialog-footer text-center" style="padding-bottom: 15px;">
        <button type="button" class="btn btn-md btn-default" id="comment-close" onclick="cancel(event);" >取消</button> 
        <button type="button" class="btn btn-md btn-danger" id="comment_button" onclick="saveClaimAjax(<?php echo $_smarty_tpl->getVariable('detection')->value['student_id'];?>
)" >确定</button>
      </div>
    </div>
  </div>
</div>

<script>

function claim(){
    $('#claim_modal').modal('show');
}

function cancel(){
    $('#claim_modal').modal('hide');
}

function studentReportDay(id){
    if(id){
        $.ajax({
            type: "post",
            url: "?c=report&a=ajaxStudentReportDay",
            data: 'studentId='+id,
            dataType: "json",
            success:function(data){
                if(data.code == 0){
                     $.notify(data.message);
                }else{
                    $.notify(data.message); //回填错误信息
                }
            }
        });
    }

}

function saveClaimAjax(student_id){ 
    $.ajax({
        type: "post",
        url: "?c=claim&a=claimReturnAjax",
        data: $("#comment_form").serialize(),
        dataType: "json",
        success:function(data){
            if(data.code == 0){
                window.location.href = "?c=report&id=" + student_id;
            }else{
                $.notify(data.errors); //回填错误信息
            }
        }
    });
}
</script>