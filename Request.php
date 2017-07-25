<?php

	namespace BounceApi;

	class Request
	{
		private $httpCode;

		private $response;

		private const url = "https://ws.monitronics.net/BounceServiceR2/wwwBouncer.svc";

		private const testUrl = "https://wstest.monitronics.net/BounceServiceR2/wwwBouncer.svc";

		public function makeRequest(IRequestData $xml)
		{
			$ch = curl_init(self::url);
//
			curl_setopt($ch, CURLOPT_FAILONERROR, 1);
//
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//
//			curl_setopt($ch, CURLOPT_VERBOSE, 1);
//
//			curl_setopt($ch, CURLOPT_HEADER, 1);
//
			curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: text/xml"]);

			curl_setopt($ch, CURLOPT_POST, 1);

			curl_setopt($ch, CURLOPT_POSTFIELDS, $xml->getXml());

//			curl_setopt($ch, CURLOPT_TIMEOUT, 4);

//			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

			curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_0);

//			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $header);

			$this->response = curl_exec($ch);

			if($this->response == 0)
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