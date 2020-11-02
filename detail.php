<?php
$course_id = intval($_GET['course'] ?: 0);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="ycl">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>会书习字</title>
    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/detail.css">
</head>
<body>
    <!-- 头部公共部分 -->
    <div class="wrap-header">
        <div class="header-box">
            <div class="header-items logo"></div>
            <div class="header-items search">
                <div class="search-box">
                    <input type="text" name="" id="" class="header-search-input">
                    <div class="header-search-bt">
                        <i class="header-search-icon"></i>
                    </div>
                </div>
            </div>
            <div class="header-items login">
                <div class="login-item login-user" style="display:none">
                    <span>原材料</span>
                    <img src="./public/images/header/132.jpg">
                </div>
                <div class="login-item login-bt">
                    登录
                </div>
                <div class="login-item login-im">
                    私信
                </div>
                <div class="login-item login-download">
                    客户端
                </div>
                <div class="login-item login-download">
                    极速版
                </div>
                <div class="login-item login-download">
                    入驻/合作
                </div>
            </div>
        </div>
    </div>
    <!--详情部分-->
    <div class="detail-header-wrap">
        <div class="detail-header-content">
            <div class="detail-header-nav">
                <a>硬笔书法</a>
                <i>></i>
                <a>掌握好正确的握笔姿势</a>
            </div>
            <div class="detail-header-img-pay">
                <div class="detail-header-img-box">
                    <div class="detail-header-img">
                        <img src="./public/images/course/600.jpg">
                    </div>
                    服务承诺: <i class="icon_b"></i>支付保障
                </div>
                <div class="detail-header-pay-box">
                    <h1 class="detail-header-pay-title">掌握好正确的握笔姿势</h1>
                    <div class="detail-header-pay-reply">
                        <span>123人 购买</span>
                        <i class="icon_seq"></i>
                        <span>好评度 80%</span>
                        <i class="icon_seq"></i>
                        <span>
                            <i calss="icon_s"></i>
                            收藏
                        </span>
                    </div>
                    <div class="detail-header-pay-yh">
                        <div class="etail-header-class-name">硬笔书法</div>
                        内容充实，带你打好基础
                    </div>
                    <div class="detail-header-pay-num">
                        ¥50.00
                    </div>
                    <div class="detail-header-buy">
                        <div class="detail-header-buy-bt order">立即报班</div>
                        <div class="detail-header-buy-bt ">咨询</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--介绍-->
    <div class="detail-des">
        <div class="detail-des-left">
            <div class="detail-des-nav">
                <div class="detail-des-nav-item selected">课程概述</div>
                <div class="detail-des-nav-item">评论(122)</div>
            </div>
            <div class="detail-des-content">

            </div>
        </div>
        <div class="detail-des-right">
            <div class="detail-des-teacher-header">
                <img src="./public/images/header/132.jpg">
                <a class="detail-des-teacher-name">叶老师</a>
            </div>
            <div class="detail-des-teacher-dis">
                <ul>
                    <li>
                        <p>好评度</p>
                        <span>72%</span>
                    </li>
                    <li>
                        <p>课程数量</p>
                        <span>145</span>
                    </li>
                    <li style="border: none">
                        <p>学习人次</p>
                        <span>1w</span>
                    </li>
                </ul>
            </div>
            <div class="detail-des-teacher-jianjie">
                国内国人国语互联网篮球视频教学先驱者。从业5年以上。获得市场认可。
            </div>
            <div class="detail-des-teacher-tel">
                <h1>联系方式</h1>
                <div class="detail-des-teacher-tel-num">电话: 12345678976</div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="./public/js/jquery.min.js"></script>
<script>

</script>

