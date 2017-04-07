<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Employee extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $primaryKey = "ID";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
        "EMPLOYEE_CODE",
        "NAME_FIRST",
        "NAME_MID",
        "NAME_LAST",
        "ADDRESS_CURR",
        "ADDRESS_PERM",
        "CONTACT_NUM_1",
        "CONTACT_NUM_2",
        "CONTACT_NUM_3",
        "EMAIL_PERSONAL",
        "EMAIL_COMPANY",
        "SKYPE_ID",
        "DATE_HIRED",
        "DATE_REGULARIZED",
        "DATE_RESIGNED",
        "PROFILE_PIC",
        "SL_YEARLY",
        "VL_YEARLY",
        "STATUS_ID",
        "POSITION_ID",
        "NATIONALITY",
        "BIRTHDATE",
        "JLPT_LEVEL",
        "REMARKS",
        "CREATED_BY",
        "UPDATE_BY",
        "CREATED_AT",
        "UPDATED_AT",
        "DELFLG"
    ];
    

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    /*
    protected $hidden = [
        'password',
    ];
    */
}
