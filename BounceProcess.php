<?php

	namespace BounceApi;

	use InvalidArgumentException;

	class BounceProcess
	{
		const AccountCreation = "AccountCreation";

		const CreditCheck = "CreditCheck";

		const Funding = "Funding";

		const WelcomeCall = "WelcomeCall";

		const SubmitFunding = "SubmitFunding";

		public $validProcesses = [self::CreditCheck, self::AccountCreation, self::SubmitFunding, self::Funding, self::WelcomeCall];

		public function validateBounceProcess($process)
		{
			if(!in_array($process, $this->validProcesses))
			{
				throw new InvalidArgumentException("$process is not a valid value, must be one of ".implode(", ", $this->validProcesses));
			}

			return $this->validProcesses[$process];
		}
	}