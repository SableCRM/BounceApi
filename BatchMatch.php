<?php

	namespace BounceApi;

	class BatchMatch extends AbstractRequestObject
	{
		private $searchInfos;

		public function __construct(ArrayOfSearchInfo $searchInfos)
		{
			$this->name = "BatchMatch";
			$this->searchInfos = $searchInfos;
		}

		public function getXml()
		{
			return '
				<Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
    				<Body>
        				<BatchMatch xmlns="http://tempuri.org/">
            				<batchInfo>'
								.$this->setSearchInfos().
            				'</batchInfo>
        				</BatchMatch>
    				</Body>
				</Envelope>';
		}

		private function setSearchInfos()
		{
			$xml = "";

			foreach($this->searchInfos as $searchInfo)
			{
				$xml = $this->getAsSearchInfo($searchInfo)->getXml();
			}

			return $xml;
		}

		private function getAsSearchInfo(SearchInfo $searchInfo)
		{
			return $searchInfo;
		}

		public function setResult($result)
		{
			return $result;
		}
	}