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
        return $this->fetch();
    }
}
