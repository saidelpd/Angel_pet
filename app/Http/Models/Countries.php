<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countries';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['country_code', 'country_name'];

    /**
     *  One Country can Have many Users
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user()
    {
        return $this->hasMany(' App\Http\Models\User');
    }
}
