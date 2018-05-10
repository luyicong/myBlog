<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"D:\www\myBlog\public/../application/admin\view\article\store.html";i:1523766526;s:56:"D:\www\myBlog\public/../application/admin\view\base.html";i:1525685024;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>TP5个人博客后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="__STATIC__/admin/bootstrap-3.3.0-dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/site.css" rel="stylesheet">
    <link href="__STATIC__/admin/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="__STATIC__/node_modules/hdjs/dist/hdjs.css">
    <link href="__STATIC__/lib/wangEditor.min.css">
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
        // //模块配置项
        window.hdjs={};
        //组件目录必须绝对路径(在网站根目录时不用设置)
        window.hdjs.base = '__STATIC__/node_modules/hdjs';
        //上传文件后台地址
        window.hdjs.uploader = 'test/php/uploader.php?';
        //获取文件列表的后台地址
        window.hdjs.filesLists = 'test/php/filesLists.php?';

        $(function(){
            $('.dropdown-toggle').click(function(){
                $(this).siblings('.dropdown-menu').css('display','block')
            })
            $(document).click(function(){
                $('.dropdown-menu').css('display','none')
            })
        })
    </script>
    <!--<script src="__STATIC__/node_modules/hdjs/app/util.js"></script>-->
    <!--<script src="__STATIC__/node_modules/hdjs/require.js"></script>-->
    <script src="__STATIC__/node_modules/hdjs/dist/static/requirejs/require.js"></script>
    <script src="__STATIC__/node_modules/hdjs/dist/static/requirejs/config.js"></script>
    <!--<script src="__STATIC__/lib/tinymce.min.js"></script>-->
    <style>
        i {
            color: #337ab7;
        }
        #ue_container{
            min-height: 400px;
        }
    </style>
</head>
<body>
<div class="container-fluid admin-top">
    <!--导航-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <h4 style="display: inline;line-height: 50px;float: left;margin: 0px"><a href="index.html" style="color: white;margin-left: -14px">博客后台管理系统</a>
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
                        <li>
                            <a href="/" target="_blank"><i class="fa fa-w fa-home"></i> 前台首页</a>
                        </li>
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
            文章管理</a>
    </li>
    <li class="active">
        <a href="">文章添加</a>
    </li>
</ol>
<ul class="nav nav-tabs" role="tablist">
    <li><a href="<?php echo url('admin/Article/index'); ?>">文章管理</a></li>
    <li class="active"><a href="">文章添加</a></li>
