<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"D:\www\myBlog\public/../application/index\view\lists\index.html";i:1515397662;s:56:"D:\www\myBlog\public/../application/index\view\base.html";i:1522225272;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title><?php echo $headConf['title']; ?></title>
    <!--描述和摘要-->
    <meta name="keywords" content="<?php echo $_webSet['keywords']; ?>"/>
    <meta name="description" content="<?php echo $_webSet['description']; ?>"/>
    <meta name="robots" content="index,follow">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="ie-stand">
    <link rel="stylesheet" href="__STATIC__/new_index/css/reset.css">
    <link rel="stylesheet" href="__STATIC__/new_index/css/style.css">
    <script src="__STATIC__/new_index/js/jquery-3.2.1.min.js"></script>
    <script src="__STATIC__/new_index/js/markdown.js"></script>
</head>
<body>
<!--顶部banner/start-->
<div class="top_banner">
    <img src="__STATIC__/new_index/img/text_bg_1.png" alt="">
    <canvas id="c"></canvas>
</div>
<!--顶部banner/end-->
<!--page_content_wrap/start-->
<div class="page_content_wrap">
    <div class="page_content">
        <!--左侧边栏/start-->
        <div id="sidebar_left" class="sidebar sidebar_left">
            <div class="logo_wrap">
                <a href="/" class="logo" alt="yoho167博客，专注web技术交流、分享博客，每天进步一点点。">
                    <img src="__STATIC__/new_index/img/logo_2.png" alt="">
                </a>
            </div>
            <ul class="nav">
                <li><a <?php if(!input('param.cate_id')): ?> class="_active" <?php endif; ?> href="/index.html"><i class="iconfont icon-home"></i>首页</a></li>
                <!--<li><a class="active" href="/blog/arc_list.html"><i class="iconfont icon-feiji"></i>前端开发</a></li>-->
                <!--<li><a href="/blog/arc_list.html"><i class="iconfont icon-shouji"></i>移动开发</a></li>-->
                <!--<li><a href="/blog/arc_list.html"><i class="iconfont icon-ren"></i>程序人生</a></li>-->
                <!--<li><a href="/blog/arc_list.html"><i class="iconfont icon-zan"></i>实用工具</a></li>-->
                <!--<li><a href="/blog/arc_list.html"><i class="iconfont icon-guanyu"></i>关于YOHO167</a></li>-->
                <?php foreach($_cateData as $vo): ?>
                <li><a <?php if(input('param.cate_id')==$vo['cate_id']): ?>class="active"<?php endif; ?> href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>"><i class="iconfont <?php echo $vo['icon_class']; ?>"></i><?php echo $vo['cate_name']; ?></a></li>
                <!--<li <?php if(input('param.cate_id')==$vo['cate_id']): ?>class="_active"<?php endif; ?>><a href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>"><?php echo $vo['cate_name']; ?></a></li>-->
                <?php endforeach; ?>
            </ul>
        </div>
        <!--左侧边栏/end-->
        <!--中间文章列表/start-->
        <div class="content">
            
<div class="article_list" style="margin-top:10px;">
    <div class="list_title"><span><?php echo $listHead['title']; ?>：<?php echo $listHead['name']; ?></span></div>
    <div id="list_content" class="list_content">
        <?php foreach($articleList as $vo): ?>
        <div class="list_item">
            <div class="arc_img">
                <a href="#"><img src="<?php echo $vo['arc_thumb']; ?>"/></a>
            </div>
            <div class="arc_info">
                <p class="arc_title">
                    <!-- <a href="#" class="cate_name"><i></i>前端开发<font>查看关于 前端开发 的文章</font></a> -->
                    <a href="<?php echo url('index/detail/index',['arc_id'=>$vo['arc_id']]); ?>" class="title_text"><?php echo $vo['arc_title']; ?></a>
                </p>
                <p class="tag">
                    <span>发表于：<?php echo date('Y年m月d日 h:i:s',$vo['sendtime']); ?></span>
                </p>
                <p class="arc_desc"><?php echo $vo['arc_digest']; ?></p>
                <p class="tag">
                    <span>作者：<?php echo $vo['arc_author']; ?></span>
                    <span>阅读(<?php echo $vo['arc_click']; ?>)</span>
                    <!--<span>评论(188)</span>-->
                    <!--<span>赞(188)</span>-->
                </p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!--<article>-->
    <!--<div class="_head category_title">-->
        <!--<h2>-->
            <!--<?php echo $listHead['title']; ?>：-->
            <!--&lt;!&ndash;分类：&ndash;&gt;-->
            <!--<?php echo $listHead['name']; ?>-->
        <!--</h2>-->
        <!--<span>共 <?php echo $listHead['total']; ?> 篇文章</span>-->
    <!--</div>-->
