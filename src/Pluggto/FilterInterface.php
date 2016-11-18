<?php

namespace Pluggto;

abstract class FilterInterface implements \JsonSerializable
{
	/**
	 * @var array
	 */
	protected $data;

	public function __set($name, $value)
	{
		$this->data[$name] = $value;
	}

	public function __get($name)
	{
		if (!isset($this->data[$name]))
			return null;
		
		return $this->data[$name];
	}

	public function __isset($name)
	{
		return isset($this->data[$name]);
	}

	public function __unset($name)
	{
		unset($this->data[$name]);
	}

	public function jsonSerialize()
	{
		return $this->data;
	}

	public function buildQuery()
	{
		if (empty($this->data))
			return null;

		$query = [];
		foreach ($this->data as $key => $value) {
			$query[] = sprintf('%s=%s', $key, $value);
		}

		return implode('&', $query);
	}
}