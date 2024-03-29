<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>站内搜索-摄途网-专业摄影旅游网站</title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content="MetInfo 5.3.19" data-variable="https://www.shotour.com/,cn,39,,11,M1089008" />
    <meta name="description" content="摄途网是为您安排摄影旅游线路、黄山摄影旅游团的专业摄影网站，提供摄影、研学、旅游线路定制服务，最新摄影作品。" />
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
<section class="met-search animsition">
    <div class="container">
        <div class="row">
            <div class="met-search-body">
                <form method='get' class="page-search-form" role="search" action='https://www.shotour.com/search/search.php'>
                    <input type='hidden' name='lang' value='cn' />
                    <input type='hidden' name='class1' value='0' />
                    <div class="input-search input-search-dark">
                        <button type="submit" class="input-search-btn"><i class="icon wb-search" aria-hidden="true"></i></button>
                        <input type="text" class="form-control input-lg" name="searchword" value="黄山" placeholder="请输入搜索关键词！" data-fv-notempty="true" data-fv-message="不能为空">
                    </div>
                </form>
                <ul class="list-group list-group-full list-group-dividered met-page-ajax">
                    <li class="list-group-item">
                        <h4>
                            <a href="../guide/shownews.php?id=105&lang=cn">
                                2018年<em style="font-style:normal;">黄山</em>云谷、太平、玉屏索道运营时间价格（随时更新）
                            </a>
                        </h4>
                        <a class="search-result-link" href="../guide/shownews.php?id=105&lang=cn">https://www.shotour.com/guide/shownews.php?id=105&lang=cn
                        </a>
                        <p>为做好2018年“五一”小长假的服务接待工作，在此期间，<em style="font-style:normal;">黄山</em>云谷索道、<em style="font-style:normal;">黄山</em>玉屏索道营业时间调整为：　4月29日、5月1日 　　　6:30——17:004月30日 　　　　　　　6:00——17:30<em style="font-style:normal;">黄山</em>西...</p>
                    </li>
                    <li class="list-group-item">
                        <h4>
                            <a href="../photographic/showimg.php?id=228&lang=cn">
                                2018年4月<em style="font-style:normal;">黄山</em>摄影作品（多图）
                            </a>
                        </h4>
                        <a class="search-result-link" href="../photographic/showimg.php?id=228&lang=cn">https://www.shotour.com/photographic/showimg.php?id=228&lang=cn
                        </a>
                        <p>四月<em style="font-style:normal;">黄山</em>的春景，犹如浓烈的美酒，醇美芬芳。<em style="font-style:normal;">黄山</em>，她可以骄傲的独享上天的厚爱，将阳光雨露的滋养与日月精华的润泽变成自己的盛世美颜。四月芳菲尽，<em style="font-style:normal;">黄山</em>仲春时，...</p>
                    </li>
                    <li class="list-group-item">
                        <h4>
                            <a href="../line/showproduct.php?id=32&lang=cn">
                                2018春季<em style="font-style:normal;">黄山</em>摄影团（<em style="font-style:normal;">黄山</em>上住2晚，纯摄影）
                            </a>
                        </h4>
                        <a class="search-result-link" href="../line/showproduct.php?id=32&lang=cn">https://www.shotour.com/line/showproduct.php?id=32&lang=cn
                        </a>
                        <p>相关主题：2018年4月<em style="font-style:normal;">黄山</em>摄影作品2017年6月<em style="font-style:normal;">黄山</em>摄影作品2017年5月<em style="font-style:normal;">黄山</em>摄影作品2017年4月<em style="font-style:normal;">黄山</em>摄影作品收费标准：4人独立成团3060元/人，6人独立成团2860...</p>
                    </li>
                    <li class="list-group-item">
                        <h4>
                            <a href="../guide/shownews.php?id=106&lang=cn">
                                2018<em style="font-style:normal;">黄山</em>摄影旅游攻略（最新更新）
                            </a>
                        </h4>
                        <a class="search-result-link" href="../guide/shownews.php?id=106&lang=cn">https://www.shotour.com/guide/shownews.php?id=106&lang=cn
                        </a>
                        <p>：根据“互联网+旅游”的时代要求，为了更好的提升景区智慧旅游的服务能力，<em style="font-style:normal;">黄山</em>风景区于2018年4月21日在游人集散中心、各售票点及核心景区共49个区...</p>
                    </li>
                    <li class="list-group-item">
                        <h4>
                            <a href="../guide/shownews.php?id=97&lang=cn">
                                2018春季<em style="font-style:normal;">黄山</em>摄影攻略（最新更新）
                            </a>
                        </h4>
                        <a class="search-result-link" href="../guide/shownews.php?id=97&lang=cn">https://www.shotour.com/guide/shownews.php?id=97&lang=cn
                        </a>
                        <p>特别提醒：如果您是第一次来<em style="font-style:normal;">黄山</em>的话，可以先参看我们制作的<em style="font-style:normal;">黄山</em>摄影旅游攻略，可以对<em style="font-style:normal;">黄山</em>有个大致了解。也可以参看我们的<em style="font-style:normal;">黄山</em>摄影作品，学习了解和观摩摄影前辈们的<em style="font-style:normal;">黄山</em>摄影作品，对于拍...</p>
                    </li>
                    <li class="list-group-item">
                        <h4>
                            <a href="../guide/shownews.php?id=107&lang=cn">
                                2018年最新<em style="font-style:normal;">黄山</em>旅游景点门票价格(最新更新)
                            </a>
                        </h4>
                        <a class="search-result-link" href="../guide/shownews.php?id=107&lang=cn">https://www.shotour.com/guide/shownews.php?id=107&lang=cn
                        </a>
                        <p>从2018年3月15日起，<em style="font-style:normal;">黄山</em>西海大峡谷恢复开放，西海大峡谷观光缆车同期恢复营业。西海观光缆车下站至步仙桥游步道因地质灾害等因素继续封闭。此外，莲花峰继续封闭轮休，天都峰4月...</p>
                    </li>
                    <li class="list-group-item">
                        <h4>
                            <a href="../photographic/showimg.php?id=229&lang=cn">
                                摄途2018春季婺源<em style="font-style:normal;">黄山</em>摄影之旅
                            </a>
                        </h4>
                        <a class="search-result-link" href="../photographic/showimg.php?id=229&lang=cn">https://www.shotour.com/photographic/showimg.php?id=229&lang=cn
                        </a>
                        <p>派古民居交相映辉，令摄影人陶醉忘返，仿佛是一个遥远的世外桃源。本次旅行由<em style="font-style:normal;">黄山</em>摄途文化传媒精心设计创作线路，精选了古徽州春季油菜花摄影最佳拍摄点，让我...</p>
                    </li>
                    <li class="list-group-item">
                        <h4>
                            <a href="../photographic/showimg.php?id=225&lang=cn">
                                春到徽州 <em style="font-style:normal;">黄山</em>脚下最美油菜花（2018油菜花情）
                            </a>
                        </h4>
                        <a class="search-result-link" href="../photographic/showimg.php?id=225&lang=cn">https://www.shotour.com/photographic/showimg.php?id=225&lang=cn
                        </a>
                        <p>【2018最新<em style="font-style:normal;">黄山</em>石潭大洲源、婺源江岭油菜花花情及作品】又是一年春来到，徽州的春天粉墙黛瓦，青山绿水，如诗如画，美不胜收。众多古村古镇藏匿其中，看似不起眼，却个个...</p>
                    </li>
                    <li class="list-group-item">
                        <h4>
                            <a href="../photographic/showimg.php?id=40&lang=cn">
                                2017年6月<em style="font-style:normal;">黄山</em>摄影作品（多图）
                            </a>
                        </h4>
                        <a class="search-result-link" href="../photographic/showimg.php?id=40&lang=cn">https://www.shotour.com/photographic/showimg.php?id=40&lang=cn
                        </a>
                        <p>2017年6月5日——6日，<em style="font-style:normal;">黄山</em>一直下雨，6日下午树上淅淅沥沥滴着雨水，下午2点半出狮林酒店还打着雨伞，已背着相机出门的我看看黑乌乌的天心里想估计没戏了，于是又回酒店把相机包放...</p>
                    </li>
                    <li class="list-group-item">
                        <h4>
                            <a href="../photographic/showimg.php?id=41&lang=cn">
                                2017年5月<em style="font-style:normal;">黄山</em>摄影作品（多图）
                            </a>
                        </h4>
                        <a class="search-result-link" href="../photographic/showimg.php?id=41&lang=cn">https://www.shotour.com/photographic/showimg.php?id=41&lang=cn
                        </a>
                        <p><em style="font-style:normal;">黄山</em>的春季在5月，免费的清新空气，嫩嫩的绿树，渐开的<em style="font-style:normal;">黄山</em>杜鹃，变化复杂的云雾，交织出一副让你又爱又恨的<em style="font-style:normal;">黄山</em>春曲……<em style="font-style:normal;">黄山</em>西海大峡谷为<em style="font-style:normal;">黄山</em>精华景区之一，峡...</p>
                    </li>
                </ul>
                <div class="hidden-xs">
                    <div class='met_pager'>
                        <span class='PreSpan'>上一页</span><a href=../search/search.php?lang=cn&class1=0&class2=0&class3=0&searchword=黄山&searchtype=&page=1 class='Ahover'>1</a><a href=../search/search.php?lang=cn&class1=0&class2=0&class3=0&searchword=黄山&searchtype=&page=2>2</a><a href=../search/search.php?lang=cn&class1=0&class2=0&class3=0&searchword=黄山&searchtype=&page=3>3</a><a href=../search/search.php?lang=cn&class1=0&class2=0&class3=0&searchword=黄山&searchtype=&page=4>4</a><a href=../search/search.php?lang=cn&class1=0&class2=0&class3=0&searchword=黄山&searchtype=&page=5>5</a><a href=../search/search.php?lang=cn&class1=0&class2=0&class3=0&searchword=黄山&searchtype=&page=6>6</a><a href=../search/search.php?lang=cn&class1=0&class2=0&class3=0&searchword=黄山&searchtype=&page=7>7</a><a href=../search/search.php?lang=cn&class1=0&class2=0&class3=0&searchword=黄山&searchtype=&page=20 class='lastPage'>...20</a><a href=../search/search.php?lang=cn&class1=0&class2=0&class3=0&searchword=黄山&searchtype=&page=2 class='NextA'>下一页</a>
                        <span class='PageText'>转至第</span>
                        <input type='text' id='metPageT' data-pageurl='../search/search.php?lang=cn&class1=0&class2=0&class3=0&searchword=黄山&searchtype=&page=||20' value='1' />
                        <input type='button' id='metPageB' value='页' />
                    </div>
                </div>
                <div class="met-page-ajax-body visible-xs-block invisible" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
                    <button type="button" class="btn btn-default btn-block btn-squared ladda-button" id="met-page-btn" data-style="slide-left" data-url="https://www.shotour.com/search/.php?lang=cn&class1=0&class2=0&class3=0&mbpagelist=1" data-page="1"><i class="icon wb-chevron-down margin-right-5" aria-hidden="true"></i>加载</button>
                </div>
            </div>
        </div>
    </div>
</section>
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
                            <form role="search" action="../search/search.php?lang=cn">
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