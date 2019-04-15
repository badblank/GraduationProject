<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/16 0016
 * Time: 2:11
 */

namespace App\HttpController\Api;


use EasySwoole\Http\AbstractInterface\Controller;

/**
 * Api模块下的基础类库
 * Class Base
 * @package App\HttpController\Api
 */
class Base extends Controller
{
    /**
     * 放一些请求的参数数据
     * @var array
     */
    public $params = [];
    public function index()
    {
        // TODO: Implement index() method.
    }
}