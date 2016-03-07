<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Device
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property float $price
 * @property string $upc_a
 * @property integer $organization_id
 * @property integer $platform_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $nickname
 * @method static \Illuminate\Database\Query\Builder|\App\Device whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Device whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Device whereNickname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Device whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Device wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Device whereUpcA($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Device whereOrganizationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Device wherePlatformId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Device whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Device whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Device extends Model
{
    /**
     * @return Organization
     */
    public function organization()
    {
        return $this->hasOne('App\Organization', 'id', 'organization_id')->first();
    }
}
