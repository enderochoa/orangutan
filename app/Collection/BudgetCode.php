<?php

namespace App\Collection;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class BudgetCode extends Eloquent {
	protected $connection = 'mongodb';
	
    protected $collection = 'budget_code';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['code','name','assignment'];

}