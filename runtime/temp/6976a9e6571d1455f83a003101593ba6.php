<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:36:"./themes/default/index/register.html";i:1490092125;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<title><?php echo config('web_site_title'); ?></title>
<meta name="keywords" content="<?php echo config('web_site_keyword'); ?>"/>
<meta name="description" content="<?php echo config('web_site_description'); ?>"/>
<!-- Bootstrap -->
<link href="<?php echo config('theme_path'); ?>/index/css/bootstrap.css" rel="stylesheet">
<!--引用通用样式-->
<link href="<?php echo config('theme_path'); ?>/index/css/common.css" rel="stylesheet">
<link href="<?php echo config('theme_path'); ?>/index/css/login.css" rel="stylesheet">

<!--[if lt IE 9]>
    <script src="<?php echo config('theme_path'); ?>/index/js/html5shiv.min.js"></script>
    <script src="<?php echo config('theme_path'); ?>/index/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<header>
  <div class="container">
      <div class="row">
        <div class="col-xs-10" style="height:96px">
          <div class="header"><a href="<?php echo url('index/index'); ?>"><img  src="<?php echo config('theme_path'); ?>/index/images/login_logo.png" /></a><span class="line_left">|</span><span ><a href="<?php echo url('base/register'); ?>">会员注册</a></span></div>
          
        </div>
        <div class="col-xs-2 contract"><a href="<?php echo url('index/index'); ?>">返回首页</a><span style="padding:0 5px 0 5px">|</span><a href="<?php echo url('article/page',['name'=>'job']); ?>">客服</a><span style="padding:0 5px 0 5px">|</span><a href="<?php echo url('article/page',['name'=>'job']); ?>">English </a></div>
        
      </div>
   </div>
