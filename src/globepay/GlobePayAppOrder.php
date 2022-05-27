<?php

namespace globepay;
/**
 *
 * 数据对象基础类，该类中定义数据类最基本的行为，包括：
 * 计算/设置/获取签名、输出json格式的参数、从json读取数据对象等
 * @author Leijid
 *
 */
class GlobePayAppOrder extends GlobePayUnifiedOrder
{
    /**
     * 设置支付渠道
     * @param string $value
     **/
    public function setChannel($value)
    {
        $this->bodyValues['channel'] = $value;
    }

    /**
     * 获取支付渠道
     * @return 值
     **/
    public function getChannel()
    {
        return $this->bodyValues['channel'];
    }

    /**
     * 判断支付渠道是否存在
     * @return true 或 false
     **/
    public function isChannelSet()
    {
        return array_key_exists('channel', $this->bodyValues);
    }


    /**
     * 微信appid
     * @param string $value
     **/
    public function setAppid($value)
    {
        $this->bodyValues['appid'] = $value;
    }

    /**
     * 微信appid
     * @return 值
     **/
    public function getAppid()
    {
        return $this->bodyValues['appid'];
    }

    /**
     * 微信appid
     * @return true 或 false
     **/
    public function isAppidSet()
    {
        return array_key_exists('appid', $this->bodyValues);
    }

}


?>