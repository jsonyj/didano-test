<?php /* Smarty version Smarty-3.0.7, created on 2016-12-02 17:27:33
         compiled from "C:\Users\admin\Desktop\didanuo\WeiChat\App\Templates\Bind\bindStudent.html" */ ?>
<?php /*%%SmartyHeaderCode:140658413e852fb1d7-65892818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d7e06e1add7ba65caf2c959f20446c911fe6853' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\WeiChat\\App\\Templates\\Bind\\bindStudent.html',
      1 => 1480042589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140658413e852fb1d7-65892818',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_brave_html_select')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_html_select.php';
?><!-- logo -->
<div class="row top-nav-bar">
    <div class="text-left">
    </div>
    <div class="col-xs-9 text-center">
        <?php $_template = new Smarty_Internal_Template("../Common/logo.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>
    <div class="col-xs-3 text-right logo-title">
        <h4 class="text-center">家长绑定</h4>
    </div>
</div>
<!-- /.logo -->

<div class="row user-profile-body">

  <div class="panel panel-default no-margin">
    <div class="panel-heading">
        <select id="role-select" class="form-control" style="padding:5px;">
            <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('code')->value['role'],'value'=>$_smarty_tpl->getVariable('form')->value['role'],'default'=>@ACT_PARENT_ROLE),$_smarty_tpl);?>

        </select>
    </div>
    
    <div class="panel-heading no-bottom">
        <form id="role_form" name="role_form" method="post">
            <input type="hidden" name="complete" value="complete">
            
            <div id="parent-role">
                <div class="form-group">
                    <label for="relation-select">请选择与学生关系：</label>
                    <select id="relation-select" name="form[relation_type]" class="form-control" style="padding:5px;">
                        <?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('code')->value['relation'],'value'=>$_smarty_tpl->getVariable('form')->value['relation_type']),$_smarty_tpl);?>

                    </select>
                </div>
                <div class="form-group" id="relation_title_div" style="display:none">
                  <label for="form-relation-title">请输入与学生关系：</label>
                  <input type="text" class="form-control" id="form-relation-title" placeholder="例：舅舅" name="form[relation_title]" value="<?php echo $_smarty_tpl->getVariable('form')->value['relation_title'];?>
">
                </div>
                <div class="form-group">
                  <label for="form-name">学生姓名：</label>
                  <input type="text" class="form-control" id="form-name" placeholder="请输入姓名" name="form[name]" value="<?php echo $_smarty_tpl->getVariable('form')->value['name'];?>
">
                </div>
                <div class="form-group">
                  <label for="form-birthday">学生生日：</label>
                  <input type="text" id="form-birthday" class="form-control" placeholder="请选择学生生日" name="form[birthday]" value="<?php echo $_smarty_tpl->getVariable('form')->value['birthday'];?>
">
                </div>

            </div>
            
            <div class="text-center padding-top-15">
                <button type="button" class="btn btn-success width-100 ladda-button" data-style="expand-left" data-size="l" onclick="javascript:submitBind();">确定</button>
            </div>
        </form>
    </div>
    
  </div>

</div>

<div class="panel panel-default panel-margin">
    <div class="panel-heading padding-left-2 padding-right-2">
        <div class="row">
          <div class="notice-color" role="alert">
              <p>温馨提示：</p>
              <p>1.只有在校学生的家长可以绑定。</p>
              <p>2.请输入正确的学生姓名和生日。</p>
              <!-- <p>3.温馨提示温馨提示温馨提示温馨提示温馨提示温馨提示温馨提示温馨提示温馨提示温馨提示。</p> -->
          </div>
        </div>
    </div> 
</div>

<script type="text/javascript">

$(function(){
    
    $('#role-select').change(function(){
        if($('#role-select').val() == <?php echo @ACT_SCHOOL_GENERAL;?>
){
            location.href = '?c=bind&a=index&role=<?php echo @ACT_SCHOOL_GENERAL;?>
';
        }
        
    });
    
    $('#relation-select').change(function(){
        if($('#relation-select').val() == <?php echo @PARENT_TYPE_OTHER;?>
){
            $('#relation_title_div').show();
        }
        else {
            $('#relation_title_div').hide();
        }
    });
    

    //初始化日期控件
    var opt = {
        preset: 'date', //日期
        theme: 'android-ics light', //皮肤样式
        display: 'modal', //显示方式
        mode: 'scroller', //日期选择模式
        lang:'zh',
        dateFormat: 'yyyy-mm-dd', // 日期格式
        setText: '确定', //确认按钮名称
        cancelText: '取消',//取消按钮名籍我
        dateOrder: 'yyyymmdd', //面板中日期排列格式
        showNow: false,
        maxDate: new Date(),
    };
    $("#form-birthday").mobiscroll(opt);
    
});

function submitBind() {
    var valid = true;
    var name = $('#form-name').val();
    var birthday = $('#form-birthday').val();
    var relation_type = $('#relation-select').val();
    var relation_title = $('#form-relation-title').val();

    if(name == '' || name.length == 0) {
        toast('请输入学生姓名');
        valid = false;
    } 
    else if(birthday == '' || birthday == 0) {
        toast('请输入学生生日');
        valid = false;
    }
    else if(relation_type == '' || relation_type == 0) {
        toast('请选择与学生关系');
        valid = false;
    }
    else if(relation_type == <?php echo @PARENT_TYPE_OTHER;?>
) {
        if(relation_title == '' || relation_title == 0) {
            toast('请输入与学生关系');
            valid = false;
        }
    }

    if(valid) {
        $.post('?c=bind&a=bindStudent', $('#role_form').serialize(), function(resp) {
            if(resp.code == 0) {
                location.href = '?c=index&a=message';
            }
            else if(resp.code == 301) {
                location.href = '?c=bind&a=chooseStudent';
            }
            else if(resp.code == 302) {
                location.href = '?c=bind&a=validParentPhone&sid='+resp.sid+'&pid='+resp.pid;
            }
            else if(resp.code == 303) {
                location.href = '?c=bind&a=chooseStudent';
            }
            else {
                toast(resp.message);
            }
        }, 'json');
    }
}

</script>