<?php
/**
 * Created by PhpStorm.
 * User: zhangjincheng
 * Date: 16-7-15
 * Time: 下午4:49
 */
$config['mysql']['enable'] = true;
$config['mysql']['active'] = 'sd';
$config['mysql']['test']['host'] = '127.0.0.1';
$config['mysql']['test']['port'] = '3306';
$config['mysql']['test']['user'] = 'root';
$config['mysql']['test']['password'] = '123456';
$config['mysql']['test']['database'] = 'test';
$config['mysql']['test']['charset'] = 'utf8';

$config['mysql']['sd']['host'] = 'rm-2zei17qa1cua4f3jco.mysql.rds.aliyuncs.com';
$config['mysql']['sd']['port'] = '3306';
$config['mysql']['sd']['user'] = 'work';
$config['mysql']['sd']['password'] = 'work@147852';
$config['mysql']['sd']['database'] = 'sd';
$config['mysql']['sd']['charset'] = 'utf8';

$config['mysql']['bus']['host'] = '127.0.0.1';
$config['mysql']['bus']['port'] = '3306';
$config['mysql']['bus']['user'] = 'root';
$config['mysql']['bus']['password'] = '123456';
$config['mysql']['bus']['database'] = 'bus';
$config['mysql']['bus']['charset'] = 'utf8';

$config['mysql']['asyn_max_count'] = 10;

return $config;