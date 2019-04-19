<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML>
<html>
<head>
    <title>丽景假日</title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="generator" content="MetInfo 5.3.19" data-variable="https://www.shotour.com/,cn,10001,,10001,M1089008" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="keywords" content="摄影旅游团|摄影作品|黄山摄影" />
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="/statics/css/travel/153625d3611686df.css">
    <link rel="stylesheet" href="/statics/css/travel/main.css">
    <link rel="stylesheet" href="/statics/css/travel/side.css">
    <link rel="stylesheet" href="/statics/css/travel/font-awesome.min.css">
    <link rel="stylesheet" href="/statics/css/travel/component.css">
    <meta name="360-site-verification" content="4984c0b9a3cd49d2d38960f6b4ec1520" />
</head>
<style>
    header {
        background: #fafafa url() no-repeat scroll 0 0;
    }
</style>
<body>
<!--[if lte IE 8]>
<div class="text-center padding-top-50 padding-bottom-50 bg-blue-grey-100">
    <p class="browserupgrade font-size-18">你正在使用一个<strong>过时</strong>的浏览器。请<a href="http://browsehappy.com/" target="_blank">升级您的浏览器</a>，以提高您的体验。</p>
</div>
<![endif]-->
<header>
    <div class="container">
        <div class="row">
            <div class="logo pull-left">
                <a href="https://www.shotour.com/" class="navbar-logo vertical-align" title="摄途网-专业摄影旅游网站">
                    <div class="vertical-align-middle">
                        <img src="/statics/images/travel/1/1499350421.png" alt="摄途网-专业摄影旅游网站" title="摄途网-专业摄影旅游网站" /></div>
                </a>
            </div>
            <div class="top-info pull-right hidden-xs">
                <div class="info-box">
                    <div class="text-box">
                        <p><span class="highlighted">联系我们</span></p>
                        <ul class="social-icons">
                            <li>
                                <a id="met-weixint"><i class="fa fa-weixin "></i></a>
                                <div id="met-weixint-content" class="hide">
                                    <div class="text-center met-weixin-img">
                                        <img src="/statics/images/travel/1/wei.jpg" /></div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;" target="_blank"><i class="fa fa-qq"></i></a>
                                <div id="met" class="hide" style="position: absolute;bottom: 0;left: 0;">
                                    <div class="text-center met-weixin-img">
                                        <img src="/statics/images/travel/1/qq.jpg" /></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="info-box">
                    <div class="icon-box">
                        <i class="sg-Phone2"></i>
                    </div>
                    <div class="text-box">
                        <p><span class="highlighted">15535434628</span> <br>designed by han</p>
                    </div>
                </div>
                <div class="info-box">
                    <div class="icon-box">
                        <i class="sg-Pointer"></i>
                    </div>
                    <div class="text-box">
                        <p><span class="highlighted">指导老师：严武军</span> <br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-default met-nav navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
            </div>
            <div class="pull-right econav">
                <ul>
                    <li>
                        <button type="button" data-target="#site-navbar-search" data-toggle="modal">
                            <span class="sr-only">Toggle Search</span>
                            <i class="icon wb-search"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="navbar-toggle hamburger hamburger-close collapsed" data-target="#example-navbar-default-collapse" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="hamburger-bar"></span>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse navbar-collapse-toolbar" id="example-navbar-default-collapse">
                <div class="navbar-right vertical-align met-nav-login animation-slide-top">
                    <div class="vertical-align-middle margin-right-10">
                        <?php if($_username) { ?>
                        <a href="index.php?m=member&c=index&a=logout" class="btn btn-squared btn-success">退出</a>
                        <?php } else { ?>
                        <a href="index.php?m=member&c=index&a=register" class="btn btn-squared btn-success">注册</a>
                        <?php } ?>
                    </div>
                    <div class="vertical-align-middle">
                        <?php if($_username) { ?>
                        <a href="index.php" class="btn btn-squared btn-primary btn-outline" style="width: 40px;padding:0;height: 40px;overflow: hidden;">
                            <!--你好！<?php echo $_username;?>-->
                            <img src="//img4.mukewang.com/5333a28f00019e7702100210-370-370.jpg" style="width: 40px;height: 40px;">

                        </a>

                        <?php } else { ?>
                        <a href="index.php?m=member&c=index&a=login" class="btn btn-squared btn-primary btn-outline">登录</a>
                        <?php } ?>
                    </div>
                </div>
                <ul class="nav navbar-nav navbar-right navlist">
                    <li><a href="<?php echo siteurl($siteid);?>" title="网站首页" class="link active">网站首页</a></li>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li class="dropdown margin-left- ecodropdown">
                        <a class="dropdown-toggle link " data-toggle="dropdown" href="<?php echo $r['url'];?>" aria-expanded="false" role="button" target='_blank'><?php echo $r['catname'];?><span class="caret"></span></a>
                        <ul  class="dropdown-menu dropdown-menu-left bullet" role="menu">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e9b7b447145af3000d810aa268afedea&action=category&catid=%24r%5B%27catid%27%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r['catid'],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <li><a href="<?php echo $v["url"];?>" class=""><?php echo $v['catname'];?></a></li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="main-slider met-banner" style="background: url(/statics/images/travel/1/15238.jpg) 50% 50% no-repeat; background-size: cover;transition: all 0.3s;">
    <div class="rev_slider_wrapper">
        <div class="tp-banner rev_slider tp-overflow-hidden" data-alias="showcase-carousel" eco_slidertypes="standard" eco_arrows_open="true" eco_arrows="hermes" eco_arrows_margin="2" eco_bullets_open="true" eco_bullets="uranus" eco_bullets_direction="horizontal" eco_bullets_align_hor="center" eco_bullets_align_vert="bottom" eco_bullets_offset_hor="" eco_bullets_offset_vert="8" data-version="5.2.5.4">
            <ul>
                <li data-transition="fade" data-slotamount="" data-masterspeed="1000" data-thumb="upload/201804/1523109288.jpg" data-link="https://www.shotour.com/guide/shownews.php?lang=cn&id=97" data-slideindex="back" data-saveperformance="off" data-title="春季黄山摄影攻略">
                    <img src="/statics/images/travel/1/15238.jpg" alt="春季黄山摄影攻略" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption lfb tp-resizeme ecoslidert" data-x="left" data-hoffset="['0','100','100','100']" data-y="center" data-voffset="['-80','-80','-80','-60']" data-fontsize="['46','46','46','28']" data-lineheight="['46','46','46','28']" data-start="1000" data-transform_idle="o:1;"data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;"data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;"data-mask_in="x:[-100%];y:0;"data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"data-splitin="none"data-splitout="none" style="color:#ffffff; background:#83a814">
                        春季丽江摄影攻略</div>
                    <div class="tp-caption lfb tp-resizeme ecodesc" data-x="left" data-hoffset="['0','100','100','100']" data-y="center" data-voffset="['10','10','10','15']" data-fontsize="['32','32','32','24']" data-lineheight="['46','46','46','38']" data-start="1500" data-transform_idle="o:1;"data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"data-splitin="none"data-splitout="none" style="color:">
                        山花烂漫 五彩斑斓</div>
                    <div class="tp-caption sfb tp-resizeme" data-x="left" data-hoffset="['0','100','100','100']" data-y="center" data-voffset="['100','100','100','80']" data-fontsize="['16','16','16','14']" data-lineheight="['16','16','16','14']" data-start="2000" data-transform_idle="o:1;"data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"data-splitin="lines"data-elementdelay="0.05"data-splitout="lines"data-endelementdelay="0.05">
                        <a href="http://localhost:3069/index.php?m=content&c=index&a=show&catid=16&id=2" style="color:; border-color:;" class="banner-btn">详情点击<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </li>
                <li data-transition="fade" data-slotamount="" data-masterspeed="1000" data-thumb="upload/201804/1523109263.jpg" data-link="https://www.shotour.com/guide/shownews.php?lang=cn&id=96" data-slideindex="back" data-saveperformance="off" data-title="黄山日出和日落拍摄攻略">
                    <img src="/statics/images/travel/1/1523.jpg" alt="洱海日出和日落拍摄攻略" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption lfb tp-resizeme ecoslidert" data-x="right" data-hoffset="['0','100','100','100']" data-y="center" data-voffset="['-80','-80','-80','-60']" data-fontsize="['46','46','46','28']" data-lineheight="['46','46','46','28']" data-start="1000" data-transform_idle="o:1;"data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;"data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;"data-mask_in="x:[-100%];y:0;"data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"data-splitin="none"data-splitout="none" style="color:; background:#83a814">
                        洱海日出和日落拍摄攻略</div>
                    <div class="tp-caption lfb tp-resizeme ecodesc" data-x="right" data-hoffset="['0','100','100','100']" data-y="center" data-voffset="['10','10','10','15']" data-fontsize="['32','32','32','24']" data-lineheight="['46','46','46','38']" data-start="1500" data-transform_idle="o:1;"data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"data-splitin="none"data-splitout="none" style="color:">
                        赏壮观日出 拍绚丽晚霞</div>
                    <div class="tp-caption sfb tp-resizeme" data-x="right" data-hoffset="['0','100','100','100']" data-y="center" data-voffset="['100','100','100','80']" data-fontsize="['16','16','16','14']" data-lineheight="['16','16','16','14']" data-start="2000" data-transform_idle="o:1;"data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"data-splitin="lines"data-elementdelay="0.05"data-splitout="lines"data-endelementdelay="0.05">
                        <a href="http://localhost:3069/index.php?m=content&c=index&a=show&catid=17&id=1" style="color:; border-color:;" class="banner-btn">详情点击<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </li>
                <li data-transition="fade" data-slotamount="" data-masterspeed="1000" data-thumb="upload/201804/1524060479.jpg" data-link="https://www.shotour.com/photographic/showimg.php?lang=cn&id=228" data-slideindex="back" data-saveperformance="off" data-title="2018年4月黄山摄影作品">
                    <img src="/statics/images/travel/1/do.jpg" alt="2018年4月黄山摄影作品" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption lfb tp-resizeme ecoslidert" data-x="center" data-hoffset="['0','0','0','0']" data-y="center" data-voffset="['-80','-80','-80','-60']" data-fontsize="['46','46','46','28']" data-lineheight="['46','46','46','28']" data-start="1000" data-transform_idle="o:1;"data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;"data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;"data-mask_in="x:[-100%];y:0;"data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"data-splitin="none"data-splitout="none" style="color:; background:#83a814">
                        2018年4月元阳摄影作品</div>
                    <div class="tp-caption lfb tp-resizeme ecodesc" data-x="center" data-hoffset="['0','0','0','0']" data-y="center" data-voffset="['10','10','10','15']" data-fontsize="['32','32','32','24']" data-lineheight="['46','46','46','38']" data-start="1500" data-transform_idle="o:1;"data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"data-splitin="none"data-splitout="none" style="color:">
                        四月元阳 生机盎然</div>
                    <div class="tp-caption sfb tp-resizeme" data-x="center" data-hoffset="['0','0','0','0']" data-y="center" data-voffset="['100','100','100','80']" data-fontsize="['16','16','16','14']" data-lineheight="['16','16','16','14']" data-start="2000" data-transform_idle="o:1;"data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"data-splitin="lines"data-elementdelay="0.05"data-splitout="lines"data-endelementdelay="0.05">
                        <a href="http://localhost:3069/index.php?m=content&c=index&a=show&catid=17&id=6" style="color:; border-color:;" class="banner-btn">详情点击<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer" style="height: px; background-color: rgba(0, 0, 0, 0.14902);top:0px;top: auto;"></div>
        </div>
    </div>