</ul>
<form class="form-horizontal" id="form"  action="" method="post">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">文章管理</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">文章标题</label>
                <div class="col-sm-9">
                    <input type="text" name="arc_title"  class="form-control" placeholder="文章标题">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">文章作者</label>
                <div class="col-sm-9">
                    <input type="text" name="arc_author"  class="form-control" placeholder="文章作者">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">文章排序</label>
                <div class="col-sm-9">
                    <input type="number" name="arc_sort" value="100"  class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">所属分类</label>
                <div class="col-sm-9">
                    <select class="js-example-basic-single form-control" name="cate_id">
                        <option value="0">请选择分类</option>
                        <?php if(is_array($cateData) || $cateData instanceof \think\Collection || $cateData instanceof \think\Paginator): if( count($cateData)==0 ) : echo "" ;else: foreach($cateData as $key=>$vo): ?>
                        <option value="<?php echo $vo['cate_id']; ?>"><?php echo $vo['_cate_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">标签</label>
                <div class="col-sm-9">
                    <?php if(is_array($tagList) || $tagList instanceof \think\Collection || $tagList instanceof \think\Paginator): if( count($tagList)==0 ) : echo "" ;else: foreach($tagList as $key=>$vo): ?>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="tag[]" value="<?php echo $vo['tag_id']; ?>"><?php echo $vo['tag_name']; ?>
                    </label>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">缩略图</label>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control" name="arc_thumb" readonly="" value="">
                        <div class="input-group-btn">
                            <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                        </div>
                    </div>
                    <div class="input-group" style="margin-top:5px;">
                        <img src="__STATIC__/images/nopic.jpg" class="img-responsive img-thumbnail" width="150">
                        <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                    </div>
                </div>
                <script>
                    //上传图片
                    function upImage(obj) {
                        require(['hdjs'], function (hdjs) {
                            options = {
                                multiple: false,//是否允许多图上传
                                //data是向后台服务器提交的POST数据
                                data:{name:'博客',year:2099},
                            };
                            hdjs.image(function (images) {          //上传成功的图片，数组类型

                                $("[name='arc_thumb']").val(images[0]);
                                $(".img-thumbnail").attr('src', images[0]);
                            }, options)
                        });
                    }
                    //移除图片
                    function removeImg(obj) {
                        $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
                        $(obj).parent().prev().find('input').val('');
                    }
                </script>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">文章摘要</label>
                <div class="col-sm-9">
                    <textarea type="text" name="arc_digest"  class="form-control" placeholder="文章摘要"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for=""  class="col-sm-2 control-label">文章内容</label>
                <div class="col-sm-9">
                    <!--<textarea id="container" name="arc_content" style="height:500px;width:100%;"></textarea>-->
                    <!--<div id="editormd"></div>-->
                    <script id="ue_container" name="arc_content" type="text/plain"></script>
                    <!--<textarea hidden id="text1" name="arc_content" style="width:100%; height:200px;"></textarea>-->
                    <!--<script>-->
                        <!--var E = window.wangEditor-->
                        <!--var editor = new E('#editormd')-->

                        <!--var $text1 = $('#text1')-->
                        <!--// 配置服务器端地址-->
                        <!--editor.customConfig.uploadImgServer = "test/php/uploader.php?"-->
                        <!--editor.customConfig.onchange = function (html) {-->
                            <!--// 监控变化，同步更新到 textarea-->
                            <!--$text1.val(html)-->
                        <!--}-->
                        <!--editor.create()-->
                        <!--// 初始化 textarea 的值-->
                        <!--$text1.val(editor.txt.html())-->
                    <!--</script>-->

                    <script>
                        require(['hdjs'], function (hdjs) {
                            hdjs.ueditor('ue_container', {
                                toolbars: [
                                    [
                                        'anchor', //锚点
                                        'undo', //撤销
                                        'redo', //重做
                                        'bold', //加粗
                                        'indent', //首行缩进
                                        'snapscreen', //截图
                                        'italic', //斜体
                                        'underline', //下划线
                                        'strikethrough', //删除线
                                        'subscript', //下标
                                        'fontborder', //字符边框
                                        'superscript', //上标
                                        'formatmatch', //格式刷
                                        'source', //源代码
                                        'blockquote', //引用
                                        'pasteplain', //纯文本粘贴模式
                                        'selectall', //全选
                                        // 'print', //打印
                                        'preview', //预览
                                        'horizontal', //分隔线
                                        'removeformat', //清除格式
                                        'time', //时间
                                        'date', //日期
                                        'unlink', //取消链接
                                        'insertrow', //前插入行
                                        'insertcol', //前插入列
                                        'mergeright', //右合并单元格
                                        'mergedown', //下合并单元格
                                        'deleterow', //删除行
                                        'deletecol', //删除列
                                        'splittorows', //拆分成行
                                        'splittocols', //拆分成列
                                        'splittocells', //完全拆分单元格
                                        'deletecaption', //删除表格标题
                                        'inserttitle', //插入标题
                                        'mergecells', //合并多个单元格
                                        'deletetable', //删除表格
                                        'cleardoc', //清空文档
                                        'insertparagraphbeforetable', //"表格前插入行"
                                        'insertcode', //代码语言
                                        'fontfamily', //字体
                                        'fontsize', //字号
                                        'paragraph', //段落格式
                                        // 'simpleupload', //单图上传
                                        // 'insertimage', //多图上传
                                        'edittable', //表格属性
                                        'edittd', //单元格属性
                                        'link', //超链接
                                        'emotion', //表情
                                        'spechars', //特殊字符
                                        'searchreplace', //查询替换
                                        'map', //Baidu地图
                                        'gmap', //Google地图
                                        'insertvideo', //视频
                                        // 'help', //帮助
                                        'justifyleft', //居左对齐
                                        'justifyright', //居右对齐
                                        'justifycenter', //居中对齐
                                        'justifyjustify', //两端对齐
                                        'forecolor', //字体颜色
                                        'backcolor', //背景色
                                        'insertorderedlist', //有序列表
                                        'insertunorderedlist', //无序列表
                                        // 'fullscreen', //全屏
                                        'directionalityltr', //从左向右输入
                                        'directionalityrtl', //从右向左输入
                                        'rowspacingtop', //段前距
                                        'rowspacingbottom', //段后距
                                        'pagebreak', //分页
                                        // 'insertframe', //插入Iframe
                                        'imagenone', //默认
                                        'imageleft', //左浮动
                                        'imageright', //右浮动
                                        // 'attachment', //附件
                                        'imagecenter', //居中
                                        // 'wordimage', //图片转存
                                        'lineheight', //行间距
                                        'edittip ', //编辑提示
                                        'customstyle', //自定义标题
                                        'autotypeset', //自动排版
                                        // 'webapp', //百度应用
                                        'touppercase', //字母大写
                                        'tolowercase', //字母小写
                                        'background', //背景
                                        'template', //模板
                                        'scrawl', //涂鸦
                                        'music', //音乐
                                        'inserttable', //插入表格
                                        // 'drafts', // 从草稿箱加载
                                        // 'charts', // 图表
                                    ]
                                ]
                            }, function (editor) {
                                //这是回调函数 editor是百度编辑器实例
                                console.log(editor)

                            });
                        })
                    </script>
                    <!--第二个参数为添加到数据表中字段，hash为确定上传文件标识（可以以用户编号，标识为此用户上传的文件，系统使用这个字段值来显示文件列表），data为数据表中的data字段值，开发者根据业务需要自行添加-->
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">确定</button>
</form>

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
    Powered by LYC © 2017-2022 blog.yoho167.cn
</div>
</body>
</html>
