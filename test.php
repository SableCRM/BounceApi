<?php

	use BounceApi\BounceProcess;
	use BounceApi\Request;
	use BounceApi\SearchInfo;

	require_once "../bootstrap.php";

	header("Content-Type: text/xml");

	$matchId = 5599405;
	$responseId = 1857974;

	$chris = new SearchInfo();

	$chris->setFirstName("Chris");
	$chris->setLastName("Soda");
	$chris->setAddress1("4404 Morning Song Dr");
	$chris->setCity("Fort Worth");
	$chris->setState("TX");
	$chris->setZip("76244");
	$chris->setApplicationName("SableCRM+");
	$chris->setProcessName(new BounceProcess(BounceProcess::CreditCheck));
	$chris->setDealerNumber("813210002");
	$chris->setDealerName("GuardMe Security");

	$request = new Request();

	$comment ="new match comment from sable";
	$saveMatchComment = new \BounceApi\SaveMatchComment($matchId, $responseId, $comment);
	$saveMatchComment->setResponseId($responseId);

	$getMatchComments = new \BounceApi\GetMatchComments($matchId);

	$saveMatchResponse = new \BounceApi\SaveMatchResponse($matchId);

	$request->makeRequest($getMatchComments);

//	<SaveMatchResponseResult>1857973</SaveMatchResponseResult>

//	print_r($request->getHttpCode());

//	echo "\r\n";

	print_r($request->getResponse());