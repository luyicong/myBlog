<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"D:\www\myBlog\public/../application/index\view\detail\index.html";i:1522229285;s:56:"D:\www\myBlog\public/../application/index\view\base.html";i:1522225272;}*/ ?>
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
            
<!--文章详情内容/start-->
<div class="detail_wrap">
    <div class="arc_title_wrap">
        <h3><?php echo $aticleData['arc_title']; ?></h3>
        <p>
            <span><?php echo $aticleData['arc_author']; ?> 发表于：<?php echo date('Y年m月d日 h:i:s',$aticleData['sendtime']); ?></span>
            <span>分类：前端开发</span>
            <span>阅读(<?php echo $aticleData['arc_click']; ?>)</span>
            <!--<span>评论(100)</span>-->
        </p>
    </div>
    <textarea class="textarea_text" hidden><?php echo $aticleData['arc_content']; ?></textarea>
    <div class="detail_content">
        <?php echo $aticleData['arc_content']; ?>
    </div>
</div>
<!--文章详情内容/end-->
<!--<article>-->
    <!--<div class="_head">-->
        <!--<h1><?php echo $aticleData['arc_title']; ?></h1>-->
        <!--<span>作者：<a href="javascript:;"><?php echo $aticleData['arc_author']; ?></a></span>-->
        <!--•-->
        <!--&lt;!&ndash;pubdate表⽰示发布⽇日期&ndash;&gt;-->
        <!--<time pubdate="pubdate" datetime="<?php echo date('Y年m月d日 h:i:s',$aticleData['sendtime']); ?>"><?php echo date('Y年m月d日 h:i:s',$aticleData['sendtime']); ?></time>-->
        <!--•-->
        <!--<span>点击：<span style="color:#999"><?php echo $aticleData['arc_click']; ?></span></span>-->
    <!--</div>-->
    <!--<div class="_digest">-->
        <!--<?php echo $aticleData['arc_content']; ?>-->
    <!--</div>-->
    <!--&lt;!&ndash;<div class="pagination pagination-sm pull-right">&ndash;&gt;-->

    <!--&lt;!&ndash;</div>&ndash;&gt;-->
    <!--<div class="_footer">-->
        <!--<i class="glyphicon glyphicon-tags"></i>-->
        <!--<?php foreach($aticleData['tags'] as $vo): ?>-->
        <!--<a href=""><?php echo $vo['tag_name']; ?></a>、-->
        <!--<?php endforeach; ?>-->
    <!--</div>-->


    <!--<div class="comments_wrap">-->
        <!--<h3>评论列表：</h3>-->
        <!--<?php if(is_array($comments) || $comments instanceof \think\Collection || $comments instanceof \think\Paginator): if( count($comments)==0 ) : echo "" ;else: foreach($comments as $key=>$vo): ?>-->
        <!--<?php if($vo['pid'] == '0'): ?><hr class="solidline"/><?php else: ?><hr class="dottedline"/><?php endif; ?>-->
        <!--<div class="commentList"  style="padding-left:<?php echo $vo['level']; ?>cm;text-align:left">-->
            <!--<div>-->
                <!--<span class="user">-->
                <!--<?php if(($vo['pauthor'] == NULL)): ?><?php echo $vo['author']; ?>-->
                    <!--<?php else: ?> <?php echo $vo['author']; ?><span class="black" style="color: #000101">回复</span><?php echo $vo['pauthor']; ?>-->
                <!--<?php endif; ?>-->
                <!--</span>-->
                <!--<a class="hf" id="<?php echo $vo['id']; ?>" style="float: right">回复</a>-->
                <!--<span  class="hftime"><?php echo date("Y-m-d",$vo['time']); ?></span>-->
            <!--</div>-->
            <!--<div class="content"><?php echo reFace($vo['content']); ?></div>-->

        <!--</div>-->

        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
    <!--</div>-->

<!--</article>-->

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
