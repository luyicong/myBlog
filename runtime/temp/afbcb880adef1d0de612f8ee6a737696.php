<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"D:\www\myBlog\public/../application/index\view\index\index.html";i:1515397374;s:56:"D:\www\myBlog\public/../application/index\view\base.html";i:1524735908;}*/ ?>
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
    <link rel="stylesheet" href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css">
    <script src="__STATIC__/new_index/js/jquery-3.2.1.min.js"></script>
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
            
<div class="banner_wrap">
    <!--banner广告/start-->
    <div class="banner_list">
        <?php if(is_array($hotArcList) || $hotArcList instanceof \think\Collection || $hotArcList instanceof \think\Paginator): if( count($hotArcList)==0 ) : echo "" ;else: foreach($hotArcList as $key=>$vo): ?>
        <a href="<?php echo url('index/detail/index',['arc_id'=>$vo['arc_id']]); ?>" <?php if($key == 0): ?> class="left_banner" <?php endif; ?>>
            <img src="<?php echo $vo['arc_thumb']; ?>" />
            <span title="<?php echo $vo['arc_title']; ?>"><?php echo $vo['arc_title']; ?></span>
        </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <!--<a href="#">-->
            <!--<img src="__STATIC__/new_index/img/banner.jpg" />-->
            <!--<span title="文章标题">文章标题</span>-->
        <!--</a>-->
        <!--<a href="#">-->
            <!--<img src="__STATIC__/new_index/img/banner.jpg" />-->
            <!--<span title="文章标题">文章标题</span>-->
        <!--</a>-->
        <!--<a href="#">-->
            <!--<img src="__STATIC__/new_index/img/banner.jpg" />-->
            <!--<span title="文章标题">文章标题</span>-->
        <!--</a>-->
        <!--<a href="#">-->
            <!--<img src="__STATIC__/new_index/img/banner.jpg" />-->
            <!--<span title="文章标题">文章标题</span>-->
        <!--</a>-->
    </div>
    <!--banner广告/end-->
</div>
<div class="hot_recom_wrap">
    <div class="list_title"><span>热门推荐</span></div>
    <ul class="hot_article_list">
        <?php if(is_array($_newArticleData) || $_newArticleData instanceof \think\Collection || $_newArticleData instanceof \think\Paginator): if( count($_newArticleData)==0 ) : echo "" ;else: foreach($_newArticleData as $key=>$vo): ?>
        <li <?php if($key<3): ?> class="hot" <?php endif; ?>>
            <a href="<?php echo url('index/detail/index',['arc_id'=>$vo['arc_id']]); ?>">
                <i><?php echo $key+1; ?></i>
                <p><?php echo $vo['arc_title']; ?></p>
                <span>阅读(<?php echo $vo['arc_click']; ?>)</span>
                <!--<span>赞(100)</span>-->
                <!--<span>评论(100)</span>-->
            </a>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
<!--文章列表/start-->
<div class="article_list">
    <div class="list_title"><span>最新发表</span></div>
    <div id="list_content" class="list_content">
        <?php foreach($articleData as $vo): ?>
        <div class="list_item">
            <div class="arc_img">
                <a href="<?php echo url('index/detail/index',['arc_id'=>$vo['arc_id']]); ?>"><img src="<?php echo $vo['arc_thumb']; ?>"/></a>
            </div>
            <div class="arc_info">
                <p class="arc_title">
                    <a href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>" class="cate_name"><i></i><?php echo $vo['cate_name']; ?><font>查看关于 <?php echo $vo['cate_name']; ?> 的文章</font></a>
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
                    <span>赞(188)</span>
                </p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!--文章列表/end-->

        </div>
        <!--中间文章列表/end-->
        <!--右侧边栏/start-->
        <div id="sidebar_right" class="sidebar sidebar_right">
            <div class="sidebar_item about_wrap">
                <div class="sidebar_title">关于yoho167博客</div>
                <div class="about_content">
                    <p>yoho167博客，是LYC123个人技术博客，主要记录和总结前端工作中常用的知识及我的生活。</p>
                    <div class="conact_icon">
                        <div class="icon_item"></div>
                        <div class="icon_item"></div>
                        <div class="icon_item"></div>
                    </div>
                </div>
            </div>
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
            <div class="sidebar_item cate_list_wrap">
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
<script type="text/javascript" src="__STATIC__/new_index/js/common.js"></script>
</html>
