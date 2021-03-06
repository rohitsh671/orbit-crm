<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'description',
        'phone',
        'landline',
        'fax',
        'avatar',
        'address',
        'postcode',
        'state',
        'country',
        'created_by',
        'status',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }
    public function account()
    {
        return $this->belongsTo('App\Models\Account', 'account_id', 'id');
    }
    public function contacts()
    {
        return $this->hasMany('App\Models\Contact', 'id', 'company_id');
    }
}
