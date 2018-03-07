{include file="common/header"/}
    <link rel="stylesheet" href="__CSS__/news.css">
    <title>新闻资讯</title>
    <!-- 顶部图片 -->
    <div class="banner">
        <img src="__IMG__/AboutUs/banner.png" alt="顶部banner">
    </div>
    <!-- 小导航 -->
    <div class="shortNav">
        <div class="container">
            当前位置：
            <a href="./index.html">首页</a>
            >新闻资讯
        </div>
    </div>
    <div class="container newsPanel">
        <div class="col-md-9 news">
            <!-- 新闻列表 -->
            <div>
                <ul>
                    {volist name="data_list" id="v"}
                    <li>
                        <div class="newsList">
                            <div class="newsImg col-md-3 wow fadeInLeft">
                                <a href="./newsDetails.html?id={$v['id']}">
                                    <img src="{$v['img']}" class="imgSize" alt="{$v['title']}">
                                </a>
                            </div>
                            <div class="newsCon col-md-9 wow fadeInRight">
                                <h4><a href="./newsDetails.html?id={$v['id']}">{$v['title']}</a></h4>
                                <p class="des">{$v['short']}</p>
                                <p class="info">{$v['time']}</p>
                            </div>
                        </div>
                    </li>
                    {/volist}
                </ul>
                {$pages}
            </div>
        </div>
        <div class="col-md-3 wow fadeInDown">
            <div class="met-news-bar">
                <!-- 搜索框 -->
                <form method="get">
                    <div class="form-group">
                        <div class="input-search">
                            <button type="submit" class="input-search-btn">
                                <i class="glyphicon glyphicon-search" aria-hidden="true"></i>
                            </button>
                            <input type="text" class="form-control" name="searchword" placeholder="Search">
                        </div>
                    </div>
                </form>
                <!-- 为您推荐 -->
                <div class="recommend">
                    <h3>为您推荐</h3>
                    <ul class="list-group list-group-bordered">
                        {volist name="data_list" id="v" offset="0" length='4'}
                        <li class="list-group-item"><a href="./newsDetails.html?id={$v['id']}">{$v['title']}</a></li>
                        {/volist}
                    </ul>
                </div>
                <!-- 选择类别 -->
                <ul class="choose">
                    <li class="choose_item">所有文章</li>
                    <li class="choose_item">专题活动</li>
                    <li class="choose_item">新闻资讯</li>
                </ul>
            </div>
        </div>
    </div>
{include file="common/footer"/}