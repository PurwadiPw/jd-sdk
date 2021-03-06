<?php
namespace Pw\JdSdk\Request;

class EpistockQueryEpiMerchantWareStockRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.epistock.queryEpiMerchantWareStock";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
    private $wareStockQueryListStr;

    public function setWareStockQueryListStr($wareStockQueryListStr)
    {
        $this->wareStockQueryListStr = $wareStockQueryListStr;
        $this->apiParas["wareStockQueryListStr"] = $wareStockQueryListStr;
    }

    public function getWareStockQueryListStr()
    {
        return $this->wareStockQueryListStr;
    }

}
