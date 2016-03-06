<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Rating
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $name
 * @property string $description
 * @property integer $organization_id
 * @method static \Illuminate\Database\Query\Builder|\App\Rating whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Rating whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Rating whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Rating whereOrganizationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Rating whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Rating extends Model
{
    //
}
