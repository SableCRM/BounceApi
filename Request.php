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
			$ch = curl_init(self::testUrl);

			curl_setopt($ch, CURLOPT_FAILONERROR, true);

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			curl_setopt($ch, CURLOPT_HTTPHEADER, [
				"Content-Type: text/xml",
				"SOAPAction: http://tempuri.org/IBouncer/".$xml->getName()
				]
			);

			curl_setopt($ch, CURLOPT_POST, true);

			curl_setopt($ch, CURLOPT_POSTFIELDS, $xml->getXml());

			curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_0);

			$this->response = $xml->setResult(curl_exec($ch));

			if($errorText = curl_error($ch))
			{
				return $errorText;
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