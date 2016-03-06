<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Organisation
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $nickname
 * @method static \Illuminate\Database\Query\Builder|\App\Organization whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Organization whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Organization whereNickname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Organization whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Organization whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Organization whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Organization extends Model
{
    //
}
