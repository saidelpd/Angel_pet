<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * One Role Can Have Many Users
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user()
    {
        return $this->hasMany(' App\Http\Models\User');
    }

}
