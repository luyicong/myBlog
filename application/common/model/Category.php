<?php

namespace app\common\model;

use houdunwang\arr\Arr;
use think\Loader;
use think\Model;

class Category extends Model
{
    protected $pk="cate_id";
    protected $table="blog_cate";
    //获取所有栏目
    public function getAllCate()
    {
        //生成树状的分类数组(参考hdphp3.0的数组增强)
        return Arr::tree(db('cate')->select(), 'cate_name', $fieldPri = 'cate_id', $fieldPid = 'cate_pid');
    }
    //添加栏目
    public function store($data)
    {
        //1.验证
        $validate = Loader::validate('Category');
        if(!$validate->check($data)){
            return ['valid'=>'0','msg'=>$validate->getError()];
        }
        //2.执行添加操作
        $res =$this->insert($data);
        if($res){
            return ['valid'=>'1','msg'=>'添加成功'];
        }else{
            return ['valid'=>'0','msg'=>'添加失败，请稍后重试'];
        }
    }

    //处理所属栏目关系
    public function getCateData($cate_id)
    {
        //1.找到当前的子栏目数据
        $cate_ids= $this->getSon(db('cate')->select(),$cate_id);
        //2.将自己追加进去
        $cate_ids[] = $cate_id;
        //3.找出除了这些之外的数据,whereNotIn--条件不在范围内,select()查询多条数据，find()单调数据
        //$field = db('cate')->whereNotIn('cate_id',$cate_ids)->select();
        //生成树结构返回出去
        return Arr::tree(db('cate')->whereNotIn('cate_id',$cate_ids)->select() , 'cate_name', $fieldPri ='cate_id', $fieldPid='cate_pid');
    }
    //找当前cate_id的子栏目
    public function getSon($data,$cate_id)
    {
        //声明静态空数组
        static $temp = [];
        //遍历找出自己的子栏目数据
        foreach ($data as $k=>$v){
            if($cate_id == $v['cate_pid']){
                $temp[] = $v['cate_id'];
                //递归自己，把自己的子栏目找出来
                $this->getSon($data,$v['cate_id']);
            }
        }
        return $temp;
    }
    //编辑栏目
    public function edit($cate_id,$data)
    {
        //dump($cate_id);
        //halt($data);
        //1.执行验证
        $validate = Loader::validate('Category');
        if(!$validate->check($data)){
            return ['valid'=>'0','msg'=>$validate->getError()];
        }
        //执行修改
        $res = $this->where('cate_id',$cate_id)->update($data);
        //halt($res);
        if($res){
            return ['valid'=>'1','msg'=>'修改栏目成功！'];
        }else{
            return ['valid'=>'0','msg'=>'修改栏目失败！'];
        }
    }
    //删除栏目
    public function del($cate_id)
    {
        //1.找到当前要删除栏目的父级栏目id,value(key)--查询某一条数据的某一个值
        $cate_pid = $this->where('cate_id',$cate_id)->value('cate_pid');
        //2.找到当前要删除的栏目的所有子栏目，把他们往上提高一级
        $this->where('cate_pid',$cate_id)->update(['cate_pid'=>$cate_pid]);
        //3.当前栏目删除
        if(Category::destroy($cate_id))
        {
            return ['valid'=>'1','msg'=>'删除栏目成功'];
        }else{
            return ['valid'=>'0','msg'=>'删除栏目失败'];
        }
    }
}
