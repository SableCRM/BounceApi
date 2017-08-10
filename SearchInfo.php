<?php

	namespace BounceApi;

	use BounceApi\interfaces\IDataCollection;
	use BounceApi\interfaces\IRequestData;
	use Exception;

	class SearchInfo implements IRequestData
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

		protected $currentSiteId = 0;

		public function __construct(IDataCollection $data = null)
		{
			if(!$data)
			{
				return;
			}

			foreach($data->getData() as $key => $value)
			{
				function_exists($this->{"set".ucfirst($key)}($value));
			}
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
			if(!$this->processName)
			{
				throw new Exception("Process Name cannot be null.");
			}

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

		public function getXml()
		{
			return '
				<searchInfo>
                	<Address1 xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getAddress1().'</Address1>
                	<Address2 xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getAddress2().'</Address2>
                	<City xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getCity().'</City>
                    <State xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getState().'</State>
                    <Zip xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getZip().'</Zip>
                    <Phone1 xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getPhone1().'</Phone1>
                    <Phone2 xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getPhone2().'</Phone2>
                    <ApplicationName xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getApplicationName().'</ApplicationName>
                    <ProcessName xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getProcessName().'</ProcessName>
                    <DealerNumber xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getDealerNumber().'</DealerNumber>
                    <DealerName xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getDealerName().'</DealerName>
                    <FirstName xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getFirstName().'</FirstName>
                    <LastName xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getLastName().'</LastName>
                    <CurrentSiteID xmlns="http://monitronics.net/bouncer/wcf/2013/08">'.$this->getCurrentSiteId().'</CurrentSiteID>
            	</searchInfo>';
		}
	}