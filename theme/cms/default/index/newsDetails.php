{include file="common/header"/}
    <link rel="stylesheet" href="__CSS__/newsDetails.css">
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
            ><a href="./news.html">新闻资讯</a>
        </div>
    </div>
    <div class="container">
        <!-- 新闻内容详情 -->
        <div class="articles">
            <h1 class="ct">{$data['title']}</h1>
            <p class="info ct">{$data['time']}</p>
            <div class="content"> {$data['content']}</div>
        </div>
    </div>
{include file="common/footer"/}