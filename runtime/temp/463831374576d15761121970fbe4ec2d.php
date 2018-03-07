<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:36:"theme/cms/default/index/homePage.php";i:1511510500;s:35:"theme/cms/default/common/header.php";i:1511510500;s:35:"theme/cms/default/common/footer.php";i:1511510500;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="__CSS__/bootstrap.css">
    <link rel="stylesheet" href="__CSS__/common.css">
    <script src="__JS__/jquery-3.2.1.min.js"></script>
    <script src="__JS__/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="__CSS__/common.css" rel="stylesheet">
    <link rel="stylesheet" href="__CSS__/aboutUs.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>   
                <div class="col-md-2 logoHead flex">
                    <img src="__IMG__/common/logo01.png" class="imgSize">
                </div>   
                <div class="col-md-8">
                    <div class="box">
                        <div id="nav-menu">
                            <ul class="menu">
                                <li class="stmenu"><h3><a href="#" class="xialaguang flex"><span>首页</span></a></h3></li>
                                <li class="stmenu">
                                    <h3><a href="#" class="xialaguang flex"><span>关于我们</span></a></h3>    
                                    <ul class="children">    
                                        <li><h3><a href="#"><span>思洋简介</span></a></h3></li>
                                        <li><h3><a href="#"><span>新闻资讯</span></a></h3></li>
                                        <li><h3><a href="#"><span>思洋文化</span></a></h3></li>
                                        <li><h3><a href="#"><span>发展历程</span></a></h3></li>
                                        <li><h3><a href="#"><span>合作伙伴</span></a></h3></li>
                                    </ul>
                                </li>
                                <li class="stmenu"><h3><a href="#" class="xialaguang flex"><span>新闻资讯</span></a></h3></li>
                                <li class="stmenu">
                                    <h3><a href="#" class="xialaguang flex"><span>业务范畴</span></a></h3>    
                                    <ul class="children">    
                                        <li><h3><a href="#"><span>电子商务</span></a></h3></li>
                                        <li><h3><a href="#"><span>移动营销</span></a></h3></li>
                                        <li><h3><a href="#"><span>普惠金融</span></a></h3></li>
                                        <li><h3><a href="#"><span>智慧物流</span></a></h3></li>
                                        <li><h3><a href="#"><span>电商学院</span></a></h3></li>
                                        <li><h3><a href="#"><span>现代农业</span></a></h3></li>
                                        <li><h3><a href="#"><span>大企业采购</span></a></h3></li>
                                    </ul>
                                </li>
                                <li class="stmenu"><h3><a href="#" class="xialaguang flex"><span>创新创业</span></a></h3></li>
                                <li class="stmenu">
                                    <h3><a href="#" class="xialaguang flex"><span>联络我们</span></a></h3>   
                                    <ul class="children">    
                                        <li><h3><a href="#"><span>加入我们</span></a></h3></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>   
                <div class="col-md-1"></div>   
            </div>
        </div>
    </div>
    <script type="text/javascript" src="__JS__/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $('#nav-menu .menu > li').hover(function () {
            $(this).find('.children').animate({ opacity: 'show', height: 'show' }, 200);
            $(this).find('.xialaguang').addClass('navhover');
        }, function () {
            $('.children').stop(true, true).hide();
            $('.xialaguang').removeClass('navhover');
        });
    </script>


