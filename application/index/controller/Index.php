<?php
namespace app\index\controller;


class Index extends Common
{
    public function index()
    {
        //首页head数据
        $headConf = ['title'=>'yoho167技术博客--首页'];
        $this->assign('headConf',$headConf);
        //获取首页文章数据
        $articleData = db('article')->alias('a')
            //文章表与分类表关联，找出所属分类
            ->join('__CATE__ c','a.cate_id=c.cate_id')
            ->where('a.is_recycle',2)
            ->order('a.sendtime desc')->limit(8)
            ->select();
        foreach ($articleData as $k => $v) {
            $articleData[$k]['tags'] = db('arc_tag')->alias('at')
                //利用分类中间表，找出文章所有的标签
                ->join('__TAG__ t', 'at.tag_id=t.tag_id')
                ->where('at.arc_id', $v['arc_id'])->field('t.tag_id,t.tag_name')->select();
        }
//        halt($articleData);
        $this->assign('articleData',$articleData);
        return $this->fetch();
    }
}
