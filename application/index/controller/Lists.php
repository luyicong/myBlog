<?php

namespace app\index\controller;

use app\common\model\Category;

class Lists extends Common
{
    //分类列表
    public function Index(){
        $headConf = ['title'=>'小聪个人技术博客--列表页'];
        $this->assign('headConf',$headConf);
        //列表数据
        $cate_id = input('param.cate_id');
        if($cate_id){
            //获取当前分类下所有子分类
            $cids = (new Category())->getSon(db('cate')->select(),$cate_id);
            $cids[] = $cate_id;//把自己追加进去
            $listHead = [
                'title'=>'分类',
                'name'=>db('cate')->where('cate_id',$cate_id)->value('cate_name'),
                'total'=>db('article')->whereIn('cate_id',$cids)->count()
            ];
        }
        $this->assign('listHead',$listHead);
        return $this->fetch();
    }
}