</header>
<!--main start-->
<div class="main main_index" >
  <div class="container">
  <div class="main_register">
    <div class="register">
      <div class="row">
        <div class="register_title">深圳市没有品牌有限公司</div>
      <!--register start-->
       <div class="col-xs-5" style="height:656px;" >
       <div style="padding: 10px 10px;border: 1px solid red;margin-left:20px;margin-top: 50px;">
      <form action="" method="POST" class="margintop-40" style="">
       
            <table class="input-register-table" style="padding: 20px 10px;margin-top:20px;">
                <tr>
                    <td><label for="txtname">用户名 :</label></td>
                    <td><input type="text"  placeholder="请设置用户名" id="username"/></td>
                </tr>
                <!-- <tr>
                    <td><label for="txtname">用户昵称 :</label></td>
                    <td><input type="text"  placeholder="请输入用户昵称" id="nickname"/></td>
                </tr> -->
                <tr>
                    <td><label for="txtname">密码 :</label></td>
                    <td><input type="password"  placeholder="请输入6-20位(字母、数字、符号)" id="password" /></td>
                </tr>
                     <!-- <div class="extens">
            <div>强度：</div>
            <span class="extens_one" id="weak" >低</span>
            <span class="extens_two" id="middle">中</span>
            <span class="extens_three" id="strength">高</span>
          </div> -->
                <tr>
                    <td></td>
                    <td><label for=""id="extens"><p class="extens">强度 :</p><p class="extens_one" id="weak" >低</p>
                    <p class="extens_two" id="middle">中</p>
            <p class="extens_three" id="strength">高</p></label></td>
                </tr>
                <tr>
                    <td><label for="txtpswd">确认密码 :</label></td>
                    <td><input type="password"  placeholder="请再次输入密码" id="repassword" /></td>
                </tr>
               <!--  <tr>
                   <td><label for="txtpswd">图形验证码 :</label></td>
                   <td><input type="text"    placeholder="请输入图形验证码" style="width:130px" id="pic_code" /><img src="<?php echo url('base/captcha'); ?>" onclick="this.src='<?php echo url('admin/base/captcha'); ?>?rand='+Math.random()" style="cursor:pointer;height:42px" title="点击刷新"></td>
                </tr> -->
                    <!--<tr>
                      <td><label for="txtname">手机号 :</label></td>
                      <td><input type="text" id="mobile"  placeholder="可用于登录和找回密码" ></td>
                  </tr>
                <tr>
                    <td><label for="txtpswd">手机验证码 :</label></td>
                    <td><input type="text" placeholder="请输入手机验证码" id="sms_code"style="width:130px" name="login_pswd" /><input type="button" value="发送验证码"  onclick="sendSms()"class="password_button"  /></td>
                </tr> -->
                
          </table>
          <div class="read">
            <input type="checkbox" aria-label="..." ><span>我已阅读并遵守协议</span><span class="read_member" style="margin-left:20px">用户协议</span>
          </div>
          
          <div class="read">
            <button type="button" id="submit" class=" btn_register" >注册啦</button>
          </div>
          
     
          
       
        </form></div>
       </div>

       <div class="col-xs-1" width="100%" >
        
       
        <div style="position:absolute;z-index:1; border-left: 1px dashed #000;height:100px;left:50%;line-height:1px;"></div>
    </div>
      <!--register end-->

        <div class="col-xs-5 margintop-40 border-c " style="text-align: left;border:1px solid red;padding-left:50px;" >
          <div class="account">已有账号,<span style="color:#FF6600"><a href="<?php echo url('base/login'); ?>">马上登陆</a></span></div>
          <div class="line"></div>
          <div class="account_login">使用第三方账号登陆</div>
            <div class="account_img"><a href="<?php echo url('OpenAuth/login',['type' => 'sina']); ?>"  target="_blank"><img src="<?php echo config('theme_path'); ?>/index/images/wb.png" /></a><a href="<?php echo url('OpenAuth/login',['type' => 'wechat']); ?>"  target="_blank"><img src="<?php echo config('theme_path'); ?>/index/images/wx1.png" /></a><a href="<?php echo url('OpenAuth/login',['type' => 'qq']); ?>"  target="_blank"><img src="<?php echo config('theme_path'); ?>/index/images/qq1.png" /></a></div>
            <div class="account_font"><p><a href="<?php echo url('OpenAuth/login',['type' => 'sina']); ?>"  target="_blank">微博登录</a></p><p><a href="<?php echo url('OpenAuth/login',['type' => 'wechat']); ?>"  target="_blank">微信登录</a></p><p><a href="<?php echo url('OpenAuth/login',['type' => 'qq']); ?>"  target="_blank">QQ登陆</a></p></div>
        </div>
      </div>
    </div>
   </div> 
  </div>
</div>
<!--main end-->
<!--footer start-->

  
  <div class="footer-bottom bottom" style="margin-top:60px">
     版权所有 ® 2005-2015 迁安珍良缘农副食品超商&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司地址：迁安市中三元街59号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a href="#">深蓝科技</a>
    </div>

<!--footer end-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo config('theme_path'); ?>/index/js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo config('theme_path'); ?>/index/js/bootstrap.min.js"></script>
<script type="text/javascript">
  //验证码
  function get_code(){
    $("#get_code").removeClass("disabled");
  }
</script>

<script type="text/javascript">

//获取手机验证码
function sendSms(){
  var mobile   = $("#mobile").val();
  var pic_code = $("#pic_code").val();
  if(verifymobile(mobile) == false){
    alert('请填写正确的手机号码')
    return false
  }
  $.ajax({
    type:"post",
    url:"<?php echo url('alidayu/index'); ?>",
    data:{"mobile":mobile,"captcha":pic_code},
    dataType:"json",
    success: function(res){
      if(res.code == 0 )
      {
        alert(res.msg);       
      } else{            
        var wait = 60;
        $(".code_button").val((--wait) + "秒后重新发送");
        var time_line = setInterval(function(){
          if(wait == 0)
          {        
            $(".code_button").val("获取手机验证码");
            return clearInterval(time_line);
          }else{
            $(".code_button").val((--wait) + "秒后重新发送"); 
          }    
        },1000);
        alert(res.msg);            
      }     
    }
  });  
}
//手机号验证
function verifymobile(mobile){
  var phone = /^13[0-9]{1}[0-9]{8}$|15[0-9]{1}[0-9]{8}$|18[0-9]{1}[0-9]{8}$|17[0-9]{9}$/;
    if(!phone.test(mobile)){
      return false
    }
}


 </script>

