<?php

namespace globepay;

/**
 *
 * 接口调用结果类
 * @author Leijid
 *
 */
class GlobePayResults extends GlobePayDataBase
{

    /**
     *
     * 使用数组初始化
     * @param array $array
     */
    public function fromArray($array)
    {
        $this->bodyValues = json_decode($array, true);
    }

    /**
     * 将json转为array
     * @param string $json
     * @throws GlobePayException
     *
     * 返回信息:
     * return_code          return_msg
     * --------------------------------------
     * ORDER_NOT_EXIST      订单不存在
     * ORDER_MISMATCH       订单号与商户不匹配
     * SYSTEMERROR          系统内部异常
     * INVALID_SHORT_ID     商户编码不合法或没有对应商户
     * SIGN_TIMEOUT         签名超时，time字段与服务器时间相差超过5分钟
     * INVALID_SIGN         签名错误
     * PARAM_INVALID        参数不符合要求，具体细节可参考return_msg字段
     * NOT_PERMITTED        未开通网关支付权限
     * --------------------------------------
     */
    public static function prepare($array)
    {
        $obj = new self();
        $obj->fromArray($array);
        return $obj->getBodyValues();
    }
}


?>