<?php

	namespace BounceApi;

	class GetMatchComments implements IRequestData
	{
		private $matchId;
		private const name = "GetMatchComments";

		public function __construct($matchId)
		{
			$this->setMatchId($matchId);
		}

		public function getMatchId()
		{
			return $this->matchId;
		}

		public function setMatchId($matchId)
		{
			$this->matchId = $matchId;
		}

		public function getXml()
		{
			return '
				<Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
    				<Body>
        				<GetMatchComments xmlns="http://tempuri.org/">
            				<MatchID>'.$this->getMatchId().'</MatchID>
        				</GetMatchComments>
    				</Body>
				</Envelope>';
		}

		public function setResult($result)
		{
			return $result;
		}

		public function getName()
		{
			return self::name;
		}
	}