<?php

namespace App;

use \Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Organization
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
 * @method static \Illuminate\Database\Query\Builder|\App\Organization developer()
 */
class Organization extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'nickname', 'url'];

    /**
     * Scope a query to only include developers.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDeveloper(Builder $query)
    {
        $developerIds = Game::all()
                            ->keyBy('developer_id')
                            ->keys()
                            ->unique();

        $query->whereIn('id', $developerIds);
    }
}
