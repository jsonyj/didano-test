<?php /* Smarty version Smarty-3.0.7, created on 2016-12-02 17:26:14
         compiled from "C:\Users\admin\Desktop\didanuo\WeiChat\App\Templates\Bind\index.html" */ ?>
<?php /*%%SmartyHeaderCode:530358413e361d9336-57697423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6529d9fe19af12998a91849a9f5507c3aa1462a2' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\didanuo\\WeiChat\\App\\Templates\\Bind\\index.html',
      1 => 1480042589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '530358413e361d9336-57697423',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_brave_html_select')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\function.brave_html_select.php';
if (!is_callable('smarty_modifier_escape')) include 'C:\Users\admin\Desktop\didanuo\Brave\Library\Smarty\plugins\modifier.escape.php';
?><!-- logo -->
<div class="row top-nav-bar">
    <div class="text-left">
    </div>
    <div class="col-xs-9 text-center">
        <?php $_template = new Smarty_Internal_Template("../Common/logo.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>
    <div class="col-xs-3 text-right logo-title">
        <h4 class="text-center">用户绑定</h4>
    </div>
</div>
<!-- /.logo -->

<div class="row user-profile-body">

  <div class="panel panel-default no-margin">
  
    <form id="role_form" name="role_form" method="post">
        <input type="hidden" name="complete" value="complete">
        
        <div class="panel-heading">
            <select id="role-select" name="form[role]" class="form-control" style="padding:5px;">
                <?php ob_start();?><?php echo $_smarty_tpl->getVariable('role_defalut')->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_brave_html_select(array('maxSize'=>'30','code'=>$_smarty_tpl->getVariable('code')->value['role'],'value'=>$_smarty_tpl->getVariable('form')->value['role'],'default'=>$_tmp1),$_smarty_tpl);?>

            </select>
        </div>
    
        <div class="panel-heading no-bottom">

            <div>
                <div class="form-group">
                  <label for="form-phone">手机号码：</label>
                  <input type="tel" class="form-control" id="form-phone" placeholder="请输入手机号码"  name="form[phone]" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('form')->value['phone']);?>
">
                </div>
                <div class="form-group">
                  <label for="form-captcha">验证码：</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="form-captcha" placeholder="请输入手机验证码" name="form[captcha]">
                    <span class="input-group-btn">
                      <button class="btn btn-warning" type="button" id="captcha-button" onclick="getCaptcha(this)">获取验证码</button>
                    </span>
                  </div>
                </div>
            </div>
            
            <div class="text-center padding-top-15">
                <button type="button" class="btn btn-success width-100 ladda-button" data-style="expand-left" data-size="l" onclick="javascript:submitBind();">提交</button>
            </div>
        </div>
    </form>
    
  </div>

</div>


<script type="text/javascript">

$(function(){
    
    $('#role-select').change(function(){
        if($('#role-select').val() == <?php echo @ACT_PARENT_ROLE;?>
){
            <?php if ($_smarty_tpl->getVariable('parent_is_bind')->value){?>
                location.href = '?c=bind&a=bindStudent';
            <?php }?>
        }
    });
    
});

function getCaptcha(o) {
    var phone = $('#form-phone').val();
    var role_type = $('#role-select').val();

    if(phone == null || phone.length == 0) {
        toast('请输入手机号码');
        return;
    }

    var seconds = 120;
    $(o).attr('disabled', 'disabled');

    $.post('?c=bind&a=bindCaptcha', {phone: phone, type: role_type}, function(resp) {
        if(resp.code == 0) {
            toast('验证码已经发送到您手机，请注意查收', 'info');
            var countdown = setInterval(function() {
                if(seconds <= 0) {
                    $(o).html('获取验证码');
                    $(o).removeAttr('disabled');
                    clearInterval(countdown);
                }
                else {
                    $(o).html(' ' + seconds + ' 秒');
                    seconds--;
                }
            }, 1000);
        }
        else {
            $('#alert-message').removeClass('hidden');
            $(o).removeAttr('disabled');
            toast(resp.message);
        }
    }, 'json');
}

function submitBind() {
    var valid = true;
    var phone = $('#form-phone').val();
    var captcha = $('#form-captcha').val();

    if(phone == '' || phone.length == 0) {
        toast('请输入手机号码');
        valid = false;
    } else if(captcha == '' || captcha.length != 4) {
        toast('请输入正确的验证码');
        valid = false;
    }

    if(valid) {
        $.post('?c=bind&a=index', $('#role_form').serialize(), function(resp) {
            if(resp.code == 0) {
                location.href = '?c=index&a=message';
            }
            else if(resp.code == 301) {
                location.href = '?c=bind&a=bindStudent';
            }
            else {
                toast(resp.message);
            }
        }, 'json');
    }
}

</script>