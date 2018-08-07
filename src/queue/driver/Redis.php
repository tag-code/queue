<?php
/**
 * @author tony (1349466771@qq.com)
 * Created by PhpStorm.
 * User: tfy
 * Date: 2018/8/7
 * Time: 17:10
 */
namespace tagCode\queue\driver;


class Redis implements \tagCode\queue\interfaces\Driver
{

    private $redis = null;

    private $dbIndex;

    public function __construct($host, $port, $auth = '', $pconnect = false, $dbIndex = 0)
    {
        if($this->redis) {
            //这里应该要检查一下 连接是否正常
            return $this;
        }

        $this->redis = new \Redis();
        if($pconnect) {
            $this->redis->pconnect($host, $port);
        } else {
            $this->redis->connect($host, $port);
        }
        if(! empty($auth)) {
            $this->redis->auth($auth);
        }
        $this->dbIndex = $dbIndex;
        $this->redis->select($dbIndex);

        return $this;
    }

    public function flush()
    {
        return $this->redis->flushDB();
    }

    public function lPop()
    {
        // TODO: Implement lPop() method.
        return $this->redis->lPop();
    }

    public function lPush()
    {
        // TODO: Implement lPush() method.
    }

    public function rPop()
    {
        // TODO: Implement rPop() method.
    }

    public function rPush()
    {
        // TODO: Implement rPush() method.
    }

}