<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="__CSS__/bootstrap.css">
    <link href="__CSS__/common.css" rel="stylesheet">
    <link rel="stylesheet" href="__CSS__/homePage.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- 轮播 -->
    <div id="myCarousel" class="carousel slide">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="__IMG__/homePage/1.jpg">
            </div>
            <div class="item">
                <img src="__IMG__/homePage/1.jpg">
            </div>
            <div class="item">
                <img src="__IMG__/homePage/1.jpg">
            </div>
        </div>
    </div>
    <!-- 业务范畴 -->
    <div class="container business">
        <div class="title">
            <h1 class="ct">业务范畴</h1>
            <h3 class="ct">
                <span class="themeCo">BUSINESS</span>
                <span class="gray">CATTGORY</span>
            </h3>
        </div>
        <!-- 图片展示 -->
        <div class="module">
            <div class="row">
                <div class="col-md-6 rowImg">
                    <b class="imgShowTitle">电子商务</b>
                    <figure class="imgShow_bus">
                        <img src="__IMG__/homePage/yewu01.png">
                        <div class="hoverBg">
                            <figcaption>
                                <h3>电子商务</h3>
                                <p class="paragraph">
                                    阿里巴巴诚信通&增值服务：企业交易平台，网销宝(店铺推广)，服务包(店铺设计、运营)
                                </p>
                            </figcaption>
                        </div>
                    </figure>
                </div>
                <div class="col-md-4 rowImg">
                    <b class="imgShowTitle">移动营销</b>
                    <figure class="imgShow_bus">
                        <img src="__IMG__/homePage/yewu02.png">
                        <div class="hoverBg">
                            <figcaption>
                                <h3>移动营销</h3>
                                <p class="paragraph">
                                    基于移动互联网为企业提供开发、运营、培训、推广一体化解决方案，帮助企业实现线上线下互通（O2O），数字化客户关系管理（SCRM），移动电商，轻应用（lightapp）WMAPP等多个层面的业务开发
                                </p>
                            </figcaption>
                        </div>
                    </figure>
                </div>
                <div class="col-md-2 rowImg">
                    <b class="imgShowTitle">普惠金融</b>
                    <figure class="imgShow_bus">
                        <img src="__IMG__/homePage/yewu03.png">
                        <div class="hoverBg">
                            <figcaption>
                                <h3>普惠金融</h3>
                                <p class="paragraph">
                                    思洋是阿里巴巴网商银行战略合作伙伴，及时高效解决您的资金需求，为企业助力护航。
                                </p>
                            </figcaption>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 rowImg">
                    <b class="imgShowTitle">智慧物流</b>
                    <figure class="imgShow_bus">
                        <img src="__IMG__/homePage/yewu04.png">
                        <div class="hoverBg">
                            <figcaption>
                                <h3>智慧物流</h3>
                                <p class="paragraph">
                                    思洋是阿里巴巴菜鸟物流湖南和江西战略合作伙伴，为您提供高效电子商务物流解决方案。
                                </p>
                            </figcaption>
                        </div>
                    </figure>
                </div>
                <div class="col-md-4 rowImg">
                    <b class="imgShowTitle">电商学院</b>
                    <figure class="imgShow_bus">
                        <img src="__IMG__/homePage/yewu05.png">
                        <div class="hoverBg">
                            <figcaption>
                                <h3>电商学院</h3>
                                <p class="paragraph">
                                    为企业培训电商人才，帮助大学生就业创业，为传统产业提供互联网＋孵化平台。
                                </p>
                            </figcaption>
                        </div>
                    </figure>
                </div>
                <div class="col-md-2 rowImg">
                    <b class="imgShowTitle">现代农业</b>
                    <figure class="imgShow_bus">
                        <img src="__IMG__/homePage/yewu06.png">
                        <div class="hoverBg">
                            <figcaption>
                                <h3>现代农业</h3>
                                <p class="paragraph">
                                    为农产品提供品牌、营销、文化传播及供应链管理服务。 为农民培训赋能及农产品上行解决方案。
                                </p>
                            </figcaption>
                        </div>
                    </figure>
                </div>
                <div class="col-md-4 rowImg">
                    <b class="imgShowTitle">大企业采购</b>
                    <figure class="imgShow_bus">
                        <img src="__IMG__/homePage/yewu07.png">
                        <div class="hoverBg">
                            <figcaption>
                                <h3>大企业采购</h3>
                                <p class="paragraph">
                                    阿里巴巴大企业采购基于1688电子商务平台，利用领先的互联网与大数据技术，为企业提供专业、高效的 电商化采购解决方案，建立客户专属的互联网化采购管理平台。
                                </p>
                            </figcaption>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- 持续可信赖 -->
    <div class="trust">
        <div class="container">
            <div class="title">
                <h1 class="ct">持续可信赖</h1>
                <h3 class="ct">
                    <span class="themeCo">SUSTAINABLE</span>
                    <span class="gray">AND&nbsp;TRUSTWORTHY</span>
                </h3>
            </div>
            <div class="module">
                <!-- 信赖理由 -->
                <div class="col-md-6 justification">
                    <ul>
                        <li>
                            <div class="homePageIcon">
                                <img src="__IMG__/homePage/trust01.png">
                            </div>
                            <p>
                                <span class="themeCo f20">10</span>年阿里巴巴电商服务经验</p>
                        </li>
                        <li>
                            <div class="homePageIcon">
                                <img src="__IMG__/homePage/trust02.png">
                            </div>
                            <p>
                                <span class="themeCo f20">10+</span>本地化分支服务中心</p>
                        </li>
                        <li>
                            <div class="homePageIcon">
                                <img src="__IMG__/homePage/trust03.png">
                            </div>
                            <p>
                                <span class="themeCo f20">300+</span>电商专业团队</p>
                        </li>
                        <li>
                            <div class="homePageIcon">
                                <img src="__IMG__/homePage/trust04.png">
                            </div>
                            <p>累计培训上
                                <span class="themeCo f20">万</span>名电商人才</p>
                        </li>
                        <li>
                            <div class="homePageIcon">
                                <img src="__IMG__/homePage/trust05.png">
                            </div>
                            <p>累计服务
                                <span class="themeCo f20">20000</span>余家企业
                                <span class="themeCo f20">5000</span>余家农企</p>
                        </li>
                        <li>
                            <div class="homePageIcon">
                                <img src="__IMG__/homePage/trust06.png">
                            </div>
                            <p>累计推动交易近
                                <span class="themeCo f20">千</span>亿元</p>
                        </li>
                    </ul>
                </div>
                <!-- 视频 -->
                <div class="col-md-6">
                    <div class="publicityVideo">
                        <!-- <video src="blob:http://www.iqiyi.com/9f6917d0-3ef4-4150-902b-a1589f858dbb" controls="controls"></video> -->
                        <embed src="https://imgcache.qq.com/tencentvideo_v1/playerv3/TPout.swf?max_age=86400&amp;v=20161117&amp;vid=z03613be5eh&amp;auto=0"
                            allowfullscreen="true" quality="high" width="100%" height="360" align="middle" allowscriptaccess="always"
                            type="application/x-shockwave-flash">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 专题活动+新闻资讯 -->
    <div class="container">
        <div class="module">
            <!-- 专题活动 -->
            <div class="projectAct">
                <div class="title">
                    <h1>专题活动</h1>
                    <h3 class="gray">THEMATIC&nbsp;ACTIVITIES</h3>
                </div>
                <div>
                    <div class="projectImg">
                        <img src="__IMG__/homePage/images/act01.png">
                    </div>
                    <div class="literals">
                        <div class="themeCo projectTitle">思洋2017年元旦致辞！</div>
                        <div class="literalsContent">
                            <p class="paragraph">
                                今天是2017年1月1日，正念，此刻是一枝花，我向思洋员工和思洋家属，今天是2017年1月1日，正念，此刻是一枝花，我向思洋员工和思洋家属，今天是2017年1月1日，正念，此刻是一枝花，我向思洋员工和思洋家属，向长期选择我们，新人我们的客户和合作伙伴，向长期关心思洋的各界领导，朋友，向思洋投资人等表示最衷心的感恩和最诚信的祝福！

                            </p>
                            <p class="paragraph">
                                正念所倡导的人生态度，是专注，接纳，信任和耐心；是体验生命的富足和美好。2016年是思洋人闪快和铭记的一年，从“思源八方，洋务未来”开始，思洋人不断挑战自我，战胜自我；拥抱变化，体验尝试...
                            </p>
                        </div>
                        <div class="gray postedTime">
                            2017-10-14
                        </div>
                    </div>
                </div>
            </div>
            <!-- 新闻资讯 -->
            <div class="news">
                <div class="title">
                    <h1>新闻资讯</h1>
                    <h3 class="gray">NEWS&nbsp;INFORMATION</h3>
                </div>
                <div>
                    <div class="newsList">
                        <div class="newsImg">
                            <img src="__IMG__/homePage/images/news01.png">
                        </div>
                        <div class="newsContent">
                            <div class="newsContentTitle">
                                【培训第二天】共信共创共享 职业专业敬业——思洋管理层Q3赋能大会
                            </div>
                            <p class="paragraph">
                                “共信共创共享！职业专业敬业！——唯有成长令人愉悦！”两天一夜思洋管理层Q3赋能培训两天一夜思洋管理层Q3赋能培训两天一夜思洋管理层Q3赋能培训
                            </p>
                            <div class="gray postedTime">
                                2017-10-14
                            </div>
                        </div>
                    </div>
                    <div class="newsList">
                        <div class="newsImg">
                            <img src="__IMG__/homePage/images/news02.png">
                        </div>
                        <div class="newsContent">
                            <div class="newsContentTitle">
                                为生意做乘法，湖南B2B电商产业生态峰会隆重召开！
                            </div>
                            <p class="paragraph">
                                7月22日，为生意做乘法，湖南B2B电商产业生态峰会在天心政府圈——长沙鑫远白天鹅酒店隆重举...
                            </p>
                            <div class="gray postedTime">
                                2017-10-14
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="themeCo ct more">查看更多新闻资讯>></div>
        </div>
    </div>
    <script>
        // 轮播间隔时间
        $('#myCarousel').carousel({
            interval: 2000
        })
    </script>
