<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"C:\phpStudy\WWW\douniu/application/game\view\redbag\history.html";i:1500543590;}*/ ?>
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
        *{margin:0;padding:0;list-style: none;}
        .tabs{width: 100%;position: fixed;top: 0;left: 0;background: white;padding-bottom: 0.5rem;}
        .tab{width: 70%;margin-left: 15%;border: 2px solid orange;height: 2.4rem;border-radius: 1.2rem;background: white;margin-top: 1rem;text-align: center;overflow: hidden;}
        .tab li{width: 50%;float: left;height: 2.4rem;line-height: 2.4rem;}
        .tab li:last-child{float: right;}
        .cur{color: white!important;background: orange!important;}
        .con{margin-top: 4rem;}
        .con li{border-bottom: 1px solid #ccc;height:4rem;line-height: 1.8rem;padding-top: 0.5rem;}
        strong{font-weight: normal;}
        .con li p{clear: both;width: 80%;margin-left: 10%;}
        .con li p span:first-child{float: left;}
        .con li p span:last-child{float: right;}
        .con li p:last-child span:first-child{color: #ccc;}
        .already{color: #ccc;}
        .non{color: orange;}
    </style>
</head>
<body>

<div class="tabs">
        <ul class="tab"><li class="cur"><a href="<?php echo url('history'); ?>" style="text-decoration: none ;color:black;">收到红包</a></li><li><a href="<?php echo url('historysended'); ?>" style="text-decoration: none; color:black;">发出红包</a></li></ul>
    </div>




    <ul class="con">

        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li onclick="window.location.href='<?php echo url('share', array('id' => $vo['id'])); ?>';">
            <p><span><?php echo getnickname($vo['create_id']); ?></span><span><strong><?php echo $vo['cards_num']; ?></strong>张</span></p>
            <p><span><?php echo date('Y-m-d H:i:s',$vo['create_time']); ?></span>
                <span class="already">
                    <span style="color: deepskyblue"><?php if($vo['status'] == '0'): ?>未领取<?php endif; ?></span>
                  <?php if($vo['status'] == '1'): ?>已领取<?php endif; if($vo['status'] == '-1'): ?>退回<?php endif; ?>
                </span>
            </p>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>


</body>
</html>