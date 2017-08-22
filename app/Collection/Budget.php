<?php

namespace App\Collection;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Budget extends Eloquent {
	protected $connection = 'mongodb';
	
    protected $collection = 'budget';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['code','name','assignment'];

}