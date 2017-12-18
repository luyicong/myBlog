<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    Public function index(){
        //评论
        $comment=$this->CommentList($pid=0,$commentList=array(),$spac=0,$pauthor=NULL);
        $this->assign('commentList',$comment);
        $this->display();
          }


    //评论
    public function  addComment(){
        $rules = array(//定义动态验证规则
            array('comment','require','评论不能为空'),
            array('username','require','昵称不能为空'),
            array('username', '3,15', '用户名长度必须在3-15位之间！', 0, 'length', 3),
        );
        $data=array(
            'content'=>$_POST['comment'],
            'ip'=>get_client_ip(),
            'add_time'=>time(),
            'pid'=>I('post.pid'),
            'author'=>I('post.username'),
        );

        $comment = M("comment"); // 实例化User对象
        if (!$comment->validate($rules)->create()){//验证昵称和评论
            exit($comment->getError());
        }else{
            $add=$comment->add($data);
            if($add){
                $this->success('评论成功');
            }else{
                $this->error('评论失败');
            }
        }
    }

    //评论列表
    function CommentList($pid=0,&$commentList=array(),$spac=0,$pauthor=NULL){
        static $i=0;
        $spac=$spac+1;//初始为1级评论
        $pauthor=$pauthor;
        $List=M('comment')->
            field('blog_comment.id,blog_comment.add_time,blog_comment.author,blog_comment.content,pid,blog_comment.id,blog_comment.pid')-> where(array('blog_comment.pid'=>$pid))->select();
        foreach($List as $k=>$v){
            $commentList[$i]['level']=$spac;//评论层级
            $commentList[$i]['author']=$v['author'];
            $commentList[$i]['id']=$v['id'];
            $commentList[$i]['pid']=$v['pid'];//此条评论的父id
            $commentList[$i]['content']=$v['content'];
            $commentList[$i]['time']=$v['add_time'];
            $commentList[$i]['pauthor']=$pauthor;
            $i++;
            $this->CommentList($v['id'],$commentList,$spac,$v['author']);
        }
        return $commentList;
    }



}