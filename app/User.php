<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[]
 *                $notifications
 * @mixin \Eloquent
 * @property int
 *               $id
 * @property string
 *               $name
 * @property string
 *               $email
 * @property string
 *               $password
 * @property string|null
 *               $remember_token
 * @property \Carbon\Carbon|null
 *               $created_at
 * @property \Carbon\Carbon|null
 *               $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @property int        $vatsim_id
 * @property string     $first_name
 * @property string     $last_name
 * @property string     $atc_rating
 * @property string     $pilot_rating
 * @property int        $isATC
 * @property bool       $isAdmin
 * @property-read mixed $is_a_t_c
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAtcRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsATC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePilotRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereVatsimId($value)
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['isATC', 'isAdmin', 'isSuperAdmin'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['remember_token'];

    protected $primaryKey = 'vatsim_id';

    public $casts =
        ['isAdmin' => 'boolean'];

    public $incrementing = false;

    /**
     * Check if given VATSIM ID is an active controller.
     *
     * @param $id
     * VATSIM ID
     *
     * @return bool
     */
    public static function isATC($id)
    {
        return DB::connection('mainweb')->table('controller')
            ->where([
                ['vatsim_id', $id],
                ['active', 1]
            ])->whereNotNull('deleted_date')->exists();
    }

    public function getIsATCAttribute()
    {
        return self::isATC($this->vatsim_id);
    }

    public function getFullName()
    {
        return $this->first_name . " " . $this->last_name;
    }
}
