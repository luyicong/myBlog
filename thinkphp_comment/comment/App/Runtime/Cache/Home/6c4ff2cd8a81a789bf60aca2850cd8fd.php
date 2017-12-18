<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>无限评论</title>
    <meta name="keywords" content="无限评论" />
    <meta name="description" content="" />
    <link href="/Public/Home/css/base.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <!--[if lt IE 9]>
    <script src="/Public/Home/js/modernizr.js"></script>
    <![endif]-->
</head>
<body>
<div class="ibody">

    <article>
            <div class="pinglun ">
                <div class="pl" type="button" >
                    评论
                </div>
                <div class="collapse">
                    <div class="well">
                        <form action="<?php echo U('Home/Index/addComment');?>" method="post" role="form" >
                            <div class="input-group">
                                <span class="input-group">昵称</span>
                                <input type="text" class="name1 input-group" placeholder="昵称" name="username" value="<?php echo ($username); ?>">
                                <input type="hidden" class=" input-group" placeholder="" name="pid" value="0">
                            </div>
                            <div class="input-group">
                                <span class="emotion input-group">表情</span>
                            </div>
                            <div class="input-group">
                                <textarea class="comment" id="content-text" name="comment" rows="3" placeholder="请输入评论内容"></textarea>
                            </div>
                            <div class="input-group submit">
                                <button class="submit-btn" type="submit" >提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <input type="hidden" name="pid" value="<?php echo ($vo["author"]); ?>"/>
            <div >
                <h2></h2>
                <?php if(is_array($commentList)): $i = 0; $__LIST__ = $commentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["pid"]) == "0"): ?><hr class="solidline"/><?php else: ?><hr class="dottedline"/><?php endif; ?>
                    <div class="commentList "  style="padding-left:<?php echo ($vo['level']-1); ?>cm">
                        <div><span class="user">
                            <?php if(($vo["pauthor"] == NULL)): echo ($vo["author"]); ?>
                                <?php else: ?> <?php echo ($vo["author"]); ?><span class="black" style="color: #000101">回复</span><?php echo ($vo["pauthor"]); endif; ?>
                        </span><a class="hf" id="<?php echo ($vo["id"]); ?>" style="float: right">回复</a><span  class="hftime"><?php echo (date("Y-m-d",$vo["time"])); ?></span></div>
                        <div class="content"><?php echo (reFace($vo["content"])); ?></div>

                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </article>

    <script src="/Public/Home/js/silder.js"></script>
    <script type="text/javascript" src="/Public/Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Public/Js/jquery.qqFace.js" ></script>
    <script type="text/javascript">
        $(function() {
            $('.emotion').qqFace({
                id:     'facebox', //表情ID
                assign: 'content-text', //赋予到具体位置
                path:   '../../comment/Public/Face/'    //表情路径
            });
            $(".hf").click(//点击回复按钮事件
                    function(e){
                        var $this = $(this);
                        if($this.parent().parent().next().hasClass('hftext')){
                            $this.parent().parent().next().remove();
                        }else{
                            $this.parent().parent().after('<div class="hftext"><form action="<?php echo U('Home/Index/addComment');?>" method="post" role="form" > <input name="article_id" type="hidden"  value="<?php echo ($Article["id"]); ?>" /><input id="pid" type="hidden" name="pid" value="<?php echo ($vo["id"]); ?>"/> <div class="input-group home-from-box"><span class="input-group">昵称</span><input type="text" class="input-group name1" placeholder="昵称" name="username" value="<?php echo ($username); ?>"></div><div class="input-group"> <span class="input-group emotion2">表情</span>  </div><div class="input-group">  <textarea style="display: inline" class="input-group comment" id="content-text2" name="comment" rows="3" placeholder="请输入评论内容"></textarea>  </div><div class="submit">  <input style="width:100px;height:35px "  class="submit-btn" type="submit" value="提交"></div> </form></div>');
                            var v_id = $(e.target).attr('id');//获取元素id;
                            $("#pid").val(v_id);
                            $('.emotion2').qqFace({
                                id:     'facebox', //表情ID
                                assign: 'content-text2', //赋予到具体位置
                                path:  '../../comment/Public/Face/'   //表情路径
                            });
                        }

                         $(".submit-btn").click(function(){
                         var $this=$(this);
                         var name=$this.parent().siblings().children('.name1').val();
                         var content=$this.parent().siblings().children('.comment').val();
                         if(name==""||content==""){
                         alert("昵称或者评论不能为空哦");
                         }
                         });
                    });
             $(".submit-btn").click(function(){
             var $this=$(this);
             var name=$this.parent().siblings().children('.name1').val();
             var content=$this.parent().siblings().children('.comment').val();
             if(name==""||content==""){             alert("昵称或者评论不能为空哦");

             }
             });


        });



    </script>

    <div class="clear"></div>
    <!-- 清除浮动 -->
</div>
</body>
</html>