</div>
<div class="met-index-product met-index-body">
    <div class="container">
        <h3 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false"><a href="line/" title="专业摄影团" target='_blank'>旅游攻略</a></h3>
        <p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">最新的旅游攻略</p>
        <div class="row" role="tablist" data-plugin="appear" data-animate="fade" data-repeat="false">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=3fcbaa0802d57bd2a757961716c562b4&sql=select+%2A+from+travel_data+where+catid%3D17&num=6&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from travel_data where catid=17 LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="single-latest-project-gardener">
                    <img src="<?php echo $v['thumb'];?>" height='400' alt="<?php echo $v['title'];?>" class="cover-image">
                    <a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target='_blank'>
                        <div class="overlay">
                            <div class="box-holder">
                                <div class="content-box">
                                    <h4><?php echo $v['title'];?><p class='margin-bottom-0 margin-top-5 red-600'><?php echo $v['keywords'];?></p></h4>
                                    <p><?php echo $v['description'];?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</div>
<div class="met-index-case met-index-body">
    <div class="container">
        <h3 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false">
            <a href="guide/news.php?lang=cn&class2=112" title="摄影攻略" target='_blank'>吃喝住行</a></h3>
        <p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">美食，引爆你的味蕾</p>
        <div class="dedicated-team-items owl-carousel owl-theme" data-plugin="appear" data-animate="fade" data-repeat="false">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=052591d2ab175f5c60c4d164b72e6b16&sql=select+%2A+from+travel_news+where+catid%3D12&num=12&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from travel_news where catid=12 LIMIT 12");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1; if(is_array($data)) foreach($data AS $kk => $r) { ?>
            <div class="item">
                <div class="dedicated-team-single-item">
                    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target='_blank'>
                        <div class="dedicated-team-img-holder">
                            <img class="owl-lazy"
                                 data-src="<?php echo $r['thumb'];?>" title="<?php echo $r['title'];?>" alt="<?php echo $r['title'];?>">
                            <div class="overlay">
                                <div class="overlays">
                                    <div class="inner-holder">
                                        <p>
                                            <?php echo $r['description'];?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dedicated-team-member-name">
                        <h4><?php echo $r['title'];?></h4>
                    </div>
                </div>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">民宿，美爆你的朋友圈</p>
        <div class="dedicated-team-items owl-carousel owl-theme" data-plugin="appear" data-animate="fade" data-repeat="false">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=74b7332e76ef696f7836e38ce7aff014&sql=select+%2A+from+travel_news+where+catid%3D11&num=11&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from travel_news where catid=11 LIMIT 11");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1; if(is_array($data)) foreach($data AS $km => $m) { ?>
            <div class="item">
                <div class="dedicated-team-single-item">
                    <a href="<?php echo $m['url'];?>" title="<?php echo $m['title'];?>" target='_blank'>
                        <div class="dedicated-team-img-holder">
                            <img class="owl-lazy"
                                 data-src="<?php echo $m['thumb'];?>" title="<?php echo $m['title'];?>" alt="<?php echo $m['title'];?>">
                            <div class="overlay">
                                <div class="overlays">
                                    <div class="inner-holder">
                                        <p>
                                            <?php echo $m['description'];?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dedicated-team-member-name">
                        <h4><?php echo $m['title'];?></h4>
                    </div>
                </div>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</div>