<!--</article>-->
<!--<?php foreach($articleList as $vo): ?>-->
<!--<article>-->
    <!--<div class="_head">-->
        <!--<h1><?php echo $vo['arc_title']; ?></h1>-->
        <!--<span>作者：<?php echo $vo['arc_author']; ?></span>-->
        <!--•-->
        <!--<time pubdate="pubdate" datetime="<?php echo date('Y年m月d日 h:i:s',$vo['sendtime']); ?>"><?php echo date('Y年m月d日 h:i:s',$vo['sendtime']); ?></time>-->
        <!--•-->
        <!--分类：<a href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>"><?php echo $vo['cate_name']; ?></a>-->
    <!--</div>-->
    <!--<div class="_digest">-->
        <!--<img src="<?php echo $vo['arc_thumb']; ?>"  class="img-responsive"/>-->
        <!--<p><?php echo $vo['arc_digest']; ?></p>-->
    <!--</div>-->
    <!--<div class="_more">-->
        <!--<a href="<?php echo url('index/detail/index',['arc_id'=>$vo['arc_id']]); ?>" class="btn btn-default">阅读全文</a>-->
    <!--</div>-->
    <!--<div class="_footer">-->
        <!--<i class="glyphicon glyphicon-tags"></i>-->
        <!--<?php foreach($vo['tags'] as $v): ?>-->
        <!--<a href="<?php echo url('index/lists/index',['tag_id'=>$v['tag_id']]); ?>"><?php echo $v['tag_name']; ?></a>、-->
        <!--<?php endforeach; ?>-->
    <!--</div>-->
<!--</article>-->
<!--<?php endforeach; ?>-->

        </div>
        <!--中间文章列表/end-->
        <!--右侧边栏/start-->
        <div id="sidebar_right" class="sidebar sidebar_right">
            <!--<div class="sidebar_item account_wrap">-->
                <!--<a class="avatar" href="#"><img src="./public/img/avatar.png" /></a>-->
                <!--<p class="btns">-->
                    <!--<a href="#">注册</a>-->
                    <!--<a href="#">登录</a>-->
                <!--</p>-->
            <!--</div>-->
            <!--<div class="sidebar_item search_wrap" style="margin-top: 0;">-->
                <!--<div class="sidebar_title">-->
                    <!--站内搜索-->
                <!--</div>-->
                <!--<div class="search_from">-->
                    <!--<form>-->
                        <!--<input type="text" id="kw" name="kw" value="111111" placeholder="请输入关键字" required>-->
                        <!--<input type="submit" id="search_btn" value="搜索">-->
                    <!--</form>-->
                <!--</div>-->
            <!--</div>-->
            <!--所有分类/start-->
            <div class="sidebar_item cate_list_wrap" style="margin-top: 0">
                <div class="sidebar_title">
                    分类列表
                </div>
                <ul class="cate_list">
                    <?php if(is_array($_allCateData) || $_allCateData instanceof \think\Collection || $_allCateData instanceof \think\Paginator): if( count($_allCateData)==0 ) : echo "" ;else: foreach($_allCateData as $key=>$vo): ?>
                    <li><a href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>"><?php echo $vo['cate_name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <!--所有分类/end-->
            <!--热门标签/start-->
            <div class="sidebar_item hot_tag_wrap">
                <div class="sidebar_title">
                    热门标签
                </div>
                <div class="hot_tag_list">
                    <?php if(is_array($_tagData) || $_tagData instanceof \think\Collection || $_tagData instanceof \think\Paginator): if( count($_tagData)==0 ) : echo "" ;else: foreach($_tagData as $key=>$vo): ?>
                    <a href="<?php echo url('index/lists/index',['tag_id'=>$vo['tag_id']]); ?>"><?php echo $vo['tag_name']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <!--热门标签/end-->
            <!--友情链接/start-->
            <div class="sidebar_item link">
                <div class="sidebar_title">
                    友情链接
                </div>
                <div class="link_list">
                    <?php if(is_array($_linkData) || $_linkData instanceof \think\Collection || $_linkData instanceof \think\Paginator): if( count($_linkData)==0 ) : echo "" ;else: foreach($_linkData as $key=>$vo): ?>
                    <a href="<?php echo $vo['link_url']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <!--友情链接/end-->
        </div>
        <!--右侧边栏/end-->
    </div>
