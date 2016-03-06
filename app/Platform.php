<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Platform
 *
 * @property integer $id
 * @property string $name
 * @property string $brand
 * @property string $description
 * @property string $photo
 * @property float $price
 * @property string $url
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $nickname
 * @property integer $organization_id
 * @method static \Illuminate\Database\Query\Builder|\App\Platform whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Platform whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Platform whereNickname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Platform whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Platform wherePhoto($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Platform whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Platform whereOrganizationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Platform whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Platform whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Platform extends Model
{
    //
}
