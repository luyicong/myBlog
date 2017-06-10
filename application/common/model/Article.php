<?php

namespace app\common\model;

use think\Model;

class Article extends Model
{
    protected $pk = 'arc_id';
    protected $table = 'blog_article';
    //获取文章列表
    public function getAll(){
        //数据表关联，把文章表跟分类表关联，提出所属分类
        $data = db('article')
            ->alias('a')
            ->join('__CATE__ c','a.cate_id = c.cate_id')
            ->where('a.is_recycle',2)
            //需要什么字段就从相应的表中提取出来
            ->field('a.arc_id,a.arc_title,a.arc_author,a.sendtime,a.arc_sort,c.cate_name')
            ->select();
        return $data;
    }
}
