<?php
/**
 * @author tony (1349466771@qq.com)
 * Created by PhpStorm.
 * User: tfy
 * Date: 2018/8/7
 * Time: 16:03
 */
namespace tagCode;


class Queue
{

    public function __construct(array $config)
    {

    }

    public function start()
    {

    }

    public function stop()
    {

    }

    public function event($callable)
    {
        $event = new \tagCode\queue\event\Event();
        return $callable($event);
    }

    public function setConf(array $config)
    {

    }
}