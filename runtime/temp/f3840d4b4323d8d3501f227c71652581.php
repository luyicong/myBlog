<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"D:\www\myBlog\public/../application/admin\view\category\index.html";i:1497935018;s:56:"D:\www\myBlog\public/../application/admin\view\base.html";i:1500951663;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>TP5个人博客后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="__STATIC__/admin/bootstrap-3.3.0-dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/site.css" rel="stylesheet">
    <link href="__STATIC__/admin/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="__STATIC__/admin/js/jquery.min.js"></script>
    <script src="__STATIC__/admin/bootstrap-3.3.0-dist/dist/js/bootstrap.min.js"></script>
    <script src="__STATIC__/layer/layer.js"></script>
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        if (navigator.appName == 'Microsoft Internet Explorer') {
            if (navigator.userAgent.indexOf("MSIE 5.0") > 0 || navigator.userAgent.indexOf("MSIE 6.0") > 0 || navigator.userAgent.indexOf("MSIE 7.0") > 0) {
                alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
            }
        }
    </script>
    <script>
        //模块配置项
        var hdjs = {
            //框架目录
            'base': '__STATIC__/node_modules/hdjs',
            //上传文件后台地址
            'uploader': "<?php echo url('system/component/uploader'); ?>",
            //获取文件列表的后台地址
            'filesLists':"<?php echo url('system/component/filesLists'); ?>?",
        };
    </script>
    <script src="__STATIC__/node_modules/hdjs/app/util.js"></script>
    <script src="__STATIC__/node_modules/hdjs/require.js"></script>
    <script src="__STATIC__/node_modules/hdjs/config.js"></script>
    <style>
        i {
            color: #337ab7;
        }
    </style>
</head>
<body>
<div class="container-fluid admin-top">
    <!--导航-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <h4 style="display: inline;line-height: 50px;float: left;margin: 0px"><a href="index.html" style="color: white;margin-left: -14px">LYC个人博客后台管理系统</a>
                </h4>
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="http://www.kancloud.cn/manual/thinkphp5/118003" target="_blank"><i class="fa fa-w fa-file-code-o"></i>
                                在线文档</a>
                        </li>
                        <li>
                            <a href="http://fontawesome.dashgame.com/" target="_blank"><i
                                    class="fa fa-w fa-hand-o-right"></i> 图标库</a>
                        </li>
                        <!--<li>-->
                            <!--<a href="http://bbs.houdunwang.com" target="_blank"><i class="fa fa-w fa-forumbee"></i> 后盾网论坛</a>-->
                        <!--</li>-->
                    </ul>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="fa fa-w fa-user"></i>
                            admin
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo url('admin/Entry/updatepwd'); ?>">修改密码</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo url('admin/Entry/logout'); ?>">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--导航end-->
</div>
<!--主体-->
<div class="container-fluid admin_menu">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
            <div class="panel panel-default" id="menus">
                <!--栏目管理 start-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample"
                     aria-expanded="false" aria-controls="collapseExample"
                     style="border-top: 1px solid #ddd;border-radius: 0%">
                    <h4 class="panel-title">栏目管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample">
                    <a href="<?php echo url('admin/Category/index'); ?>" class="list-group-item">
                        <i class="fa fa-th" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        栏目列表
                    </a>
                </ul>
                <!--栏目管理 end-->

                <!--标签管理-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample2"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">标签管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample2" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample2">
                    <a href="<?php echo url('admin/Tag/index'); ?>" class="list-group-item">
                        <i class="fa fa-list-ol" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        标签列表
                    </a>
                </ul>
                <!--标签管理 end-->

                <!--文章管理-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample3"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">文章管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample3" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample3">
                    <a href="<?php echo url('admin/Article/index'); ?>" class="list-group-item">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="pull-right"></span>
                        文章列表
                    </a>
                    <a href="<?php echo url('admin/Article/recycle'); ?>" class="list-group-item">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        <span class="pull-right"></span>
                        回收站
                    </a>
                </ul>
                <!--文章管理 end-->
                <!--友情链接-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample4"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">友接管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample4" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample4">
                    <a href="<?php echo url('admin/Link/index'); ?>" class="list-group-item">
                        <i class="fa fa-rss" aria-hidden="true"></i>
                        <span class="pull-right"></span>
                        友链首页
                    </a>
                </ul>
                <!--友情链接 end-->
                <!--站点管理-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample5"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">站点管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample5" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample5">
                    <a href="<?php echo url('admin/Webset/index'); ?>" class="list-group-item">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <span class="pull-right"></span>
                        网站配置
                    </a>
                </ul>
                <!--站点管理 end-->
            </div>
        </div>
        <!--右侧主体区域部分 start-->
        <div class="col-xs-12 col-sm-9 col-lg-10">
            
<ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
    <li>
        <a href=""><i class="fa fa-cogs"></i>
            栏目管理</a>
    </li>
    <li class="active">
        <a href="">栏目列表</a>
    </li>
</ol>
<ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="">栏目列表</a></li>
    <li><a href="<?php echo url('admin/Category/store'); ?>">添加栏目</a></li>
</ul>
<form action="" method="post">
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th width="80">编号</th>
                    <th>栏目名称</th>
                    <th width="200">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($cateList as $vo): ?>
                <tr>
                    <td><?php echo $vo['cate_id']; ?></td>
                    <td><?php echo $vo['_cate_name']; ?></td>
                    <td>
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">操作 <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="<?php echo url('addSon',['cate_id'=>$vo['cate_id']]); ?>">添加子类</a></li>
                                <li><a href="<?php echo url('edit',['cate_id'=>$vo['cate_id']]); ?>">编辑</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:;" onclick="del(<?php echo $vo['cate_id']; ?>)">删除</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</form>
<div class="pagination pagination-sm pull-right">
</div>
<script>
    function del(cate_id) {
        //询问框
        layer.confirm('确定删除当前栏目吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            window.location.href = '<?php echo url('del'); ?>?cate_id='+cate_id;
        }, function(){

        });
//        window.location.href = '<?php echo url('del'); ?>?cate_id='+cate_id;
    }
</script>

        </div>
    </div>
    <!--右侧主体区域部分结束 end-->
</div>
</div>
<div class="master-footer" style="margin-top: 150px">
    <!--<a href="http://www.houdunwang.com">高端培训</a>-->
    <!--<a href="http://www.hdphp.com">开源框架</a>-->
    <!--<a href="http://bbs.houdunwang.com">后盾论坛</a>-->
    <br>
    Powered by LYC © 2017-2022 www.congitlive.cn
</div>
</body>
</html>
