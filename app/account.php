<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Account extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Accounts';
    protected $fillable =  ['name,department,phone'];

}
