<?php

	namespace BounceApi;

	class SaveMatchComment extends AbstractRequestObject
	{
		private $matchId;
		private $comment;
		private $responseId;

		public function __construct($matchId, $responseId, $comment)
		{
			$this->name = "SaveMatchComment";
			$this->setMatchId($matchId);
			$this->setResponseId($responseId);
			$this->setComment($comment);
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
			if(strlen($comment) > 200)
			{
				throw new \Exception("Comment cannot exceed 200 characters");
			}

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

		public function setResult($result)
		{
			return $result;
		}
	}