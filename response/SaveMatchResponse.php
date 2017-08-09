<?php

	namespace BounceApi\response;

	class SaveMatchResponse
	{
		public $responseId;

		public function __construct($result)
		{
			if(xml_parse_into_struct(xml_parser_create(), $result, $vars))
			{
				foreach($vars as $var)
				{
					switch($var["tag"])
					{
						case "SAVEMATCHRESPONSERESULT":
							$this->responseId = $var["value"];
							break;
					}
				}
			}
		}
	}