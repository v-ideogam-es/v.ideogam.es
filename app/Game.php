<?php

namespace App;

use App\Scopes\GameScope;
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
 * @property string $photo
 */
class Game extends Model
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    #protected static function boot()
    #{
    #    parent::boot();
    #    static::addGlobalScope(new GameScope);
    #}

    /**
     * @return Publisher
     */
    public function publisher()
    {
        return $this->hasOne('App\Organization', 'id', 'publisher_id')->first();
    }
}
