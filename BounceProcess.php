<?php

	namespace BounceApi;

	use function implode;
	use function in_array;
	use InvalidArgumentException;

	class BounceProcess
	{
		private $activeProcess;

		const Funding = "Funding";

		const CreditCheck = "CreditCheck";

		const WelcomeCall = "WelcomeCall";

		const SubmitFunding = "SubmitFunding";

		const AccountCreation = "AccountCreation";

		public $validProcesses = [self::CreditCheck, self::AccountCreation, self::SubmitFunding, self::Funding, self::WelcomeCall];

		public function __construct($process)
		{
			if(in_array($process, $this->validProcesses))
			{
				$this->activeProcess = $process;
			}
			else
			{
				throw new InvalidArgumentException("$process is not a valid value, must be one of ".implode(", ", $this->validProcesses));
			}
		}

		public function getActiveProcess()
		{
			return $this->activeProcess;
		}
	}