<?php

namespace App;

use Illuminate\Database\Eloquent\Model,
    Illuminate\Notifications\Notifiable,
    App\User;

/**
 * App\Booking
 *
 * @property int
 *               $id
 * @property int
 *               $vatsim_id
 * @property int
 *               $schedule_id
 * @property \Carbon\Carbon|null
 *               $created_at
 * @property \Carbon\Carbon|null
 *               $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[]
 *                $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereScheduleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereVatsimId($value)
 * @mixin \Eloquent
 * @property string $ref_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Booking whereRefId($value)
 */
class Booking extends Model
{
    use Notifiable;

    protected $primaryKey = 'vatsim_id';

    protected $guarded = [];
}
