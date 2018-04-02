<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * App\Event
 *
 * @property int
 *               $id
 * @property string
 *               $event_name
 * @property string
 *               $short_desc
 * @property string
 *               $long_desc
 * @property string
 *               $start_datetime
 * @property string
 *               $end_datetime
 * @property int
 *               $num_shifts
 * @property int
 *               $shift_duration
 * @property int
 *               $logo
 * @property string
 *               $logo_ext
 * @property int
 *               $max_choices # position choices allowed
 * @property int
 *               $deleted
 * @property int|null
 *               $deleted_by
 * @property string|null
 *               $deleted_on
 * @property int
 *               $published
 * @property int
 *               $reminder_emails
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[]
 *                $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event firstUpcoming()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereDeletedOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereEndDatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereEventName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereLogoExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereLongDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereMaxChoices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereNumShifts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereReminderEmails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereShiftDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereShortDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereStartDatetime($value)
 * @mixin \Eloquent
 */
class Event extends Model
{
    use Notifiable;

    protected $primaryKey = 'event_id';

    /**
     * Only include the upcoming event.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     *
     * @return mixed
     */
    public function scopeFirstUpcoming($query)
    {
        return $query
            ->orderBy('start_time')
            ->first();
    }

}