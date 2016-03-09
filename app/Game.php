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
 * @method static \Illuminate\Database\Query\Builder|\App\Game whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Game whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Game whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Game wherePhoto($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Game whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Game wherePublisherId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Game whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Game whereUpdatedAt($value)
 * @mixin \Eloquent
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
     * @return Developer
     */
    public function developer()
    {
        return $this->hasOne('App\Developer', 'id', 'developer_id')->first();
    }
}
