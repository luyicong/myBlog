<?php

namespace app\index\controller;

use app\common\model\Category;

class Lists extends Common
{
    //分类列表
    public function Index(){
        $headConf = ['title'=>'yoho167技术博客--文章列表页'];
        $this->assign('headConf',$headConf);
        //列表数据
        $cate_id = input('param.cate_id');
        $tag_id = input('param.tag_id');
        if($cate_id){
            //获取当前分类下所有子分类
            $cids = (new Category())->getSon(db('cate')->select(),$cate_id);
            $cids[] = $cate_id;//把自己追加进去
            $listHead = [
                'title'=>'分类',
                'name'=>db('cate')->where('cate_id',$cate_id)->value('cate_name'),
                //whereIn,包含在其中的所有数据，count（）计算数据总条数
                'total'=>db('article')->whereIn('cate_id',$cids)->count()
            ];
            //文章列表数据(关联分类表cate)
            $articleList = db('article')->alias('a')
                ->join('__CATE__ c','a.cate_id=c.cate_id')
                ->where('a.is_recycle',2)
                ->whereIn('a.cate_id',$cids)
                ->field('a.arc_id,c.cate_id,c.cate_name,a.arc_title,a.arc_author,a.arc_digest,a.sendtime,a.arc_thumb,a.arc_click')->select();
        }
        if($tag_id){
            $listHead = [
                'title'=>'标签',
                'name'=>db('tag')->where('tag_id',$tag_id)->value('tag_name'),
                //whereIn,包含在其中的所有数据，count（）计算数据总条数
                'total'=>db('arc_tag')->where('tag_id',$tag_id)->count()
            ];
            //获取文章数据，文章表、文章中间表、分类表三表关联
            $articleList = db('article')->alias('a')
                ->join('__ARC_TAG__ at','a.arc_id=at.arc_id')
                ->join('__CATE__ c','a.cate_id=c.cate_id')
                ->where('a.is_recycle',2)
                ->where('at.tag_id',$tag_id)
                ->select();
        }
        //获取文章所属标签
        foreach ($articleList as $k => $v) {
            $articleList[$k]['tags'] = db('arc_tag')->alias('at')
                //利用分类中间表，找出文章所有的标签
                ->join('__TAG__ t', 'at.tag_id=t.tag_id')
                ->where('at.arc_id', $v['arc_id'])->field('t.tag_id,t.tag_name')->select();
        }
        $this->assign('listHead',$listHead);
        $this->assign('articleList',$articleList);
        return $this->fetch();
    }
}
