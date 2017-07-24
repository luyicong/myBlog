<?php

namespace app\common\model;

use think\Loader;
use think\Model;

class Link extends Model
{
    protected $pk = 'link_id';//主键
    protected $table = 'blog_link';//生成操作的数据表

    /**
     * 添加友链
     */
    public function add($data){
        //1.执行验证
        $validate = Loader::validate('Link');
        if(!$validate->check($data)){
            return ['valid'=>'0','msg'=>$validate->getError()];
        }
        //添加数据
        $res = $this->save($data);

        if($res){
            return ['valid'=>1,'msg'=>'添加成功！'];
        }else{
            return ['valid'=>0,'msg'=>'添加失败！'];
        }
    }
    /**
     * 编辑友链
     */
    public function store($link_id,$data){
        //1.执行验证
        $validate = Loader::validate('Link');
        if(!$validate->check($data)){
            return ['valid'=>'0','msg'=>$validate->getError()];
        }
        //2.更新数据
        $res=$this->where('link_id',$link_id)->update($data);
        if($res){
            return ['valid'=>1,'msg'=>'修改成功！'];
        }else{
            return ['valid'=>0,'msg'=>'修改失败！'];
        }
    }
}
