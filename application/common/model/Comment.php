<?php

namespace app\common\model;

use think\Model;

class Comment extends Model{
    protected $pk = 'id';//主键
    protected $table = 'blog_comment';//生成操作的数据表

    //评论列表
    public  function CommentList($pid=0,&$commentList=array(),$spac=0,$pauthor=NULL){
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