<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Game
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $url
 * @property string $brand
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer $publisher_id
 */
class Game extends Model
{
    /**
     * An Entity can have a kind
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function publisher()
    {
        return $this->hasOne('App\Organization', 'id', 'publisher_id');
    }
}
