<?php

	namespace BounceApi;

	use InvalidArgumentException;

	class BounceProcess
	{
		const validProcesses = ["AccountCreation", "CreditCheck", "SubmitFunding", "Funding", "WelcomeCall"];

		static function validateBounceProcess($process)
		{
			$index = array_search($process,self::validProcesses);

			if($index !== false)
			{
				return self::validProcesses[$index];
			}

			throw new InvalidArgumentException("$process is not a valid value, must be one of ".implode(", ",self::validProcesses));
		}
	}