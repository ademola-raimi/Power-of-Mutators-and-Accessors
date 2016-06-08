<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Make sure that last name is always capitalized when retrieved from the database
     * 
     * @param $value
     * @return string
     */
    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     * Make sure that last name is always capitalized when retrieved from the database
     * 
     * @param $value
     * @return string
     */
    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     * Get members full name
     * 
     * @return string
     */
    public function getFullNameAttribute()
    {
        return ucfirst($this->first_name) . ' ' . strtoUpper($this->last_name);
    }

    /**
     * Make sure that first name is capitalized BEFORE saving it to the database
     * 
     * @param $value
     * @return string
     */
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst($value);
    }
 
    /**
     * Make sure that last name is capitalized BEFORE saving it to the database
     * 
     * @param $value
     * @return string
     */
    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = strtoUpper($value);
    }

    /**
     * Convert the id into a string
     *
     * @return string
     */
    public function getIdAttribute($value)
    {
        $value = strval($value);

        return str_replace($value, $this->attributes['first_name'], $value);
    }
}
