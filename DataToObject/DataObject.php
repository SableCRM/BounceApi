<?php

	namespace BounceApi\DataToObject;

	use BounceApi\interfaces\IDataCollection;

	class DataObject implements IDataCollection
	{
		private $data;

		public function __construct($data)
		{
			$this->data = $this->outputCollectionOfObjects($data);
		}

		protected function outputCollectionOfObjects($collectionOfEntities)
		{
			$entities = $collectionOfEntities;

			if(is_array($collectionOfEntities))
			{
				$entities = json_encode($collectionOfEntities);
			}

			return $this->entitiesToObjects($entities);
		}

		protected function entitiesToObjects($entities)
		{
			$collectionOfEntitiesObject = null;

			if(!$collectionOfEntitiesObject = json_decode($entities))
			{
				throw new \Exception("Unable to parse the supplied collection of entities.");
			}

			return $collectionOfEntitiesObject;
		}

		public function getData()
		{
			return $this->data;
		}
	}