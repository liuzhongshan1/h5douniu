<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"C:\phpStudy\WWW\douniu/application/game\view\redbag\index.html";i:1501236762;}*/ ?>
<!DOCTYPE>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
    <meta name="description" content="不超过150个字符"/>
    <meta name="keywords" content="">
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="index,follow"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="HandheldFriendly" content="true">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--[if lt IE 9]>      
	    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        *{margin:0;padding:0;font-family: '微软雅黑'}
    </style>
</head>
<body style="background: url(__STATIC__/game/img/bg4.png) no-repeat;background-size: 100% 100%;">
<div style="width: 100%;">
    <p style="color: orange;margin-top: 1.5rem;margin-left: 1rem;line-height: 1.8rem;">你的房卡：<span class="mycards" style="margin:0 0.4rem;"><?php echo $memberinfo['cards']; ?></span>张</p>
    <form action="<?php echo url('Redbag/getdata'); ?>" method="post" callback="none2" id="redbag">
        <p style="background: white;width: 90%;margin-left: 5%;height: 2rem;line-height: 2rem;font-size: 0.9rem;border-radius: 0.2rem;margin-top: 0.5rem;">&nbsp;&nbsp;放入房卡
            <span style="float: right;margin-right: 0.6rem;">张</span>
            <input type="number" name="roomcard" placeholder="0" class="num" style="float: right;height: 2rem;text-align: right;padding-right: 0.5rem;padding-left: 0.5rem;border: none;outline: none;color: #FEA500;font-size:1rem">
        </p>
        <p style="color: orange;text-align: center;margin-top: 2.5rem;">
            <span class="number" style="font-size: 2.5rem;margin-right: 0.3rem;">0</span>张</p>
        <input type="submit" name="makecard" value="制作红包" class="send" style="width: 76%;margin-left:12%;height: 2.2rem;font-size: 1rem;color: white;border-radius: 1rem;line-height: 2.2rem;border: none;outline: none;background: #FEA500;margin-top: 3.5rem;">
    </form>
    <div style="position:fixed;bottom:2.8rem;" class="footers">
        <p style="color: #efefef;text-align: center;font-size: 0.9rem;width: 80%;margin-left: 10%;">制作红包后，将页面分享给微信好友，即可领取。在红包记录中可查看所有红包。</p>
        <p style="text-align: center;font-size: 0.9rem;margin-top: 1rem;"><a href="<?php echo url('Redbag/history'); ?>" style="color: #5686e2;text-decoration: none;">我的红包记录</a></p>
    </div>
</div>
<script src="__STATIC__/game/js/jquery-1.12.1.js"></script>
<script src="__STATIC__/js/setajax.js"></script>
<script type="text/javascript">
    $(function(){
        $(window).resize(function () {
            $(".footers").toggle();
        })
        var reg = /^[0-9]*$/;
        $(".num").keyup(function(){
            var s=$(this).val();
            var mycards=$(".mycards").text();
            if (!reg.test(s)) {
                $(this).val(0);
            }else{
                if (s.charAt(0)==0) {
                    $(this).val(parseInt(s));
                }
                if (parseInt(s)-mycards>0) {
                    $(this).val(mycards);
                    $(".number").text(mycards);
                }else{
                    $(".number").text(parseInt(s));
                    if ($(".number").text()=="") {
                        $(".number").text(0);
                    }
                }
                if (s==0) {
                    $(this).val(0);
                    $(".number").text(0);
                }
            }            
        })
        $(".send").click(function(){
            if ($(".number").text()==0) {
                alert("请输入正确的房卡数");
            }else{
                //.......
            }
        })
    })
    $('#redbag').ajaxsubmit({success:function(ret){
        window.location.href=ret.url;
    }});
</script>



</body>
</html>