<div class="met-index-news met-index-body">
    <div class="container">
        <h3 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false"><a href="photographic/" title="达人顾问" target='_blank'>达人顾问</a></h3>
        <p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">各位博客达人丽江游玩的心情路程</p>
        <div class="row">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=0f4404746f1fd54e2cce595dc28d5981&sql=select+%2A+from+travel_popular+where+catid%3D16&num=12&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from travel_popular where catid=16 LIMIT 12");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 single-blog-post" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
                <div class="img-holder">
                    <img class="cover-image"
                         src="<?php echo $val['thumb'];?>" alt="<?php echo $val['title'];?>" title="<?php echo $val['title'];?>">
                    <div class="overlay">
                        <a href="<?php echo $val['url'];?>" title="<?php echo $val['title'];?>" target='_blank'>
                            <div class="overlays">
                            </div>
                        </a>
                    </div>
                    <div class="date">
                        <b><?php echo $val['id'];?></b> <br> Apr
                    </div>
                </div>
                <ul>
                    <li><span><?php echo $val['author'];?></span></li>
                    <li><p><i class="icon wb-eye margin-right-5" aria-hidden="true"></i>260</p></li>
                </ul>
                <a href="<?php echo $val['url'];?>" title="<?php echo $val['url'];?>" target='_blank'>
                    <h2><?php echo $val['title'];?></h2>
                </a>
                <p><?php echo $val['description'];?></p>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</div>
