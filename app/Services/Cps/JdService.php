<?php

namespace App\Services\Cps;

use JdClient;

/**
 * 京东服务
 */
class JdService
{
    private static $instance;
    private $client;

    private function __construct()
    {
        $client = new JdClient();
        $client->appKey = config('jd.app_key');
        $client->appSecret = config('jd.secret_key');
        $this->client = $client;
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * 网站/APP来获取的推广链接
     * https://union.jd.com/openplatform/api/v2?apiName=jd.union.open.promotion.common.get
     * @param array $params
     * @return mixed|null
     */
    public function promotionCommonGet(array $params)
    {
        $client = $this->client;
        $request = new \UnionOpenPromotionCommonGetRequest();
        $request->setPromotionCodeReq($params);
        $response = $client->execute($request);
        $url = null;
        if (isset($response->jd_union_open_promotion_common_get_responce->getResult)) {
            $result = json_decode($response->jd_union_open_promotion_common_get_responce->getResult, true);
            if ($result['code'] == 200) {
                $url = $result['data']['clickURL'];
            }
        }
        return $url;
    }

    /**
     * 获取京东商品订单列表
     * https://union.jd.com/openplatform/api/v2?apiName=jd.union.open.order.row.query
     * @param array $params
     * @return array|mixed
     */
    public function getOrderList(array $params)
    {
        $client = $this->client;
        $request = new \UnionOpenOrderRowQueryRequest();
        $request->setOrderReq($params);
        $response = $client->execute($request);
        $data = [];
        if (isset($response->jd_union_open_order_row_query_responce)) {
            $result = json_decode($response->jd_union_open_order_row_query_responce->queryResult, true);
            if ($result['code'] == 200) {
                $data = [
                    'orders' => $result['data'] ?? [],
                    'has_next' => $result['hasMore'] ?? false
                ];
            }
        }
        return $data;
    }

    /**
     * 获取商品信息
     * https://union.jd.com/openplatform/api/v2?apiName=jd.union.open.goods.bigfield.query
     * @param $itemId
     * @return void
     */
    public function getGoodsInfo($itemId)
    {
        $params = [
            'itemIds' => [$itemId],
            'sceneId' => 1
        ];

        $client = $this->client;
        $request = new \UnionOpenGoodsBigfieldQueryRequest();
        $request->setGoodsReq($params);
        $resp = $client->execute($request);
        $data = [];
        if (isset($resp->jd_union_open_goods_bigfield_query_responce)) {
            $res = json_decode($resp->jd_union_open_goods_bigfield_query_responce->queryResult, true);
            if ($res['code'] == 200) {
                $data = $res['data'][0];
            }
        }

        return $data;
    }
}
