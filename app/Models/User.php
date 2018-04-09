<?php

namespace euro_hms\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Duro85\Roles\Traits\HasRoleAndPermission;
use Duro85\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\CanResetPassword;
use euro_hms\Notifications\MyOwnResetPassword as ResetPasswordNotification;
use euro_hms\Models\UserOtp;

class User extends Authenticatable implements HasRoleAndPermissionContract, CanResetPassword
{
    use Notifiable, HasRoleAndPermission, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'user_image',
        'email',
        'password',
        'token',
        'is_verified',
        'timezone',
        'last_login_time',
        'is_active',
        'last_active_time',
        'is_mobile_user',
        'address',
        'mobile_no',
        'first_name',
        'last_name',
        'user_type',
        'department'
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_name' => 'string',
        'last_name'=>'string',
        'email' => 'string',
        'password' => 'string',
        'address'=>'string',
        'mobile_no'=>'string',
        'token' => 'string',
        'is_verified' => 'boolean',
        'timezone' => 'string',
        'last_login_time' => 'datetime',
        'is_active' => 'boolean',
        'last_active_time' => 'datetime'
        
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'last_login_time',
        'last_active_time'
    ];

   
    /**
     * Get all permissions from roles.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function rolePermissions()
    {
        $permissionModel = app(config('roles.models.permission'));

        if (!$permissionModel instanceof Model) {
            throw new InvalidArgumentException('[roles.models.permission] must be an instance of \Illuminate\Database\Eloquent\Model');
        }

        return $permissionModel::select(['permissions.*', 'permission_role.created_at as pivot_created_at', 'permission_role.updated_at as pivot_updated_at'])
                ->join('permission_role', 'permission_role.permission_id', '=', 'permissions.id')->join('roles', 'roles.id', '=', 'permission_role.role_id')
                ->whereIn('roles.id', $this->getRoles()->pluck('id')->toArray()) ->orWhere('roles.level', '<', $this->level())
                ->groupBy(['permissions.id', 'pivot_created_at', 'pivot_updated_at']);
    }

    /**
     * Check if the user has a permission.
     *
     * @param int|string $permission
     * @return bool
     */
    public function hasPermission($permission)
    {
        return $this->getPermissions()->contains(function ($value, $key) use ($permission) {
            return $permission == $value->id || Str::is($permission, $value->slug);
        });
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $mobileUserRoleId = Role::where('slug', 'mobile.user')->first()->id;
        $name = (isset($this->personDetail->first_name)) ? $this->personDetail->first_name : $this->name;
        $send_otp='';
        $subject = 'Vins hms - Reset password';
        // Set OTP
        if($this->roles()->first()->id == $mobileUserRoleId) {
            $subject = 'Vins hms - Reset password';
            // $send_otp = str_random(4);
            // $encoded_otp = base64_encode($this->id."|".$send_otp);

            // $userOTP = new UserOtp();
            // $userOTP->user_id = $this->id;
            // $userOTP->encoded_key = $encoded_otp;
            // $userOTP->save();
            // //Session::set('opt_value', $encoded_otp);
            // if(isset($_SESSION['otp_key']))
            //   unset($_SESSION['otp_key']);
            // $_SESSION['otp_key'] = $send_otp;
            // request()->session()->put('otp_value', $encoded_otp);
        }
        $this->notify(new ResetPasswordNotification($token, $name,$this->email,$send_otp, $subject));
    }
}
