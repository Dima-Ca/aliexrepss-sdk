<?php
/**
 * TOP API: aliexpress.trade.ordermanage.orderdetailinfo request
 * 
 * @author auto create
 * @since 1.0, 2018.09.30
 */
class AliexpressTradeOrdermanageOrderdetailinfoRequest
{
	/** 
	 * 请求参数
	 **/
	private $paramTpOpenSingleOrderQuery;
	
	private $apiParas = array();
	
	public function setParamTpOpenSingleOrderQuery($paramTpOpenSingleOrderQuery)
	{
		$this->paramTpOpenSingleOrderQuery = $paramTpOpenSingleOrderQuery;
		$this->apiParas["param_tp_open_single_order_query"] = $paramTpOpenSingleOrderQuery;
	}

	public function getParamTpOpenSingleOrderQuery()
	{
		return $this->paramTpOpenSingleOrderQuery;
	}

	public function getApiMethodName()
	{
		return "aliexpress.trade.ordermanage.orderdetailinfo";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
