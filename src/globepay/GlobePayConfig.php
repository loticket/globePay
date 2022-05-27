<?php

namespace globepay;

/**
 * 配置账号信息
 */
class GlobePayConfig
{
    public static $PARTNER_CODE = "";
    public static $CREDENTIAL_CODE = "";
    public static $CURL_PROXY_HOST = "0.0.0.0";
    public static $CURL_PROXY_PORT = "0";

    public static function Init($partner, $key)
    {
        self::$PARTNER_CODE = $partner;
        self::$CREDENTIAL_CODE = $key;
    }
}

?>