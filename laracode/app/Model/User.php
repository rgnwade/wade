<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;
// use Backpack\CRUD\CrudTrait;
// use Cache;
// use File;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
          'email',
          'password',
          'priority',
          'provider',
          'provider_id',
          'activation_token',
          'remember_token',
          'description',
          'phone_number',
          'picture',
          'verified',
          'active',
          'last_login_at',
          'ip_addr',
          'bump_at',
          'credit',
          'address'
    ];

    protected $dontKeepRevisionOf = array(
    'remember_token','last_login_at','active','provider','provider_id','activation_token'
    );

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

 protected $dates = [
            'last_login_at', 
        'created_at',
        'updated_at',
        'bump_at'
      
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

        protected $appends = ['created_at_ta'];
    
    
    //     protected static function boot()
    // {
    //     parent::boot();
        
        
    //     // DELETING - before delete() method call this
    //     static::deleting(function ($user) {
           
         
            
        
    //         if (is_numeric($user->id)) {
    //             // Delete all pictures files
    //             if (!is_null($user->picture)) {
    //                 $picture_path = public_path() . '/uploads/profile/';
    //                 if (File::exists($picture_path . '/' . $user->id)) {
    //                     File::deleteDirectory($picture_path . '/' . $user->id);
    //                 }
    //             }
               
    //         }
    //     });
    // }
}
