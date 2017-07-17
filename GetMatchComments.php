<?php

	namespace BounceApi;

	class GetMatchComments
	{
		private $matchId;

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
	}