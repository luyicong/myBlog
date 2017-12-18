<?php
return array(
	//'配置项'=>'配置值'
    /* 模板路径简化 */
    'TMPL_FILE_DEPR'        =>  '_',
    /* 大小写URL */
    'URL_CASE_INSENSITIVE'  =>	false,
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',
    'DB_HOST'               =>  'localhost',
    'DB_NAME'               =>  'blog',
    'DB_USER'               =>  'root',
    'DB_PWD'                =>  'root',
    'DB_PORT'               =>  '3306',
    'DB_PREFIX'             =>  'blog_',
    /* 模块列表 */
    'MODULE_ALLOW_LIST'     =>  array ('Home','Admin'),
    /* 默认模块 */
    'DEFAULT_MODULE'        => 'Home',

    'SHOW_PAGE_TRACE'=>true,
);