</div>
<!--page_content_wrap/end-->
<!--footer/start-->
<div class="footer_wrap">
    <div class="footer_content">
        <p><?php echo $_webSet['copyright']; ?> | QQ：980469887 e-mail: <?php echo $_webSet['email']; ?></p>
    </div>
</div>
<!--footer/end-->
<!--返回顶部/start-->
<div class="back_top_wrap">
    <a href="javascript:;" onclick="return false" id="back_top_btn" class="back_top_btn"></a>
    <a href="javascript:;" onclick="return false" id="back_top_btn_active" class="back_top_btn_active"></a>
</div>
<!--返回顶部/end-->
</body>
<script type="text/javascript">
    var c = document.getElementById("c");
    var ctx = c.getContext("2d");

    //making the canvas full screen
    c.height = 180;
    c.width = window.innerWidth;

    //chinese characters - taken from the unicode charset
    var chinese = "JavascriptHtml5Css3Node";
    //converting the string into an array of single characters
    chinese = chinese.split("");

    var font_size = 12;
    var columns = c.width / font_size; //number of columns for the rain
    //an array of drops - one per column
    var drops = [];
    //x below is the x coordinate
    //1 = y co-ordinate of the drop(same for every drop initially)
    for (var x = 0; x < columns; x++)
        drops[x] = 1;

    //drawing the characters
    function draw() {
        //Black BG for the canvas
        //translucent BG to show trail
        ctx.fillStyle = "rgba(74,120,218,0.06)";
        ctx.fillRect(0, 0, c.width, c.height);

        ctx.fillStyle = "#fff"; //green text
        ctx.font = font_size + "px arial";
        //looping over drops
        for (var i = 0; i < drops.length; i++) {
            //a random chinese character to print
            var text = chinese[Math.floor(Math.random() * chinese.length)];
            //x = i*font_size, y = value of drops[i]*font_size
            ctx.fillText(text, i * font_size, drops[i] * font_size);

            //sending the drop back to the top randomly after it has crossed the screen
            //adding a randomness to the reset to make the drops scattered on the Y axis
            if (drops[i] * font_size > c.height && Math.random() > 0.975)
                drops[i] = 0;

            //incrementing Y coordinate
            drops[i]++;
        }
    }
    setInterval(draw, 50);

    $(function(){
        var oSiderLeft = $('.sidebar_left');
        var iScrollTop = $('html,body').scrollTop();
        setScrollPos(iScrollTop)
        $(document).scroll(function(){
            iScrollTop = $('html,body').scrollTop()
            setScrollPos(iScrollTop)
        })
        function setScrollPos(iTop){
            if(iTop>=250){
                oSiderLeft.css({position:'fixed'})
            }else{
                oSiderLeft.css({position:'absolute'})
            }
        }

        //
        var oCateName = $('#list_content .cate_name');
        oCateName.hover(function() {
            $(this).find('>font').fadeIn(200)
        },function() {
            $(this).find('>font').fadeOut(100)
        })

        var oBackTop = $('#back_top_btn');
        var oBackTopActive = $('#back_top_btn_active');
        var isS = true
        oBackTop.click(function(){
            isS = false
            oBackTop.fadeOut(100)
            $('body,html').animate({scrollTop:0},400,function(){
                isS = true
            })
        })

        var $ScrollTop = $(window).scrollTop();
        var $iScrollTop = $(window).height()/2;
        if ($ScrollTop > $iScrollTop) {
            oBackTop.fadeIn(300);
        }else{
            oBackTop.fadeOut(300);
        }
        $(window).scroll(function(){
            if(!isS) return
            $ScrollTop = $(window).scrollTop();
            if ($ScrollTop > $iScrollTop) {
                oBackTop.fadeIn(300);
            }else{
                oBackTop.fadeOut(300);
            }
        });

        // $('#search_btn').on('click',function(){
        //     window.location.href = "/search.html?kw="+$("kw").val()
        // })
    })
</script>
</html>
