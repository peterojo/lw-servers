<?php

namespace App\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class Filters
{
	protected $request;
	protected $builder;
	protected $filters = [];
	
	/**
	 * Filters constructor.
	 *
	 * @param \Illuminate\Http\Request $request
	 */
	public function __construct ( Request $request ) {
		$this->request = $request;
	}
	
	/**
	 * Fetches array of all query parameters sent in request
	 * which also exist in the $filters property.
	 *
	 * @return array
	 */
	public function getFilters () {
		return $this->request->intersect($this->filters);
	}
	
	/**
	 * Constructs query builder by looping through array of available
	 * query parameters and applying the corresponding filters.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $builder
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function apply ( Builder $builder ) {
		$this->builder = $builder;
		
		foreach ($this->getFilters() as $filter => $value) {
			if (method_exists($this, $filter)) {
				$this->$filter($value);
			}
		}
		
		return $this->builder;
	}
}