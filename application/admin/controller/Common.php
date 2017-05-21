<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
        //登录验证
        //$_SESSION['admin']['admin_id'] = session('admin.admin_id')
        if(!session('admin.admin_id'))
        {
            $this->redirect('admin/Login/index');
        }
    }
}
