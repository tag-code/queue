<?php
/**
 * @author tony (1349466771@qq.com)
 * Created by PhpStorm.
 * User: tfy
 * Date: 2018/8/7
 * Time: 16:46
 */

$config = array(
    'interval' => 10 * 1000,
    'in' => 'left',
    'out' => 'right',
    'driver' => new \tagCode\queue\driver\Redis('127.0.0.1', 6379, 'auth')
);

$queue = new \tagCode\Queue($config);

$queue->event(function(\tagCode\queue\event\Event $event) {
    echo '123';

    //设置参数
    $event->setConf(array(
        'interval' => 10 * 1000,
        'in' => 'left',
        'out' => 'right'
    ));
    //上面和下面的都可以
    $event->timeInterval = 50 * 1000; //50秒 会覆盖全局延迟
    $event->inValue = 'left';
    $event->outValue = 'right';

    $event->exec();
});


$queue->event(function (\tagCode\queue\event\Event $event){
    echo 456;

    $event->exec();
});


$queue->start();