<?php

	namespace BounceApi\response;

	class MatchResponse
	{
		public $matchId;
		public $matchCode;
		public $sourceSystemId;
		public $sourceSiteId;

		public function __construct($result)
		{
			if(xml_parse_into_struct(xml_parser_create(), $result, $vars))
			{
				foreach($vars as $var)
				{
					switch($var["tag"])
					{
						case "A:MATCHID":
							$this->matchId = $var["value"];
							break;

						case "A:MATCHCODE":
							$this->matchCode = $var["value"];
							break;

						case "A:SOURCESYSTEMID":
							$this->sourceSystemId = $var["value"];
							break;

						case "A:SOURCESITEID":
							$this->sourceSiteId = $var["value"];
							break;
					}
				}
			}
		}
	}