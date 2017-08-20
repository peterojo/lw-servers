<?php

namespace App\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class Filters
{
	protected $request;
	protected $builder;
	protected $filters = [];
	
	public function __construct ( Request $request ) {
		$this->request = $request;
	}
	
	public function getFilters () {
		return $this->request->intersect($this->filters);
	}
	
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