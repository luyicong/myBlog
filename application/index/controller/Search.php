<?php
namespace app\index\controller;


class Search extends Common
{
    public function index()
    {
        //首页head数据
        $headConf = ['title'=>'文章搜索结果列表-搜索结果页'];
//        $article = D('article');
//        $where = 1;
//        if ($kw = I('kw')) {
//            $where .= ' AND title LIKE "%' . $kw . '%"';
//        }
//        $count = $article->count();
//        $Page = new \Think\Page($count, 15);
//        $show = $Page->show();
//        $searchList = $article->where($where)->order('id DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();
//        $this->assign('searchList', $searchList);
//        $this->assign('page', $show);
//        halt('1111111');
        $searchList = Array([]);

//        $listHead = [
//            'title'=>'标签',
//            'name'=>db('tag')->where('tag_id',$tag_id)->value('tag_name'),
//            //whereIn,包含在其中的所有数据，count（）计算数据总条数
//            'total'=>db('arc_tag')->where('tag_id',$tag_id)->count()
//        ];

        $this->assign('headConf', $headConf);

        $this->assign('searchList', $searchList);

        return $this->fetch();
    }
}