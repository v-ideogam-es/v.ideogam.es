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
