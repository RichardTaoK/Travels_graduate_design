<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML>
<html>
<head>
    <title>黄山摄影攻略-摄影攻略-摄途网-专业摄影旅游网站</title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content="MetInfo 5.3.19" data-variable="https://www.shotour.com/,cn,112,,2,M1089008"/>
    <meta name="description" content="摄途网是为您安排摄影旅游线路、黄山摄影旅游团的专业摄影网站，提供摄影、研学、旅游线路定制服务，最新摄影作品。"/>
    <meta name="keywords" content="摄影旅游团|摄影作品|黄山摄影"/>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link rel="stylesheet" href="/statics/css/travel/153625d3611686df.css">
    <link rel="stylesheet" href="/statics/css/travel/main.css">
    <link rel="stylesheet" href="/statics/css/travel/side.css">
    <link rel="stylesheet" href="/statics/css/travel/font-awesome.min.css">
    <link rel="stylesheet" href="/statics/css/travel/component.css">
    <script type="text/javascript" src="/statics/js/travel/jquery-3.3.1.min.js""></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=	ggUGmNAPrEx3j5v6dZ4uhQP8ZUdbrOmg"></script>
    <!--[if lt IE 10]>

    <script src="https://www.shotour.com/app/system/include/static/vendor/media-match/media.match.min.js"></script>
    <script src="https://www.shotour.com/app/system/include/static/vendor/respond/respond.min.js"></script>
    <script src="https://www.shotour.com/app/system/include/static/js/classList.min.js"></script>

    <![endif]-->
    <meta name="360-site-verification" content="4984c0b9a3cd49d2d38960f6b4ec1520"/>
</head>
<style>
    header {
        background: #fafafa url() no-repeat scroll 0 0;
    }
</style>
<body>
<!--[if lte IE 8]>
<div class="text-center padding-top-50 padding-bottom-50 bg-blue-grey-100">
    <p class="browserupgrade font-size-18">你正在使用一个<strong>过时</strong>的浏览器。请<a href="http://browsehappy.com/"
                                                                              target="_blank">升级您的浏览器</a>，以提高您的体验。</p>
