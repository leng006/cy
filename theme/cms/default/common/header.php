<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <!-- 区分大小写内核 -->
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="__IMG__/common/ci.ico" rel="icon" type="image/x-icon"/>
    <link rel="stylesheet" href="__CSS__/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="__CSS__/animate.css">
    <link rel="stylesheet" href="__CSS__/common.css">
    <!--[if lt IE 10]>
    <script src="http://misukeji.com/app/system/include/static/vendor/media-match/media.match.min.js"></script>
    <script src="http://misukeji.com/app/system/include/static/vendor/respond/respond.min.js"></script>
    <script src="http://misukeji.com/app/system/include/static/js/classList.min.js"></script> 
    <![endif]-->
     <!--[if lt IE 9]>
    <script type="text/javascript">
        window.onload = function(){
            document.body.innerHTML = "";
            document.write("<p>您的浏览器版本太低 请更新<a href='https://support.microsoft.com/zh-cn/help/17621/internet-explorer-downloads' style='color:red'>最新版本的浏览器</a>！</p>")
        }
    </script>
    <![endif]-->
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logoHead">
                    <img src="__IMG__/common/logo02.png" class="imgSize" alt="顶部logo">
                </div>   
                <div class="col-md-9">
                    <div class="box">
                        <div id="nav-menu">
                            <ul class="menu">
                                <li class="col-md-2"></li>
                                <li class="stmenu col-md-2">
                                    <p class="nav_title"><a href="./index.html" class="xialaguang"><span>首页</span></a></p>
                                </li>
                                <li class="stmenu col-md-2">
                                    <p class="nav_title"><a class="xialaguang"><span>业务范畴</span></a></p>    
                                    <ul class="children">    
                                        <li><p><a href="./alibb.html" class="wow fadeInLeft"><span>电子商务</span></a></p></li>
                                        <li><p><a href="./procurement.html" class="wow fadeInLeft"><span>大企业采购</span></a></p></li>
                                        <li><p><a href="./finance.html" class="wow fadeInLeft"><span>普惠金融</span></a></p></li>
                                        <li><p><a href="./logistics.html" class="wow fadeInLeft"><span>智慧物流</span></a></p></li>
                                        <li><p><a href="./marketing.html" class="wow fadeInLeft"><span>米速移动营销</span></a></p></li>
                                        <li><p><a href="./agriculture.html" class="wow fadeInLeft"><span>现代农业</span></a></p></li>
                                        <li><p><a href="./college.html" class="wow fadeInLeft"><span>电商学院</span></a></p></li>
                                    </ul>
                                </li>
                                <li class="stmenu col-md-2"><p><a href="./innovation.html" class="xialaguang"><span>创新创业</span></a></p></li>
                                <li class="stmenu col-md-2">
                                    <p class="nav_title"><a class="xialaguang" href="./aboutUs.html"><span>关于我们</span></a></p>    
                                    <ul class="children">    
                                        <li><p><a href="./aboutUs.html#about_profile" class="wow fadeInLeft"><span>思洋简介</span></a></p></li>
                                        <li><p><a href="./aboutUs.html#about_culture" class="wow fadeInLeft"><span>思洋文化</span></a></p></li>
                                        <li><p><a href="./aboutUs.html#about_history" class="wow fadeInLeft"><span>发展历程</span></a></p></li>
                                        <!-- <li><h3><a href="./aboutUs.html#abourt_partners" class="wow fadeInLeft"><span>合作伙伴</span></a></h3></li> -->
                                        <li><p><a href="./news.html" class="wow fadeInLeft"><span>新闻资讯</span></a></p> </li>
                                    </ul>
                                </li>
                                <li class="stmenu col-md-2">
                                    <p class="nav_title"><a href="./consult.html" class="xialaguang"><span>联络我们</span></a></p>   
                                    <ul class="children">    
                                        <li><p><a href="./joinUs.html" class="wow fadeInLeft"><span>加入我们</span></a></p></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>
    <script src="__JS__/jquery-3.2.1.min.js"></script>
    <script src="__JS__/bootstrap.min.js"></script>
    <script src="__JS__/wow.min.js"></script>
    <script type="text/javascript">
        $('#nav-menu .menu > li').hover(function () {
            $(this).find('.children').animate({ opacity: 'show', height: 'show' }, 200);
            $(this).find('.xialaguang').addClass('navhover');
        }, function () {
            $('.children').stop(true, true).hide();
            $('.xialaguang').removeClass('navhover');
        });
        new WOW().init();
    </script>

