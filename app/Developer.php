<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Developer
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Developer whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Developer whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Developer whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Developer whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Developer whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $nickname
 * @method static \Illuminate\Database\Query\Builder|\App\Developer whereNickname($value)
 */
class Developer extends Model
{
    //
}
