<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Publisher
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Publisher whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Publisher whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Publisher whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Publisher whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Publisher whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Publisher extends Model
{
    //
}
