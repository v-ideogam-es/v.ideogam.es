<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Release
 *
 * @property integer $id
 * @property string $upc_a
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Release whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Release whereUpcA($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Release whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Release whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property integer $game_id
 * @property integer $platform_id
 * @property string $release_date
 * @method static \Illuminate\Database\Query\Builder|\App\Release whereGameId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Release wherePlatformId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Release whereReleaseDate($value)
 * @property integer $rating_id
 * @method static \Illuminate\Database\Query\Builder|\App\Release whereRatingId($value)
 */
class Release extends Model
{
    //
}