<script type="text/javascript" language="javascript">
// 提交数据
$(function(){
  $("#submit").click(function(){
    var username   =$("#username").val();
    var nickname   =$("#nickname").val();
    var mobile    =$("#mobile").val();
    var password  =$("#password").val();
    var repassword=$("#repassword").val();
    var pic_code = $("#pic_code").val();
    var code      =$("#sms_code").val();
    if(pic_code == null || pic_code == ''){
       alert('请输入图形验证码asd！');
    }
    if(username == null || username == '' || username.length>20 || username.length<6){
       alert('请输入正确的用户名');
    }
    if(password == null || password == '' || username.length>20 || username.length<6){
       alert('请输入正确的密码！');
    }
    if(repassword == null || repassword == '' || repassword!=password){
       alert('确认密码不正确！');
    }
  $.ajax({
     type:'post',
     url:"<?php echo url('base/register'); ?>",
     data:{"username":username,
          "nickname":nickname,
          "password":password,
           "mobile":mobile,   
           "repassword":repassword,
           "code":code,},
     dataType:'json',
     success: function(data) {
                if (data.code) {
            alert(data.msg);
          setTimeout(function () {
          location.href = data.url;
        }, 1000);
        } else {
            alert(data.msg);
        }
        },
        error: function(request) {
                alert("页面错误");
      }
  });
  
   })
})

</script>
<script type="text/javascript">
 // 密码强度
$(document).ready(function(){
  $("#password").keyup(function(){ 
  var password = $("#password").val();
  AuthPasswd(password);
function AuthPasswd(password) {
    string = password;
    if(string.length >=6) {

        if(/[a-zA-Z]+/.test(string) && /[0-9]+/.test(string) && /\W+\D+/.test(string)) {
            noticeAssign(1);
        }else if(/[a-zA-Z]+/.test(string) || /[0-9]+/.test(string) || /\W+\D+/.test(string)) {
            if(/[a-zA-Z]+/.test(string) && /[0-9]+/.test(string)) {
                noticeAssign(-1);
            }else if(/\[a-zA-Z]+/.test(string) && /\W+\D+/.test(string)) {
                noticeAssign(-1);
            }else if(/[0-9]+/.test(string) && /\W+\D+/.test(string)) {
                noticeAssign(-1);
            }else{
                noticeAssign(0);
            }
        }
    }else{
        noticeAssign(null); 
    }

}
 
function noticeAssign(num) {
    if(num == 1) {
        $('#weak').css({backgroundColor:'#009900'});
        $('#middle').css({backgroundColor:'#009900'});
        $('#strength').css({backgroundColor:'#009900'});
        $('#strength').html('很强');
        $('#middle').html('');
        $('#weak').html('');
    }else if(num == -1){
        $('#weak').css({backgroundColor:'#ffcc33'});
        $('#middle').css({backgroundColor:'#ffcc33'});
        $('#strength').css({backgroundColor:''});
        $('#weak').html('');
        $('#middle').html('中');
        $('#strength').html('');
    }else if(num ==0) {
        $('#weak').css({backgroundColor:'#ffcc33'});
        $('#middle').css({backgroundColor:''});
        $('#strength').css({backgroundColor:''});
        $('#weak').html('弱');
        $('#middle').html('');
        $('#strength').html('');
    }else{
        $('#weak').html({backgroundColor:'#ffcc33'});
        $('#middle').html('&nbsp;');
        $('#strength').html('&nbsp;');
        $('#weak').html('弱');
        $('#middle').css({backgroundColor:''});
        $('#strength').css({backgroundColor:''});
    }
}
})
})
</script>


</body>
</html>