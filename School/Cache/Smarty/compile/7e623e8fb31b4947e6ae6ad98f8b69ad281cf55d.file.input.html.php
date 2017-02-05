<?php /* Smarty version Smarty-3.0.7, created on 2017-01-16 11:49:53
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Video\input.html" */ ?>
<?php /*%%SmartyHeaderCode:31928587c42e15f3527-31531113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e623e8fb31b4947e6ae6ad98f8b69ad281cf55d' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Video\\input.html',
      1 => 1484538576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31928587c42e15f3527-31531113',
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
    <li class="video">新增时间</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
  <p></p>
        <form name="data_form" method="post">
          <input type="hidden" name="form[id]" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['id']);?>
" />
          <table class="table table-bordered table-form">
            <tr>
              <th class="must">选择频道：</th>
              <td>
                <div class='input-group' >
                <select id="pid" name="channellist" class="channellist" onchange="gradeChange()">
                  <option value="0">---------------</option>
                </select>
                &nbsp;&nbsp;<font color="red">每个频道最多添加5条</font>
                </div> 
              </td>
            </tr>
            <tr>
              <th class="must">视频时间：</th>
              <td>
                <div class='input-group date' id='datetimepicker1'>
                  开始时间：<input type="time" id="controls_time_start" />
                  结束时间：<input type="time" id="controls_time_end" />
                </div> 
              </td>
            </tr>
            <!-- <tr class="option">
              <th></th>
              <td style="width:330px;">
                <input  class="btn btn-primary" id="addTimeBtn" value="添加更多时间" />
              </td>
            </tr> -->
            <tr class="option saveBtn">
              <th></th>
              <td style="width:330px;">
                <input class="btn btn-primary" name="complete" value="保存" onclick="controls_time_add()" />
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

   var SCHOOL_ID = getUrlParam(url,'id');
   $(document).ready(function(){
    $.ajax({
      url: "http://192.168.3.125:8080/video/rest/post/time_controls_search_by_schoolid/"+SCHOOL_ID, 
      type:'post',
      dataType:'json',
      timeout: 5000,
      contentType: "application/json; charset=utf-8",
      success:function(data){
          var optionStr = "";
          var channellist = data.data.list;
          $.each(channellist,function(title,obj){
            if(obj.type == 0){
              optionStr += '<option value="'+obj.id+'" id='+obj.id+'|'+obj.controls_num+' class="channel_name">'+obj.name+'</option>';
            }
          });
          $(".channellist").append(optionStr);
      },
      error:function(){
          alert("error");
      },
    });
  });

// var clickNum = 0;
// $("#addTimeBtn").click(function(){
//     clickNum++;
//     if(clickNum <= 4){
//       var tableStr = '<tr><th class="must">选择频道：</th><td><div class="input-group"><select name="channellist" class="channellist"><option value="0">---------------</option></select></div></td></tr><tr><th class="must">视频时间：</th><td><div class="input-group date" id="datetimepicker1">开始时间：<input type="time" />结束时间：<input type="time" /></div></td></tr>';
//       $(".saveBtn").before(tableStr);
//     }else{
//       alert("温馨提示：最多只能5个时间段");
//     }
// });

function controls_time_add(){
  var options=$(".channellist option:selected");
  var channelId = options.val();
  var optionsid = options.attr("id");
  var channel_num_array = optionsid.split("|");
  var controls_num = channel_num_array[1];
  var controls_time_start = document.getElementById('controls_time_start').value;
  var controls_time_end = document.getElementById('controls_time_end').value;
  if(channelId > 0){
    if(controls_time_start > controls_time_end)
    {
      alert("开始时间不能大于结束时间");
    }else{
      if(controls_num < 5){
        $.ajax({
          url:"http://192.168.3.125:8080/video/rest/post/time_control_add",
          type:'post',
          dataType:'json',
          contentType: "application/json; charset=utf-8",
          data:JSON.stringify({
              "channelId": channelId,
              "end": controls_time_end,
              "start": controls_time_start,
          }),
          success:function(data){
            alert(data.message);
            window.location.href='?c=video&a=index';
          },
          error:function(){
            alert("添加失败");
          },
        });
      }else{
        alert('该频道已有5条时间，请选择其他频道！');
      }
    }
  }else{
    alert('请选择频道');
  }
}
function gradeChange(){
  var objS = document.getElementById("pid");
  var grade = objS.options[objS.selectedIndex].id;
  var channel_num_array = grade.split("|");
  var controls_num = channel_num_array[1];
  if(controls_num > 4 ){
    alert("该频道已有5条时间，请选择其他频道！");
  }
}
</script>
