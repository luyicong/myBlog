<?php

namespace app\common\model;

use think\Model;

class Article extends Model
{
    protected $pk = 'arc_id';
    protected $table = 'blog_article';
    //tp5的自动完成机制
    protected $auto = ['admin_id'];
    protected $insert = ['sendtime'];
    protected $update = ['updatetime'];

    protected function setAdminIdAttr($value)
    {
        return session('admin.admin_id');
    }
    protected function setSendTimeAttr($value)
    {
        return time();
    }
    protected function setUpdateTimeAttr($value)
    {
        return time();
    }

    //获取文章列表
    public function getAll(){
        //数据表关联，把文章表跟分类表关联，提出所属分类
        $data = db('article')
            ->alias('a')
            ->join('__CATE__ c','a.cate_id = c.cate_id')
            ->where('a.is_recycle',2)
            //需要什么字段就从相应的表中提取出来,并分页
            ->field('a.arc_id,a.arc_title,a.arc_author,a.sendtime,a.arc_sort,c.cate_name')
            //首先按照文章的排序进行渲染 其次按照发布时间渲染，最后再根据文章id进行渲染
            ->order('a.arc_sort desc,a.sendtime desc,a.arc_id desc')->paginate(5);
        return $data;
    }
    //添加文章
    public function  store($data){
        //判断是否勾选标签
        if(!isset($data['tag'])){
            return ['valid'=>0,'msg'=>'请勾选文章所属标签！'];
        }
        //1.执行验证 allowField(true)过滤非数据表字段
        $result = $this->validate(true)->allowField(true)->save($data);
        //2.添加数据
        if($result){
            //文章所属标签中间表数据添加
            foreach ($data['tag'] as $v){
                $arcTagData = [
                    'arc_id'=>$this->arc_id,
                    'tag_id'=>$v
                ];
                (new ArcTag())->save( $arcTagData);
            }
            //执行成功
            return ['valid'=>1,'msg'=>'添加成功！'];
        }else{
            //执行失败
            return ['valid'=>0,'msg'=>$this->getError()];
        }
    }
    /**
     * 更新排序
     */
    public function upSort($data){
        $result = $this->validate(
            ['arc_sort'=>'require|between:1,9999'],
            ['arc_sort.require'=>'请输入排序！','arc_sort.between'=>'排序必须在1-9999之间！']
        )->save($data,[$this->pk=>$data['arc_id']]);
        if($result){
            //修改成功
            return ['valid'=>1,'msg'=>'修改排序成功！'];
        }else{
            //修改失败
            return ['valid'=>0,'msg'=>$this->getError()];
        }
    }
}
