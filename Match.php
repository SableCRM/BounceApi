<?php

	namespace BounceApi;

	class Match implements IRequestData
	{
		private $searchInfo;

		public function __construct(SearchInfo $searchInfo)
		{
			$this->searchInfo = $searchInfo;
		}

		public function getXml()
		{
			return '
				<Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
    				<Body>
        				<Match xmlns="http://tempuri.org/">'
                            .$this->searchInfo->getXml().
        				'</Match>
    				</Body>
				</Envelope>';
		}
	}