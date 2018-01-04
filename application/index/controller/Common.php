<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
        //1.读取网站配置
        $webSet = $this->loadWebSet();
        $this->assign('_webSet',$webSet);
        //2.读取栏目数据
        $cateData = $this->loadCateData();
        $this->assign('_cateData',$cateData);
        //3.获取分类标签
        $allCateData = $this->loadAllCateData();
        $this->assign('_allCateData',$allCateData);
        //4.获取标签数据
        $tagData = $this->loadTagData();
        $this->assign('_tagData',$tagData);
        //5.获取友情链接
        $linkData = $this->loadLinkData();
        $this->assign('_linkData',$linkData);
        //6.获取最新文章
        $newArticleData = $this->loadNewArticleData();
        $this->assign('_newArticleData',$newArticleData);
    }
    //获取最新文章数据
    protected function loadNewArticleData(){
        return db('article')->where('is_recycle',2)->order('sendtime desc')->limit(5)->field('arc_id,arc_title,sendtime')->select();
    }
    //获取友情链接数据
    protected function loadLinkData(){
        return db('link')->order('link_sort desc')->select();
    }
    //获取标签数据
    protected function loadTagData(){
        return db('tag')->select();
    }
    //获取所有分类标签
    protected function loadAllCateData(){
        return db('cate')->order('cate_sort desc')->select();
    }
    //获取网站配置
    protected function loadWebSet(){
        return db('webset')->column('webset_value','webset_name');
    }
    //获取顶级分类数据
    protected function loadCateData(){
        return db('cate')->where('cate_pid',0)->order('cate_sort desc')->limit(5)->select();
    }
}
