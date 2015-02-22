<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model {

    protected $table = 'countries';

    protected $fillable = ['country_code', 'country_name'];

    public $timestamps =false;

}
