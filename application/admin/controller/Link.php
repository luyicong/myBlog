<?php

namespace app\admin\controller;

use think\Controller;

class Link extends Controller
{
    protected $db;
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->db = new \app\common\model\Link();
    }
    //友情链接首页
    public function index(){
        $linkList = db('link')->paginate(5);
        $this->assign('links',$linkList);
        return $this->fetch();
    }
    //添加友链
    public function add(){
        if(request()->isPost()){

            $res = $this->db->add(input('post.'));

            if($res['valid']){
                //执行成功
                $this->success($res['msg'],'admin/Link/index');exit;
            }else{
                //执行失败
                $this->error($res['msg']);exit;
            }
        }
        return $this->fetch();
    }
    /**
     * 编辑友链
     */
    public function store(){
        //获取当前编辑的友链id
        $link_id = input('param.link_id');
        //查询数据
        $oldData = db('link')->where('link_id',$link_id)->find();
        //分配数据给模板
        $this->assign('linkData',$oldData);
        if(request()->isPost()){
            $res=$this->db->store($link_id,input('post.'));
            if($res['valid']){
                //修改成功
                $this->success($res['msg'],'index');exit;
            }else{
                //修改失败
                $this->error($res['msg']);exit;
            }
        }
        return $this->fetch();
    }
    /**
     * 友链的删除
     */
    public function del(){
        $link_id = input('get.link_id');
        if(\app\common\model\Link::destroy($link_id)){
            $this->success("删除成功！","index");exit;
        }else{
            $this->error("删除失败！");exit;
        }
    }
}