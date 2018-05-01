<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Schedule
 *
 * @property int                 $id
 * @property string              $airline_ident
 * @property string              $airline_name
 * @property string              $callsign
 * @property string              $dep_airport
 * @property string              $arr_airport
 * @property string              $dep_time
 * @property string              $arr_time
 * @property string              $dep_city
 * @property string              $arr_city
 * @property string              $aircraft
 * @property string              $pref_route
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule whereAircraft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule whereAirlineIdent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule whereAirlineName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule whereArrAirport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule whereArrCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule whereArrTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule whereCallsign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule whereDepAirport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule whereDepCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule whereDepTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule wherePrefRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Schedule whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Schedule extends Model
{
    protected $guarded = [];
}