<div class="ecofootbg">
    <div class="met-footnav-eco">
        <div class="container">
            <div class="row mob-masonry">
                <div class="col-md-3 col-sm-6 col-xs-12 list text-left masonry-item">
                    <h4>关于我们</h4>
                    <p><p><span style="color: rgb(191, 191, 191);">摄途网是黄山摄途文化传媒有限公司的综合摄影旅游服务平台，为您的摄影旅途提供专业定制，我们立足黄山，面向全国和境内外摄友组织黄山及各地摄影旅游服务。</span></p></p>
                    <a href="http://localhost:3069/index.php?m=content&c=index&a=lists&catid=24"
                       title="关于我们" target='_blank' class="read-more">查看更多<i class="fa fa-arrow-circle-right"></i></a>
                    <ul class="social">
                        <li><a href="http://wpa.qq.com/msgrd?v=3&uin=271959622&site=qq&menu=yes" rel="nofollow" target="_blank" class="hvr-radial-out">
                            <i class="fa fa-qq"></i>
                        </a></li>
                        <li><a href="https://www.facebook.com/shotour.cn/" rel="nofollow" target="_blank" class="hvr-radial-out"><i class="icon fa-facebook-official"></i></a></li>
                        <li><a href="mailto:shotour#163.com" rel="nofollow" target="_blank" class="hvr-radial-out"><i class="icon fa-envelope"></i></a></li>
                        <li>
                            <a id="met-weixin"><i class="fa fa-weixin "></i></a>
                            <div id="met-weixin-content" class="hide">
                                <div class="text-center met-weixin-img">
                                    <img src="/statics/images/travel/1/wei.jpg" /></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 list ecoinfo text-left masonry-item">
                    <h4>黄山摄影常用信息</h4>
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6a0514703210a806e2710336d4c723e6&sql=select+%2A+from+travel_popular&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from travel_popular LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
                        <li><a href="<?php echo $r['url'];?>" target='_blank' title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6  list col-xs-12 masonry-item">
                    <h4>旅游最新攻略</h4>
                    <div class="gallery">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=df3a2e961289fafc71cf52e78cb2016c&sql=select+%2A+from+travel_data&num=6&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from travel_data LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
                        <a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target='_blank'><img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>" title="<?php echo $v['title'];?>" style="width: 64px;height: 54px;"></a>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 list  text-left masonry-item">
                    <h4>联系我们</h4>
                    <ul class="contact-info">
                        <li><i class="icon pe-map-marker"></i>老韩的毕业设计，非诚勿扰</li>
                        <li><i class="icon pe-call"></i>15535434628</li>
                        <li><i class="icon pe-mail"></i>2579312470@qq.com</li>
                        <li><i class="icon pe-global"></i>设计人：韩孟涛</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="met-links text-center">
        <div class="container">
            <ol class="breadcrumb">
                <li></li>
                <li><a href="https://www.shotour.com" title="" target="_blank">摄途网</a></li>
                <li><a href="https://www.shotour.com" title="黄山摄影团" target="_blank">黄山摄影团</a></li>
                <li><a href="http://www.g-photography.net/" title="全球摄影网" target="_blank">全球摄影网</a></li>
            </ol>
        </div>
    </div>
    <footer>
        <div class="container text-center">
            <p>Powered by 老韩同志 2017-2018 太原师范学院计算机系三班</p>
            <p>韩 版权所有</p>
            <p>老韩：15535434628</p>
            <!--<p><p style="text-align:center"><a><img src="https://www.shotour.com/upload/201708/1501556734138132.png"/><span style="line-height: 1.42857; color: rgb(191, 191, 191);">皖公网安备 34100202000176号</span></a></p><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1264137956'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/stat.php%3Fid%3D1264137956%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script></p>-->
            <!--<script type="text/javascript" src="https://www.shotour.com/app/app/qipn_side/web/js/service.js?1.2.1" id="qipn_side" data-siteurl="https://www.shotour.com/" data-lang="cn"></script>-->
            <!--<div class="powered_by_metinfo"></div>-->
        </div>
    </footer>
</div>
<div class="modal fade modal-3d-flip-vertical" id="site-navbar-search" aria-hidden="true" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-center modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="container">
                    <div class="row">
                        <div class="search">
                            <form role="search" action="./index.php?m=travel&c=index&a=search" name="search" method="post">
                                <div class="form-group ">
                                    <div class="input-search">
                                        <input type="text" class="form-control" name="searchword" placeholder="点我更精彩">
                                        <button type="submit" class="input-search-btn"><i class="icon wb-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<button type="button" class="btn btn-icon btn-primary btn-squared met-scroll-top hide"><i class="icon wb-chevron-up" aria-hidden="true"></i></button>
<script src="/statics/js/travel/7dff286b7c37116d.js"></script>
</body>
</html>