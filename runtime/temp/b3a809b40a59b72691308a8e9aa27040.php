<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"D:\www\myBlog\public/../application/index\view\detail\index.html";i:1524734445;s:56:"D:\www\myBlog\public/../application/index\view\base.html";i:1524734635;}*/ ?>
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
    <!--<div id="reward_btn">打开弹窗</div>-->
    <!--<div class="reward_dialog_mask">-->
        <!--<div class="reward_dialog_box"></div>-->
    <!--</div>-->
    <!--打赏 start-->
    <div class="gratuity">
        <p>如果觉得我的文章对您有用，请随意打赏一下。您的支持将是我继续努力的动力！</p>
        <a id="gratuity-alert-btn" class="gratuity-alert-btn" href="javascript:;">￥打赏支持￥</a>
        <!--<div class="phone-pay">-->
            <!--<p>-->
                <!--<img src="../img/weixn_pay_code.jpg" alt="">-->
                <!--<span>微信</span>-->
            <!--</p>-->
            <!--<p>-->
                <!--<img src="../img/alipay_code.jpg" alt="">-->
                <!--<span>支付宝</span>-->
            <!--</p>-->
        <!--</div>-->
        <!--打赏弹窗 start-->
        <div class="gratuity-alert-mask"></div>
        <div class="gratuity-alert-box animated">
            <i class="close-icon close-btn"></i>
        </div>
        <!--打赏弹窗 end-->
    </div>
    <!--打赏 end-->
</div>
<script type="application/javascript">

    $(function(){
        $('#reward_btn').click(function(){
            alert('111')
        });
    })
</script>
<!--文章详情内容/end-->

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
<script type="text/javascript" src="__STATIC__/new_index/js/common.js"></script>
</html>
