<?php

	use BounceApi\BounceProcess;
	use BounceApi\Match;
	use BounceApi\Request;
	use BounceApi\SearchInfo;

	require_once "vendor/autoload.php";

	$chris = new SearchInfo();

	$chris->setFirstName("Chris");
	$chris->setLastName("Soda");
	$chris->setAddress1("4404 Morning Song Dr");
	$chris->setAddress2("");
	$chris->setPhone1("");
	$chris->setPhone2("");
	$chris->setCity("Fort Worth");
	$chris->setState("TX");
	$chris->setZip("76244");
	$chris->setApplicationName("SableCRM+");
	$chris->setProcessName(new BounceProcess(BounceProcess::CreditCheck));
	$chris->setDealerNumber("813210002");
	$chris->setDealerName("GuardMe Security");

	$request = new Request();

	$request->makeRequest(new Match($chris));

	print_r($request->getHttpCode());

	echo "\r\n";

	print_r($request->getResponse());