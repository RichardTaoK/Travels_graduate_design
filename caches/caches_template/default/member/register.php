<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>会员中心-摄途网-专业摄影旅游网站</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="generator" content="MetInfo" data-variable="https://www.shotour.com/|cn||||M1089008" />
    <link href="https://www.shotour.com/favicon.ico" rel="shortcut icon" />
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
                <li>会员注册</li>
            </ul>
        </div>
        <div class="col-xs-6 col-sm-6 user-info">
            <ol class="breadcrumb pull-right">
                <li><a href="http://localhost:3069/index.html" title="返回首页">返回首页</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="register_index met-member">
    <div class="container">
        <?php if(!isset($_GET['t'])) { ?>
        <form id="myform" class="form-register met-form" method="post" action="index.php?m=member&c=index&a=register">
            <input type="hidden" name="siteid" value="<?php echo $siteid;?>"/>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" id="username" name="username" size="36" required class="form-control" placeholder="用户名" data-bv-remote="true"   data-bv-notempty-message="此项不能为空" data-bv-stringlength="true" data-bv-stringlength-min="2" data-bv-stringlength-max="30" data-bv-stringlength-message="用户名必须在2-30个字符之间"  />
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                    <input type="password" id="password" name="password" size="36" required class="form-control" placeholder="密码" data-bv-notempty="true" data-bv-notempty-message="此项不能为空" data-bv-identical="true" data-bv-identical-field="confirmpassword" data-bv-identical-message="两次密码输入不一致" data-bv-stringlength="true" data-bv-stringlength-min="6" data-bv-stringlength-max="30" data-bv-stringlength-message="密码必须在6-30个字符之间">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                    <input type="password" id="pwdconfirm" name="confirmpassword"  size="36"  required data-password="password" class="form-control" placeholder="重复密码" data-bv-identical="true" data-bv-identical-field="password" data-bv-identical-message="两次密码输入不一致">
                </div>
            </div>
            <!--验证码-->
            <!--<div class="row login_code">-->
                <!--<div class="col-xs-8">-->
                    <!--<div class="form-group">-->
                        <!--<div class="input-group">-->
                            <!--<span class="input-group-addon"><i class="fa fa-shield"></i></span>-->
                            <!--<input type="text" name="code" required class="form-control" placeholder="验证码" data-bv-notempty="true" data-bv-notempty-message="此项不能为空">-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
                <!--<div class="col-xs-4 login_code_img">-->
                    <!--<img src="https://www.shotour.com/app/system/entrance.php?m=include&c=ajax_pin&a=dogetpin" class="img-responsive" id="getcode" title="看不清？点击更换验证码" align="absmiddle">-->
                <!--</div>-->
            <!--</div>-->
            <div class="form-group met-more text-muted">
                <hr />
                <span>更多资料</span>
            </div>
            <div class="form-group met-form-choice">
                <div class="row">
                    <div class="met-form-file-title col-md-3">姓名</div>
                    <div class="col-md-9">
                        <input type="text" name="nikename" id="nickname" class="form-control" value="" placeholder="昵称" required data-bv-message="此项不能为空" data-bv-notempty="true" placeholder="昵称">
                    </div>
                </div>
            </div>
            <div class="form-group met-form-choice">
                <div class="row">
                    <div class="met-form-file-title col-md-3">Email</div>
                    <div class="col-md-9">
                        <input type="text" name="email" id="email" class="form-control" value="" required data-bv-message="此项不能为空" data-bv-notempty="true" placeholder="Email">
                    </div>
                </div>
            </div>
            <!--<div class="form-group met-form-choice">-->
                <!--<div class="row">-->
                    <!--<div class="met-form-file-title col-md-3">来源地区</div>-->
                    <!--<div class="col-md-9">-->
                        <!--<input type="text" name="info_106" class="form-control" value="" required data-bv-message="此项不能为空" data-bv-notempty="true" placeholder="来源地区">-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
            <input class="btn btn-lg btn-primary btn-block" type="submit" name="dosubmit" value="立即注册">
            <!--<div class="login_link"><a href="https://www.shotour.com/member/login.php?lang=cn">已有账号？</a></div>-->
        </form>
        <?php } ?>
    </div>
</div>
<script> var upfiletext = '选择', uploadUrl = 'https://www.shotour.com/app/system/entrance.php?c=uploadify&m=include&lang=cn&a=doupfile&type=1'; </script>
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
        <!--page_type = 'register';-->
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