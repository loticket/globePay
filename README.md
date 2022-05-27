# globepay支付 暂时只支持APP支付 支付宝和微信


#调用示例 - 发起支付
```PHP
 GlobePayConfig::Init("PINE", "xOjMTaG0Tk7fqNYjsNqDKXtJvE9MFCqC");
        $input = new GlobePayAppOrder();
        $orderId = date("YmdHis");
        echo $orderId;
        $input->setOrderId($orderId);
        $input->setDescription("test");
        $input->setPrice("1");
        $input->setCurrency("GBP");
        $input->setNotifyUrl("http://b2cplusduokai.cn/platform/shop/lists");
        $input->setOperator("123456");
        $input->setChannel("Alipay");
        $result = GlobePay::appApiOrder($input);
        print_r($result);
```
#调用示例 - 查询订单
```PHP
        $orderId = "202205270955091";
        GlobePayConfig::Init("PINE", "xOjMTaG0Tk7fqNYjsNqDKXtJvE9MFCqC");
        $input = new GlobePayOrderQuery();
        $input->setOrderId($orderId);
        $result = GlobePay::orderQuery($input);
        print_r($result);
```

#调用示例 - 订单退款
```PHP
       $orderId = "202205270955091";
        GlobePayConfig::Init("PINE", "xOjMTaG0Tk7fqNYjsNqDKXtJvE9MFCqC");
        $input = new GlobePayApplyRefund();
        $input->setOrderId($orderId);
        $refundId = date("YmdHis");
        $input->setRefundId($refundId);
        $input->setFee(1);
        $result = GlobePay::orderRefund($input);
        print_r($result);
```
