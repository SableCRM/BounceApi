<?php

	use BounceApi\BounceProcess;
	use BounceApi\Match;
	use BounceApi\Request;
	use BounceApi\SearchInfo;

	require_once "../bootstrap.php";

	header("Content-Type: text/json");

	$matchId = 5599403;

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

	$saveMatchComment = new \BounceApi\SaveMatchComment();
	$saveMatchComment->setComment("System is not functional, client wants to replace");
	$saveMatchComment->setMatchId($matchId);
	$saveMatchComment->setResponseId(1857973);

	$getMatchComments = new \BounceApi\GetMatchComments($matchId);

	$saveMatchResponse = new \BounceApi\SaveMatchResponse();
	$saveMatchResponse->setMatchId($matchId);
	$saveMatchResponse->setOutcome(1);
	$saveMatchResponse->setResponseSeqNo(1);

	$request->makeRequest($getMatchComments);
//	<SaveMatchResponseResult>1857973</SaveMatchResponseResult>

//	print_r($request->getHttpCode());

//	echo "\r\n";

	print_r($request->getResponse());