</div>
<![endif]-->
<header>
    <div class="container">
        <div class="row">
            <div class="logo pull-left">
                <a href="https://www.shotour.com/" class="navbar-logo vertical-align" title="摄途网-专业摄影旅游网站">
                    <div class="vertical-align-middle">
                        <img src="/statics/images/travel/1/1499350421.png" alt="摄途网-专业摄影旅游网站" title="摄途网-专业摄影旅游网站"/>
                    </div>
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
                                        <img src="/statics/images/travel/1/wei.jpg"/></div>
                                </div>
                            </li>
                            <li><a href="http://wpa.qq.com/msgrd?v=3&uin=271959622&site=qq&menu=yes" target="_blank"><i
                                    class="fa fa-qq"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="info-box">
                    <div class="icon-box">
                        <i class="sg-Phone2"></i>
                    </div>
                    <div class="text-box">
                        <p><span class="highlighted">13855913950</span> <br>shotour#163.com</p>
                    </div>
                </div>
                <div class="info-box">
                    <div class="icon-box">
                        <i class="sg-Pointer"></i>
                    </div>
                    <div class="text-box">
                        <p><span class="highlighted">安徽省黄山市屯溪区跃进路6号</span> <br></p>
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
                        <button type="button" class="navbar-toggle hamburger hamburger-close collapsed"
                                data-target="#example-navbar-default-collapse" data-toggle="collapse">
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
                        <a href="index.php" class="btn btn-squared btn-primary btn-outline"
                           style="width: 40px;padding:0;height: 40px;overflow: hidden;">
                            <!--你好！<?php echo $_username;?>-->
                            <img src="//img4.mukewang.com/5333a28f00019e7702100210-370-370.jpg"
                                 style="width: 40px;height: 40px;">

                        </a>

                        <?php } else { ?>
                        <a href="index.php?m=member&c=index&a=login"
                           class="btn btn-squared btn-primary btn-outline">登录</a>
                        <?php } ?>
                    </div>
                </div>
                <ul class="nav navbar-nav navbar-right navlist">
                    <li><a href="<?php echo siteurl($siteid);?>" title="网站首页" class="link active">网站首页</a></li>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li class="dropdown margin-left- ecodropdown">
                        <a class="dropdown-toggle link " data-toggle="dropdown" href="<?php echo $r['url'];?>" aria-expanded="false"
                           role="button" target='_blank'><?php echo $r['catname'];?><span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-left bullet" role="menu">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a785ef0747dd85399d7f4a78d777cff7&action=category&catid=%24r%5B%27catid%27%5D&num=25&siteid=%24siteid&order=listorder%0D%0A++++++++++++++++++++++++++++ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r['catid'],'siteid'=>$siteid,'order'=>'listorder
                            ASC','limit'=>'25',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <li><a href="<?php echo $v['url'];?>" class=""><?php echo $v['catname'];?></a></li>
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
<section class="met-news animsition">
    <div class="container">
        <div class="row">
            <div class="col-md-9 met-news-body">
                <div class="row">
                    <div class="met-news-list" style="padding: 0;">
                        <div id="allmap" class="met-page-ajax" style="width: 100%;z-index: 99;height: 380px;">
                            <div class="xianxian" style="background:url("");z-index: 1000;background: red;width: 100%;height: 100%;"></div>
                        </div>
                        <p style="font-size: 14px;text-align: center">初始化展示中心点为（116.4035,39.915），缩放级别为8的丽江站地图，2秒后，通过设置缩放级别将地图放大到14级</p>
                        <div class="hidden-xs">
                            <div id="pages" class="text-c met_pager"><?php echo $pages;?></div>
                        </div>
                        <div class="met-page-ajax-body visible-xs-block invisible" data-plugin="appear"
                             data-animate="slide-bottom" data-repeat="false">
                            <button type="button" class="btn btn-default btn-block btn-squared ladda-button"
                                    id="met-page-btn" data-style="slide-left"
                                    data-url="https://www.shotour.com/guide/news.php?lang=cn&class1=109&class2=112&class3=0&mbpagelist=1"
                                    data-page="1"><i class="icon wb-chevron-down margin-right-5" aria-hidden="true"></i>加载
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="met-news-bar">
                        <form method='get' action="https://www.shotour.com/search/search.php">
                            <input type='hidden' name='lang' value='cn'/>
                            <input type='hidden' name='class1' value='109'/>
                            <div class="form-group">
                                <div class="input-search">
                                    <button type="submit" class="input-search-btn"><i class="icon wb-search"
                                                                                      aria-hidden="true"></i></button>
                                    <input type="text" class="form-control" name="searchword" placeholder="Search">
                                </div>
                            </div>
                        </form>
                        <div class="recommend news-list-md">
                            <h3>更多路线</h3>
                            <ul class="list-group list-group-bordered">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7d6f6134f5f46d137704bcaac6da476d&sql=select+x.%2A%2Cy.left%2Cy.right+from+travel_category+as+x%2Ctravel_road+as+y+where+x.catid%3Dy.catid+and+x.parentid%3D9+order+by+catid+asc&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select x.*,y.left,y.right from travel_category as x,travel_road as y where x.catid=y.catid and x.parentid=9 order by catid asc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li class="list-group-item" >
                                    <a href="http://localhost:3069/index.php?m=content&c=index&a=lists&catid=<?php echo $r['catid'];?>&x=<?php echo $r['left'];?>&y=<?php echo $r['right'];?>"
                                       x="<?php echo $r['left'];?>" y="<?php echo $r['right'];?>" title="<?php echo $r['title'];?>" target='_blank'
                                       onclick="return false"><?php echo $r['catname'];?></a>
                                </li>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </ul>
                        </div>
                    </div>
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
                    <p>
                    <p><span style="color: rgb(191, 191, 191);">摄途网是黄山摄途文化传媒有限公司的综合摄影旅游服务平台，为您的摄影旅途提供专业定制，我们立足黄山，面向全国和境内外摄友组织黄山及各地摄影旅游服务。</span>
                    </p></p>
                    <a href="show/" title="关于我们" target='_blank' class="read-more">查看更多<i
                            class="fa fa-arrow-circle-right"></i></a>
                    <ul class="social">
                        <li><a href="http://wpa.qq.com/msgrd?v=3&uin=271959622&site=qq&menu=yes" rel="nofollow"
                               target="_blank" class="hvr-radial-out">
                            <i class="fa fa-qq"></i>
                        </a></li>
                        <li><a href="https://www.facebook.com/shotour.cn/" rel="nofollow" target="_blank"
                               class="hvr-radial-out"><i class="icon fa-facebook-official"></i></a></li>
                        <li><a href="mailto:shotour#163.com" rel="nofollow" target="_blank" class="hvr-radial-out"><i
                                class="icon fa-envelope"></i></a></li>
                        <li>
                            <a id="met-weixin"><i class="fa fa-weixin "></i></a>
                            <div id="met-weixin-content" class="hide">
                                <div class="text-center met-weixin-img">
                                    <img src="/statics/images/travel/1/wei.jpg"/></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 list ecoinfo text-left masonry-item">
                    <h4>黄山摄影常用信息</h4>
                    <ul>
                        <li><a href="guide/shownews.php?lang=cn&id=105" target='_blank'
                               title="2018年黄山云谷、">2018年黄山云谷、</a></li>
                        <li><a href="guide/shownews.php?lang=cn&id=106" target='_blank'
                               title="2018黄山摄影旅游">2018黄山摄影旅游</a></li>
                        <li><a href="guide/shownews.php?lang=cn&id=107" target='_blank'
                               title="2018年最新黄山旅">2018年最新黄山旅</a></li>
                        <li><a href="guide/shownews.php?lang=cn&id=108" target='_blank'
                               title="2018黄山新国线景">2018黄山新国线景</a></li>
                        <li><a href="guide/shownews.php?lang=cn&id=111" target='_blank'
                               title="最新黄山导游图（黄山">最新黄山导游图（黄山</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6  list col-xs-12 masonry-item">
                    <h4>黄山旅游线路</h4>
                    <div class="gallery">
                        <a href="travel/showproduct.php?lang=cn&id=54" title="漫步黄山奇景与宏村双" target='_blank'><img
                                src="/statics/images/travel/1/1.jpg" alt="漫步黄山奇景与宏村双" title="漫步黄山奇景与宏村双"></a>
                        <a href="travel/showproduct.php?lang=cn&id=49" title="独立成团宏村黄山三日" target='_blank'><img
                                src="/statics/images/travel/1/2.jpg" alt="独立成团宏村黄山三日" title="独立成团宏村黄山三日"></a>
                        <a href="travel/showproduct.php?lang=cn&id=53" title="独立成团：黄山纯玩二" target='_blank'><img
                                src="/statics/images/travel/1/3.jpg" alt="独立成团：黄山纯玩二" title="独立成团：黄山纯玩二"></a>
                        <a href="travel/showproduct.php?lang=cn&id=51" title="独立成团：黄山精华纯" target='_blank'><img
                                src="/statics/images/travel/1/4.jpg" alt="独立成团：黄山精华纯" title="独立成团：黄山精华纯"></a>
                        <a href="travel/showproduct.php?lang=cn&id=52" title="独立成团：黄山到千岛" target='_blank'><img
                                src="/statics/images/travel/1/5.jpg" alt="独立成团：黄山到千岛" title="独立成团：黄山到千岛"></a>
                        <a href="travel/showproduct.php?lang=cn&id=50" title="独立成团：西递、宏村" target='_blank'><img
                                src="/statics/images/travel/1/6.jpg" alt="独立成团：西递、宏村" title="独立成团：西递、宏村"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 list  text-left masonry-item">
                    <h4>联系我们</h4>
                    <ul class="contact-info">
                        <li><i class="icon pe-map-marker"></i>安徽省黄山市屯溪跃进路6号</li>
                        <li><i class="icon pe-call"></i><a href="tel:13855913950" title="13855913950">13855913950</a>
                        </li>
                        <li><i class="icon pe-mail"></i>shotour#163.com</li>
                        <li><i class="icon pe-global"></i>www.shotour.com</li>
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
            <p>Powered by 摄途网 2008-2017 皖ICP备12001673号-3
            <p>黄山摄途文化传媒有限公司 版权所有</p>
            <p>老树：13855913950 王昌鸿：13905591790</p>
            <p>
            <p style="text-align:center"><a><img src="https://www.shotour.com/upload/201708/1501556734138132.png"/><span
                    style="line-height: 1.42857; color: rgb(191, 191, 191);">皖公网安备 34100202000176号</span></a></p>
            <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            document.write(unescape("%3Cspan id='cnzz_stat_icon_1264137956'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/stat.php%3Fid%3D1264137956%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
            </p>
            <script type="text/javascript" src="https://www.shotour.com/app/app/qipn_side/web/js/service.js?1.2.1"
                    id="qipn_side" data-siteurl="https://www.shotour.com/" data-lang="cn"></script>
            <div class="powered_by_metinfo"></div>
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
                                        <button type="submit" class="input-search-btn"><i class="icon wb-search"
                                                                                          aria-hidden="true"></i>
                                        </button>
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
<button type="button" class="btn btn-icon btn-primary btn-squared met-scroll-top hide">
    <i class="icon wb-chevron-up" aria-hidden="true"></i>
</button>
<script type="text/javascript">
    $(".list-group-item a").on('click',function () {

        var x=$(this).attr("x");
        var y=$(this).attr("y");
        // 百度地图API功能
        var map = new BMap.Map("allmap");
//    map.centerAndZoom(new BMap.Point(100.258992,26.817666),8);
        map.centerAndZoom(new BMap.Point(x,y),8);
        setTimeout(function(){
            map.setZoom(14);
        }, 2000);  //2秒后放大到14级
        map.enableScrollWheelZoom(true);
        var i=$(this).index('.list-group-item a');
        if(i==0){
            $('.allmap .xianxian').css("display","none");
        }
    });




</script>
<script>
    var jsonurl = 'https://www.shotour.com/shop/cart.php?lang=cn&a=dojson_cart_list',
        totalurl = 'https://www.shotour.com/shop/cart.php?lang=cn&a=domodify',
        delurl = 'https://www.shotour.com/shop/cart.php?lang=cn&a=dodel', lang_emptycart = '购物车中还没有商品，赶紧选购吧！';
</script>
<script src="/statics/js/travel/7dff286b7c37116d.js"></script>
</body>
</html>