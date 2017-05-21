<?php

namespace app\admin\controller;

use think\Controller;

class Category extends Controller
{
    //实例化模型
    protected $db;
    protected function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->db = new \app\common\model\Category();
    }
    //栏目列表
    public function index()
    {
        //获取栏目数据
//        $data = db('cate')->select();
        $data = $this->db->getAllCate();
//        halt($data);
        //分配数据给前台模板
        $this->assign('cateList',$data);
        return $this->fetch();
    }
    //添加栏目
    public function store()
    {
        if(request()->isPost()){

            $res = $this->db->store(input('post.'));

            if($res['valid']){
                //添加成功
                $this->success($res['msg'],'admin/Category/index');exit;
            }else{
                //添加失败
                $this->error($res['msg']);exit;
            }
        }
        return $this->fetch();
    }

    //添加子栏目
    public function addSon()
    {
        if(request()->isPost()){
            $res = $this->db->store(input('post.'));

            if($res['valid']){
                //添加成功
                $this->success($res['msg'],'admin/Category/index');exit;
            }else{
                //添加失败
                $this->error($res['msg']);exit;
            }
        }
        //获取地址栏的cate_id
        $cate_id = input('param.cate_id');
        //查询数据库当前id的值
        $data = db('cate')->where('cate_id',$cate_id)->find();
        //分配数据给模板
        $this->assign('data',$data);
        return $this->fetch();
    }
    //编辑栏目
    public function edit()
    {
        //获取地址栏的cate_id
        $cate_id = input('param.cate_id');
        //接收post请求
        if(request()->isPost()){
            $res = $this->db->edit($cate_id,input('post.'));
            if($res['valid']){
                $this->success($res['msg'],'admin/Category/index');
            }else{
                $this->error($res['msg']);
            }
        }
        //查询数据库当前id的值
        $oldData = db('cate')->where('cate_id',$cate_id)->find();
        //分配数据给模板
        $this->assign('oldData',$oldData);
        //处理所属栏目不能包含自己和自己的子栏目数据
        $cateData = $this->db->getCateData($cate_id);

        $this->assign('cateData',$cateData);

        return $this->fetch();
    }
    //删除栏目
    public function del(){
//        halt(input('get.cate_id'));
        $res = $this->db->del(input('get.cate_id'));
        if($res){
            $this->success($res['msg'],'index');exit;
        }else{
            $this->error($res['msg']);exit;
        }
    }
}
