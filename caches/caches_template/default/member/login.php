<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>会员中心-摄途网-专业摄影旅游网站</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="generator" content="MetInfo" data-variable="https://www.shotour.com/|cn||||M1089008" />
    <link href="/favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="/statics/css/travel/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/statics/css/travel/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/statics/css/travel/metinfo.css" />
</head>
<style>
    .met-member{ background-color:;}
    .login_index{ background-color:;  }
</style>
<body>
<div class="container met-head">
    <div class="row">
        <div class="col-xs-6 col-sm-6 logo">
            <ul class="list-none">
                <li><a href="https://www.shotour.com/index.php?lang=cn" class="met-logo">
                    <img src="/statics/images/travel/1/1499350421.png" /></a></li>
                <li>会员登录</li>
            </ul>
        </div>
        <div class="col-xs-6 col-sm-6 user-info">
            <ol class="breadcrumb pull-right">
                <li><a href="http://localhost:3069/index.html" title="返回首页">返回首页</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="login_index met-member">
    <div class="container">
        <form method="post" action="http://localhost:3069/index.php?m=member&c=index&a=login">
            <input type="hidden" name="gourl" value="" />
            <div class="form-group">
                <input type="text" id="username" name="username" required class="form-control" size="36" placeholder="用户名/邮箱/手机" data-bv-notempty="true" data-bv-notempty-message="此项不能为空">
            </div>
            <div class="form-group">
                <input type="password" id="password" size="36" name="password" required class="form-control" placeholder="密码" data-bv-notempty="true" data-bv-notempty-message="此项不能为空">
            </div>
            <div class="login_link"><a href="javascript:;">忘记密码？</a></div>
            <input class="btn btn-lg btn-primary btn-block" hidefocus="true" type="submit" name="dosubmit" value="登录">
            <!--<input style="width: 100%;" type="submit" name="dosubmit" hidefocus="true" value="登录" class="account-form-btn js-btn-login">-->
            <div class="login_type">
                <p>其它方式登录</p>
                <div class="row">
                    <div class="col-xs-4 col-md-4"><a title="QQ登录" href="https://www.shotour.com/member/login.php?lang=cn&a=doother&type=qq"><i class="fa fa-qq"></i></a></div>
                    <div class="col-xs-4 col-md-4"><a href="https://www.shotour.com/member/login.php?lang=cn&a=doother&type=weixin"><i class="fa fa-weixin"></i></a></div>
                </div>
            </div>
            <a class="btn btn-lg btn-info btn-block" href="http://localhost:3069/index.php?m=member&c=index&a=register">没有账号？现在去注册</a>
        </form>
    </div>
</div>
<footer class="container met-footer">
    <p>Powered by 摄途网 2008-2017 皖ICP备12001673号-3 <script type="text/javascript" src="http://tajs.qq.com/stats?sId=63848189" charset="UTF-8"></script>
    </p>
    <p>黄山摄途文化传媒有限公司 版权所有</p>
    <p>老树：13855913950 王昌鸿：13905591790</p>
    <p><p style="text-align:center"><a><img src="https://www.shotour.com/upload/201708/1501556734138132.png"/><span style="line-height: 1.42857; color: rgb(191, 191, 191);">皖公网安备 34100202000176号</span></a></p><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1264137956'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/stat.php%3Fid%3D1264137956%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script></p>
    <!--<script type="text/javascript" src="https://www.shotour.com/app/app/qipn_side/web/js/service.js?1.2.1" id="qipn_side" data-siteurl="https://www.shotour.com/" data-lang="cn"></script>-->
</footer>
<!--<script src="https://www.shotour.com/app/system/include/public/js/seajs.js"></script>-->
<!--<script>-->
    <!--var pub = 'https://www.shotour.com/app/system/include/public/',-->
        <!--tem = 'https://www.shotour.com/app/system/web/user/templates/met/',-->
        <!--page_type = 'login';-->
    <!--seajs.config({-->
        <!--paths: {-->
            <!--'pub': pub.substring(0,pub.length-1),-->
            <!--'tem': tem.substring(0,tem.length-1)-->
        <!--},-->
        <!--alias: {-->
            <!--"jquery": "jquery/1.11.1/jquery_seajs.js"-->
        <!--}-->
    <!--});-->
    <!--seajs.use("tem/js/own"); //载入入口模块-->
<!--</script>-->
</body>
</html>