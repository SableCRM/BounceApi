<?php

	use BounceApi\BounceProcess;
	use BounceApi\DataToObject\DataObject;
	use BounceApi\Match;
	use BounceApi\Request;
	use BounceApi\SearchInfo;

	require_once "../bootstrap.php";

	$searchInfoArray = [
		"firstName" => "Chris",
		"lastName" => "Soda",
		"address1" => "4404 Morning Song Dr",
		"city" => "Fort Worth",
		"state" => "TX",
		"zip" => "76244",
		"applicationName" => "SableCrm+",
		"dealerNumber" => "813210002",
		"dealerName" => "GuardMe Security",
		"processName" => BounceProcess::CreditCheck,
	];

	$searchInfoJson = '{"firstName":"Chris","lastName":"Soda","address1":"4404 Morning Song Dr","city":"Fort Worth","state":"TX","zip":"76244","applicationName":"SableCrm+","dealerNumber":"813210002","dealerName":"GuardMe Security","processName":"CreditCheck"}';

	$chris = new SearchInfo(new DataObject($searchInfoJson));

	$request = new Request();

	$request->makeRequest(new Match($chris));

	print_r($request->getResponse());