<?php /* Smarty version Smarty-3.0.7, created on 2017-01-13 15:23:46
         compiled from "C:\Users\admin\Desktop\didanuo\School\App\Templates\Video\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3035587880829c1ca9-18207365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81f41446059bff5671c4f3d25ca15a01e2133cbc' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\School\\App\\Templates\\Video\\index.html',
      1 => 1484292221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3035587880829c1ca9-18207365',
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
    <li class="video" id="<?php echo $_smarty_tpl->getVariable('school_id')->value;?>
">视频一览</li>
  </ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <div class='clearfix'></div>
      <div class="text-right toolbar">
        <a style="width:80px;" class="btn btn-info btn-sm" href="?c=video&a=input&pc=video&pa=index&id=<?php echo $_smarty_tpl->getVariable('school_id')->value;?>
">新增</a>
      </div>
      <div class="table-responsive">
      <table class="table table-bordered table-hover text-center channel_list">

          <col width="180" />
          <col width="180" />
          <col width="180" />
          <col width="180" />
          <col width="360" />


          <tr>
            <th class="text-center">视频名称</th>
            <th class="text-center">频道类型</th>
            <th class="text-center">视频状态</th>
            <th class="text-center">频道描述</th>
            <th class="text-center">视频时间</th>
          </tr>

          <!-- <?php  $_smarty_tpl->tpl_vars['activity'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('activityList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['activity']->key => $_smarty_tpl->tpl_vars['activity']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['activity']->key;
?>
            <tr id="row_<?php echo $_smarty_tpl->getVariable('admin')->value['id'];?>
">
              <td><?php echo $_smarty_tpl->tpl_vars['activity']->value['name'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['activity']->value['start_time'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['activity']->value['end_time'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['activity']->value['activity_des'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['activity']->value['created'];?>
</td>
              <td>
                <a class="btn btn-xs btn-primary" href="?c=video&a=input&pc=video&pa=index&id=<?php echo $_smarty_tpl->tpl_vars['activity']->value['id'];?>
">编辑</a>
              </td>
            </tr>
          <?php }} ?> -->

      </table>
  
      </div>
      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->

<script type="text/javascript">
    $(document).ready(function(){

      var SCHOOL_ID = $('.video').attr('id');
      $.ajax({
              url: "http://192.168.3.125:8080/video/rest/post/time_controls_search_by_schoolid/"+SCHOOL_ID, 
              type:'post',
              dataType:'json',
              timeout: 5000,
              contentType: "application/json; charset=utf-8",
              success:function(data){
                  var channelStr = "";
                  var channellist = data.data.list;
                  $.each(channellist,function(title,obj){
                    if(obj.type == 0){
                      channelStr += '<tr class="channel_list"><td>'+obj.name+'</td><td>监控</td>';
                      if(obj.status == 0){
                        channelStr += '<td>未启用</td>';
                      }else{
                        channelStr += '<td>启用</td>';
                      }
                      channelStr += '<td>'+obj.des+'</td>';
                      var controlslist = obj.controls;
                      channelStr += '<td><table class="table table-striped table-condensed">';
                      $.each(controlslist,function(title,time){
                        if(time != null){
                          channelStr += '<tr><td>'+time.start+'-'+time.end+'</td><td><a class="btn btn-xs btn-danger eachDelete" id="'+time.id+'" onclick=deleted_controls_time(this)>删除</a><a class="btn btn-xs btn-primary" href="?c=video&a=updata&pc=video&pa=updata&start='+time.start+'&end='+time.end+'&channelId='+time.channelId+'&timeId='+time.id+'">编辑</a></td></tr>';
                        }
                      });
                      channelStr += '</table></td></tr>';
                    }
                  });
                  $(".channel_list").append(channelStr);
              },
              error:function(){
                  alert("error");
              },
      });
  });

  function deleted_controls_time(obj){
    var removeId = $(obj).attr('id');
    $.ajax({
      url: "http://192.168.3.125:8080/video/rest/post/time_control_remove/"+removeId, 
      type:'post',
      dataType:'json',
      timeout: 5000,
      contentType: "application/json; charset=utf-8",
      success:function(data){
        alert("删除成功");
        window.location.href='?c=video&a=index';
      },
      error:function(){
        alert("删除失败");
      },
    });
  }
</script>
