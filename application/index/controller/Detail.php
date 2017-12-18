<?php

namespace app\index\controller;

class Detail extends Common
{
    //文章内容页
    public function Index(){
        //获取地址栏的文章id
        $arc_id = input('param.arc_id');
        //文章点击自增+1
        db('article')->where('arc_id',$arc_id)->setInc('arc_click');
        $articleData = db('article')->field('arc_id,arc_title,arc_author,arc_content,sendtime,arc_click')->find($arc_id);
        //设置页面的head相关信息
        $headConf = ['title'=>$articleData['arc_title'].'--小聪个人技术博客'];
        $this->assign('headConf',$headConf);
        //获取所属标签
        $articleData['tags'] = db('arc_tag')->alias('at')
            //关联文章标签中间表
            ->join('__TAG__ t','at.tag_id=t.tag_id')
            ->where('at.arc_id',$articleData['arc_id'])
            ->field('t.tag_id,t.tag_name')->select();
        $this->assign('aticleData',$articleData);

        //获取当前文章的评论
//        $comments = db('comment')
//            ->where('tid',$arc_id)
//            ->where('isShow',1)
//            ->paginate(5);
        $commentList = array();

        $comments = $this->CommentList($arc_id,$pid=0,$commentList,$spac=0,$pauthor=NULL);

        $this->assign('comments',$comments);

//        halt($comments);

        return $this->fetch();
    }

    //评论列表
    //评论列表
    function CommentList($tid,$pid=0,&$commentList=array(),$spac=0,$pauthor=NULL){
        static $i=0;
        $spac=$spac+1;//初始为1级评论
        $pauthor=$pauthor;
        $List=db('comment')
            ->where('pid',$pid)
            ->where('tid',$tid)
            ->field('id,pid,tid,content,add_time,author')
            ->select();
        foreach($List as $k=>$v){
            $commentList[$i]['level']=$spac;//评论层级
            $commentList[$i]['author']=$v['author'];
            $commentList[$i]['id']=$v['id'];
            $commentList[$i]['tid']=$v['tid'];//当前文章id
            $commentList[$i]['pid']=$v['pid'];//此条评论的父id
            $commentList[$i]['content']=$v['content'];
            $commentList[$i]['time']=$v['add_time'];
            $commentList[$i]['pauthor']=$pauthor;
            $i++;
            $this->CommentList($v['tid'],$v['id'],$commentList,$spac,$v['author']);
        }
        return $commentList;
    }
}
