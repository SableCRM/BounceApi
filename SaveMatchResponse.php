<?php

	namespace BounceApi;

	class SaveMatchResponse extends AbstractRequestObject
	{
		private $matchId;
		private $responseSeqNo = 0;
		private $outcome = 0;

		public function __construct($matchId)
		{
			$this->name = "SaveMatchResponse";
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

		public function getResponseSeqNo()
		{
			return $this->responseSeqNo;
		}

		public function setResponseSeqNo($responseSeqNo)
		{
			$this->responseSeqNo = $responseSeqNo;
		}

		public function getOutcome()
		{
			return $this->outcome;
		}

		public function setOutcome($outcome)
		{
			$this->outcome = $outcome;
		}

		public function getXml()
		{
			return '
				<Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
    				<Body>
        				<SaveMatchResponse xmlns="http://tempuri.org/">
            				<matchResponse>
                				<MatchID xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getMatchId().'</MatchID>
                				<ResponseSeqNo xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getResponseSeqNo().'</ResponseSeqNo>
                				<Outcome xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getOutcome().'</Outcome>
            				</matchResponse>
        				</SaveMatchResponse>
    				</Body>
				</Envelope>';
		}

		public function setResult($result)
		{
			return $result;
		}
	}