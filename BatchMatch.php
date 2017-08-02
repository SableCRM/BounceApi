<?php

	namespace BounceApi;

	class BatchMatch extends AbstractRequestData
	{
		private $searchInfo;
		private const name = "BatchMatch";

		public function __construct(SearchInfo $searchInfo)
		{
			$this->searchInfo = $searchInfo;
		}

		public function getXml()
		{
			return '
				<Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
    				<Body>
        				<BatchMatch xmlns="http://tempuri.org/">
            				<batchInfo>'
								.$this->searchInfo->getXml().
            				'</batchInfo>
        				</BatchMatch>
    				</Body>
				</Envelope>';
		}

		public function setResult($result)
		{
			return $result;
		}
	}