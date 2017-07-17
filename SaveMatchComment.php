<?php

	namespace BounceApi;

	class SaveMatchComment
	{
		private $matchId;

		private $comment;

		private $responseId;

		public function __construct($matchId = null, $comment = null, $responseId = null)
		{
			$this->setMatchId($matchId);
			$this->setComment($comment);
			$this->setResponseId($responseId);
		}

		public function getMatchId()
		{
			return $this->matchId;
		}

		public function setMatchId($matchId)
		{
			$this->matchId = $matchId;
		}

		public function getComment()
		{
			return $this->comment;
		}

		public function setComment($comment)
		{
			$this->comment = $comment;
		}

		public function getResponseId()
		{
			return $this->responseId;
		}

		public function setResponseId($responseId)
		{
			$this->responseId = $responseId;
		}

		public function getXml()
		{
			return '
				<Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
    				<Body>
        				<SaveMatchComment xmlns="http://tempuri.org/">
            				<comment>
                				<MatchID xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getMatchId().'</MatchID>
                				<Comment xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getComment().'</Comment>
                				<ResponseID xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getResponseId().'</ResponseID>
            				</comment>
        				</SaveMatchComment>
    				</Body>
				</Envelope>';
		}
	}