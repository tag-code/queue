<?php
/**
 * @author tony (1349466771@qq.com)
 * Created by PhpStorm.
 * User: tfy
 * Date: 2018/8/7
 * Time: 16:08
 */
namespace tagCode\queue\interfaces;

interface Driver
{

    //public function exec();

    public function lPop();

    public function rPush();

    public function rPop();

    public function lPush();

    public function flush();

}