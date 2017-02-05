<?php /* Smarty version Smarty-3.0.7, created on 2017-01-13 15:18:51
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Video\updata.html" */ ?>
<?php /*%%SmartyHeaderCode:1172458787f5b50d1b5-29872930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9adc0fd1f5c98efbcd7383a0000689684fae20c1' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Video\\updata.html',
      1 => 1484291922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1172458787f5b50d1b5-29872930',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
?><div class="breadcrumbs" id="breadcrumbs">
  <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){} 
  </script>

  <ul class="breadcrumb">
    <li>
      <a href="?c=video&a=index">视频</a>
    </li>
    <li class="video">编辑时间</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->

        <form name="data_form" method="post">
          <input type="hidden" name="form[id]" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['id']);?>
" />
          <table class="table table-bordered table-form">
              <tr>
                <th class="must">视频时间：</th>
                <td>
                  <div class='input-group date' id='datetimepicker1'>
                    <!-- 开始时间：<input type="time" id="controls_time_start" value="" />
                    结束时间：<input type="time" id="controls_time_end"/> -->
                  </div> 
                </td>
              </tr>
              <!-- <tr class="option">
                <th></th>
                <td style="width:330px;">
                  <input  class="btn btn-primary" id="addParentBtn" value="添加更多时间" />
                </td>
              </tr> -->
              <tr class="option saveBtn">
                <th></th>
                <td style="width:330px;">
                  <input class="btn btn-primary" name="complete" value="保存" onclick="updata()"/>
                </td>
              </tr>
          </table>
      </form>

      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->

<script type="text/javascript">
    var url = window.location;
    function getUrlParam(url,name){
      var pattern = new RegExp("[?&]" + name +"\=([^&]+)","g");
      var matcher = pattern.exec(url);
      var items = null;
      if(matcher != null){
        try{
          items = decodeURIComponent(decodeURIComponent(matcher[1])); 
        }catch(e){
          try{
            items = decodeURIComponent(matcher[1]);
          }catch(e){
            items = matcher[1];
          }
        }
      }
      return items;
    }
   var CHANNEL_ID = getUrlParam(url,'channelId');
   var TIME_ID = getUrlParam(url,'timeId');
   var START_TIME = getUrlParam(url,'start');
   var END_TIME = getUrlParam(url,'end');
 $(document).ready(function(){
 	spanStr = '开始时间：<input type="time" id="controls_time_start" value="'+START_TIME+'" />结束时间：<input type="time" id="controls_time_end" value="'+END_TIME+'" />'
 	$("#datetimepicker1").append(spanStr);
 });

//	var clickNum = 0;
// $("#addParentBtn").click(function(){
//     clickNum++;
//     if(clickNum <= 4){
//       var tableStr = '<tr><th class="must">视频时间：</th><td><div class="input-group date" id="datetimepicker1">开始时间：<input type="time" />结束时间：<input type="time" /></div></td></tr>';
//       $(".saveBtn").before(tableStr);
//     }else{
//       alert("温馨提示：最多只能添加5个时间段");
//     }

// });

	function updata(){
		var controls_time_start = document.getElementById('controls_time_start').value;
  		var controls_time_end = document.getElementById('controls_time_end').value;
  		if(controls_time_start > controls_time_end){
  			alert("开始时间不能大于结束时间");
  		}else{
  			$.ajax({
  				url:"http://192.168.3.125:8080/video/rest/post/time_control_edit",
		        type:'post',
		        dataType:'json',
		        contentType: "application/json; charset=utf-8",
		        data:JSON.stringify({
		            "channelId": CHANNEL_ID,
		            "end": controls_time_end,
		            "start": controls_time_start,
		            "id": TIME_ID,
		        }),
		        success:function(data){
		        	alert(data.message);
		        	window.location.href='?c=video&a=index';
		        },
  			});
  		}
	}

</script>
