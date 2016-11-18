<?php

namespace Pluggto;

abstract class PaginationInterface implements \JsonSerializable
{
	/**
	 * @var integer
	 */
	public $page;

	/**
	 * @var integer
	 */
	public $limit;
	
	public function jsonSerialize()
	{
		return [
			'page' => $this->page,
			'limit' => $this->limit,
		];
	}

	public function buildQuery()
	{
		if (!empty($page) && !empty($limit)) {
			return sprintf('page=%d&limit=%d', $this->page, $this->limit);
		} elseif (!empty($page)) {
			return 'page='.$this->page;
		}

		return 'limit='.$this->limit;
	}
}