
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="main">
                    <li class="main_list">
                        <a class="fb level themeCo" href="./aboutUs.html">关于我们</a>
                        <ul class="list_children">
                            <li>
                                <a href="./aboutUs.html#about_profile">思洋简介</a>
                            </li>
                            <li>
                                <a href="./aboutUs.html#about_culture">思洋文化</a>
                            </li>
                            <li>
                                <a href="./aboutUs.html#about_history">发展历程</a>
                            </li>
                            <li>
                                <a href="./news.html">新闻资讯</a>
                            </li>
                        </ul>
                    </li>
                    <li class="main_list">
                        <b class="level themeCo">业务范畴</b>
                        <ul class="list_children">
                            <li>
                                <a href="./alibb.html">电子商务</a>
                            </li>
                            <li>
                                <a href="./procurement.html">大企业采购</a>
                            </li>
                            <li>
                                <a href="./finance.html">普惠金融</a>
                            </li>
                            <li>
                                <a href="./logistics.html">智慧物流</a>
                            </li>
                            <li>
                                <a href="./marketing.html">米速移动营销</a>
                            </li>
                            <li>
                                <a href="./agriculture.html">现代农业</a>
                            </li>
                            <li>
                                <a href="./college.html">电商学院</a>
                            </li>
                        </ul>
                    </li>
                    <li class="main_list">
                        <a class="fb level themeCo" href="./innovation.html">创新创业</a>
                        <ul class="list_children">
                            <li>
                                <a href="./innovation.html">融合创新</a>
                            </li>
                            <li>
                                <a href="./innovation.html">合伙人创业</a>
                            </li>
                            <li>
                                <a href="./innovation.html">电商合资</a>
                            </li>
                            <li>
                                <a href="./innovation.html">大学生创业</a>
                            </li>
                            <li>
                                <a href="./innovation.html">双创服务</a>
                            </li>
                        </ul>
                    </li>
                    <li class="main_list">
                        <a class="fb level themeCo" href="./consult.html">联络我们</a>
                        <ul class="list_children">
                            <li>
                                <a href="./joinUs.html">加入我们</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="footImg">
                    <img src="__IMG__/common/logo02.png" class="imgSize" alt="尾部logo">
                </div>
                <div class="ct footCode">
                    <img src="__IMG__/common/code.png" alt="二维码">
                </div>
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
<!-- 返回顶部 -->
<a id="goTop">
    <span>
        <img src="__IMG__/common/goTop.png" alt="返回顶部">
    </span>
</a>
<script>
    $(function () {
        $(window).scroll(function () {  //只要窗口滚动,就触发下面代码 
            var scrollt = document.documentElement.scrollTop + document.body.scrollTop; //获取滚动后的高度 
            if (scrollt > 200) {  //判断滚动后高度超过200px,就显示  
                $("#goTop").fadeIn(400); //淡出     
            } else {
                $("#goTop").stop().fadeOut(400); //如果返回或者没有超过,就淡入.必须加上stop()停止之前动画,否则会出现闪动   
            }
        });
        $("#goTop").click(function () { //当点击标签的时候,使用animate在200毫秒的时间内,滚到顶部
            $("html,body").animate({ scrollTop: "0px" }, 200);
        });
    });
</script>
</body>
</html>