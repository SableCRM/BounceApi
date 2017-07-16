<?php

	namespace BounceApi;

	class SearchInfo
	{
		protected $address1;

		protected $address2;

		protected $city;

		protected $state;

		protected $zip;

		protected $phone1;

		protected $phone2;

		protected $applicationName;

		protected $processName;

		protected $dealerNumber;

		protected $dealerName;

		protected $firstName;

		protected $lastName;

		protected $currentSiteId;

		public function __construct($address1 = null, $address2 = null, $city = null, $state = null, $zip = null, $phone1 = null, $phone2 = null, $applicationName = null, $processName = null, $dealerNumber = null, $dealerName = null, $firstName = null, $lastName = null, $currentSiteId = null)
		{
			$this->setAddress1($address1);
			$this->setAddress2($address2);
			$this->setCity($city);
			$this->setState($state);
			$this->setZip($zip);
			$this->setPhone1($phone1);
			$this->setPhone2($phone2);
			$this->setApplicationName($applicationName);
			$this->setProcessName($processName);
			$this->setDealerNumber($dealerNumber);
			$this->setDealerName($dealerName);
			$this->setFirstName($firstName);
			$this->setLastName($lastName);
			$this->setCurrentSiteId($currentSiteId);
		}

		protected function getAddress1()
		{
			return $this->address1;
		}

		protected function getAddress2()
		{
			return $this->address2;
		}

		protected function getCity()
		{
			return $this->city;
		}

		protected function getState()
		{
			return $this->state;
		}

		protected function getZip()
		{
			return $this->zip;
		}

		protected function getPhone1()
		{
			return $this->phone1;
		}

		protected function getPhone2()
		{
			return $this->phone2;
		}

		protected function getApplicationName()
		{
			return $this->applicationName;
		}

		protected function getProcessName()
		{
			return $this->processName;
		}

		protected function getDealerNumber()
		{
			return $this->dealerNumber;
		}

		protected function getDealerName()
		{
			return $this->dealerName;
		}

		protected function getFirstName()
		{
			return $this->firstName;
		}

		protected function getLastName()
		{
			return $this->lastName;
		}

		protected function getCurrentSiteId()
		{
			return $this->currentSiteId;
		}

		public function setSearchInfo(stdClass $searchInfo)
		{
			$this->searchInfo = $searchInfo;
		}

		public function setAddress1($address1)
		{
			$this->address1 = $address1;
		}

		public function setAddress2($address2)
		{
			$this->address2 = $address2;
		}

		public function setCity($city)
		{
			$this->city = $city;
		}

		public function setState($state)
		{
			$this->state = $state;
		}

		public function setZip($zip)
		{
			$this->zip = $zip;
		}

		public function setPhone1($phone1)
		{
			$this->phone1 = $phone1;
		}

		public function setPhone2($phone2)
		{
			$this->phone2 = $phone2;
		}

		public function setApplicationName($applicationName)
		{
			$this->applicationName = $applicationName;
		}

		public function setProcessName($processName)
		{
			$this->processName = $processName;
		}

		public function setDealerNumber($dealerNumber)
		{
			$this->dealerNumber = $dealerNumber;
		}

		public function setDealerName($dealerName)
		{
			$this->dealerName = $dealerName;
		}

		public function setFirstName($firstName)
		{
			$this->firstName = $firstName;
		}

		public function setLastName($lastName)
		{
			$this->lastName = $lastName;
		}

		public function setCurrentSiteId($currentSiteId)
		{
			$this->currentSiteId = $currentSiteId;
		}

		public function getSearchInfo()
		{
			return '
				<SearchInfo xmlns="http://monitronics.net/bouncer/wcf/2013/08">
                    <Address1>'.$this->getAddress1().'</Address1>
                    <Address2>'.$this->getAddress2().'</Address2>
                    <City>'.$this->getCity().'</City>
                    <State>'.$this->getState().'</State>
                    <Zip>'.$this->getZip().'</Zip>
                    <Phone1>'.$this->getPhone1().'</Phone1>
                    <Phone2>'.$this->getPhone2().'</Phone2>
                    <ApplicationName>'.$this->getApplicationName().'</ApplicationName>
                    <ProcessName>'.$this->getProcessName().'</ProcessName>
                    <DealerNumber>'.$this->getDealerNumber().'</DealerNumber>
                    <DealerName>'.$this->getDealerName().'</DealerName>
                    <FirstName>'.$this->getFirstName().'</FirstName>
                    <LastName>'.$this->getLastName().'</LastName>
                    <CurrentSiteID>'.$this->getCurrentSiteId().'</CurrentSiteID>
                </SearchInfo>';
		}
	}