</body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="__CSS__/bootstrap.css">
    <link rel="stylesheet" href="__CSS__/common.css">
</head>

<body>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footImg">
                        <img src="__IMG__/common/logo02.png" class="imgSize">
                    </div>
                    <div class="ct footCode">
                        <img src="__IMG__/common/code.png">
                    </div>
                </div>
                <div class="col-md-8">
                    <ul class="main">
                        <li class="main_list">
                            <b>关于我们</b>
                            <ul class="list_children">
                                <li>
                                    <a href="#">思洋简介</a>
                                </li>
                                <li>
                                    <a href="#">新闻资讯</a>
                                </li>
                                <li>
                                    <a href="#">思洋文化</a>
                                </li>
                                <li>
                                    <a href="#">发展历程</a>
                                </li>
                                <li>
                                    <a href="#">合作伙伴</a>
                                </li>
                            </ul>
                        </li>
                        <li class="main_list">
                            <b>新闻资讯</b>
                        </li>
                        <li class="main_list">
                            <b>业务范畴</b>
                            <ul class="list_children">
                                <li>
                                    <a href="#">电子商务</a>
                                </li>
                                <li>
                                    <a href="#">移动营销</a>
                                </li>
                                <li>
                                    <a href="#">普惠金融</a>
                                </li>
                                <li>
                                    <a href="#">智慧物流</a>
                                </li>
                                <li>
                                    <a href="#">电商学院</a>
                                </li>
                                <li>
                                    <a href="#">现代农业</a>
                                </li>
                                <li>
                                    <a href="#">大企业采购</a>
                                </li>
                            </ul>
                        </li>
                        <li class="main_list">
                            <b>创新创业</b>
                        </li>
                        <li class="main_list">
                            <b>加入我们</b>
                            <ul class="list_children">
                                <li>
                                    <a href="#">社会招聘</a>
                                </li>
                                <li>
                                    <a href="#">校园招聘</a>
                                </li>
                            </ul>
                        </li>
                        <li class="main_list">
                            <b>联系我们</b>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_data">
        <!-- 底部信息 -->
        <div class="container">
            <p>
                总部：长沙市芙蓉中路三段398号新时空大厦5楼
            </p>
            <p>
                分公司：株洲 衡阳 湘潭 益阳 常德 邵东 常德 益阳 岳阳
            </p>
            <p>
                版权所有：2015@湖南思洋信息技术有限公司ALL RIGHTS RESERVED 湘ICP备13006122号
            </p>
        </div>
    </div>
</body>

</html>
</html>