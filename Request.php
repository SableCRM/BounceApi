<?php

	namespace BounceApi;

	class Request
	{
		private $httpCode;

		private $response;

		private const url = "https://ws.monitronics.net/BounceServiceR2/wwwBouncer.svc";

		private const testUrl = "https://wstest.monitronics.net/BounceServiceR2/wwwBouncer.svc";

		public function makeRequest(Match $xml)
		{
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, self::testUrl);

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//			curl_setopt($ch, CURLOPT_USERPWD, "$applicationId:$password");

			curl_setopt($ch, CURLOPT_POST, 1);

			curl_setopt($ch, CURLOPT_USERAGENT, "Moni Bounce API");

			curl_setopt($ch, CURLOPT_FAILONERROR, true);

			//$post_array = [];

			curl_setopt($ch, CURLOPT_POSTFIELDS, [$xml->getXml()]);

			$this->response = curl_exec($ch);

			if($this->response == false)
			{
				$errorText = curl_error($ch);

				curl_close($ch);

				die($errorText);
			}

			$this->httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

			curl_close($ch);
		}

		public function getHttpCode()
		{
			return $this->httpCode;
		}

		public function getResponse()
		{
			return $this->response;
		}
	}