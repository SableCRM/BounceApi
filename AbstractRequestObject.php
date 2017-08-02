<?php

	namespace BounceApi;

	use BounceApi\interfaces\IBounceResponse;
	use BounceApi\interfaces\IHaveName;
	use BounceApi\interfaces\IRequestObject;

	abstract class AbstractRequestObject implements IRequestObject, IHaveName, IBounceResponse
	{
		protected $name;

		public function getName()
		{
			return $this->name;
		}

		public abstract function getXml();

		public abstract function setResult($result);
	}