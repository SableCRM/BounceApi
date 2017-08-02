<?php

	namespace BounceApi;

	abstract class AbstractRequestData
	{
		protected $name;

		protected function getName()
		{
			return $this->name;
		}

		protected abstract function getXml();

		protected abstract function setResult($result);
	}