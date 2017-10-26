<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\phpStudy\WWW\myBlog\public/../application/index\view\lists\index.html";i:1501219342;s:65:"D:\phpStudy\WWW\myBlog\public/../application/index\view\base.html";i:1501222420;}*/ ?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo $headConf['title']; ?></title>
    <!--描述和摘要-->
    <meta name="keywords" content="<?php echo $_webSet['keywords']; ?>"/>
    <meta name="description" content="<?php echo $_webSet['description']; ?>"/>
    <!--载入公共模板-->
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/org/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
    <script src="__STATIC__/index/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="__STATIC__/index/org/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/css/index.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/css/backTop.css"/>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1><?php echo $_webSet['title']; ?></h1>
            </div>
        </div>
    </div>
</header>
<nav role="navigation" class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" >

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">

                        <span class="sr-only">切换导航</span>

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>


                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="_menu" >
                        <li <?php if(!input('param.cate_id')): ?> class="_active"<?php endif; ?>><a href="__ROOT__/index.html">首页</a></li>
                        <?php foreach($_cateData as $vo): ?>
                        <li <?php if(input('param.cate_id')==$vo['cate_id']): ?>class="_active"<?php endif; ?>><a href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>"><?php echo $vo['cate_name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row">
            <!--标签规定文档的主要内容main-->
            <main class="col-md-8">
            
<article>
    <div class="_head category_title">
        <h2>
            <?php echo $listHead['title']; ?>：
            <!--分类：-->
            <?php echo $listHead['name']; ?>
        </h2>
        <span>共 <?php echo $listHead['total']; ?> 篇文章</span>
    </div>
</article>
<?php foreach($articleList as $vo): ?>
<article>
    <div class="_head">
        <h1><?php echo $vo['arc_title']; ?></h1>
        <span>作者：<?php echo $vo['arc_author']; ?></span>
        •
        <time pubdate="pubdate" datetime="<?php echo date('Y年m月d日 h:i:s',$vo['sendtime']); ?>"><?php echo date('Y年m月d日 h:i:s',$vo['sendtime']); ?></time>
        •
        分类：<a href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>"><?php echo $vo['cate_name']; ?></a>
    </div>
    <div class="_digest">
        <img src="<?php echo $vo['arc_thumb']; ?>"  class="img-responsive"/>
        <p><?php echo $vo['arc_digest']; ?></p>
    </div>
    <div class="_more">
        <a href="<?php echo url('index/detail/index',['arc_id'=>$vo['arc_id']]); ?>" class="btn btn-default">阅读全文</a>
    </div>
    <div class="_footer">
        <i class="glyphicon glyphicon-tags"></i>
        <?php foreach($vo['tags'] as $v): ?>
        <a href="<?php echo url('index/lists/index',['tag_id'=>$v['tag_id']]); ?>"><?php echo $v['tag_name']; ?></a>、
        <?php endforeach; ?>
    </div>
</article>
<?php endforeach; ?>

            </main>
            <aside class="col-md-4 hidden-sm hidden-xs">
                <div class="_widget">
                    <h4>关于博客</h4>
                    <div class="_info">
                        <p><?php echo $_webSet['aboutblog']; ?></p>
                        <p>
                            <i class="glyphicon glyphicon-volume-down"></i>
                            <a href="__ROOT__/index.html" target="_blank">小聪个人技术博客</a>
                        </p>
                    </div>
                </div>
                <div class="_widget">
                    <h4>分类列表</h4>
                    <div>
                        <?php if(is_array($_allCateData) || $_allCateData instanceof \think\Collection || $_allCateData instanceof \think\Paginator): if( count($_allCateData)==0 ) : echo "" ;else: foreach($_allCateData as $key=>$vo): ?>
                        <a href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>"><?php echo $vo['cate_name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="_widget">
                    <h4>标签云</h4>
                    <div class="_tag">
                        <?php if(is_array($_tagData) || $_tagData instanceof \think\Collection || $_tagData instanceof \think\Paginator): if( count($_tagData)==0 ) : echo "" ;else: foreach($_tagData as $key=>$vo): ?>
                        <a href="<?php echo url('index/lists/index',['tag_id'=>$vo['tag_id']]); ?>"><?php echo $vo['tag_name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>

            </aside>
        </div>
    </div>
</section>
<footer class="hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4 class="_title">最新文章</h4>
                <?php if(is_array($_newArticleData) || $_newArticleData instanceof \think\Collection || $_newArticleData instanceof \think\Paginator): if( count($_newArticleData)==0 ) : echo "" ;else: foreach($_newArticleData as $key=>$vo): ?>
                <div class="_single">
                    <p><a href="<?php echo url('index/detail/index',['arc_id'=>$vo['arc_id']]); ?>"><?php echo $vo['arc_title']; ?></a></p>
                    <time><?php echo date('Y年m月d日 h:i:s',$vo['sendtime']); ?></time>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="col-sm-4 footer_tag">
                <div id="">
                    <h4 class="_title">标签云</h4>
                    <?php if(is_array($_tagData) || $_tagData instanceof \think\Collection || $_tagData instanceof \think\Paginator): if( count($_tagData)==0 ) : echo "" ;else: foreach($_tagData as $key=>$vo): ?>
                    <a href="<?php echo url('index/lists/index',['tag_id'=>$vo['tag_id']]); ?>"><?php echo $vo['tag_name']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="col-sm-4">
                <h4 class="_title">友情链接</h4>
                <div class="_single">
                    <?php if(is_array($_linkData) || $_linkData instanceof \think\Collection || $_linkData instanceof \think\Paginator): if( count($_linkData)==0 ) : echo "" ;else: foreach($_linkData as $key=>$vo): ?>
                    <p><a href="<?php echo $vo['link_url']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a></p>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="javascript:;"><?php echo $_webSet['title']; ?></a>
                |
                <a href="/"><?php echo $_webSet['copyright']; ?></a>
                |
                <a href="javascript:;"><?php echo $_webSet['email']; ?></a>
            </div>
        </div>
    </div>
</div>
<!--返回顶部自己写的插件-->
<script src="__STATIC__/index/js/backTop.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(function(){
        //插件使用
        $('.back_top').backTop({right:30});
    })
</script>
<div class="back_top hidden-xs hidden-md">
    <i class="glyphicon glyphicon-menu-up"></i>
</div>
</body>
</html>