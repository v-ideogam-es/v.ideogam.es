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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'nickname', 'description', 'photo', 'price', 'upc_a', 'url', 'organization_id', 'platform_id'];

    /**
     * @return Organization
     */
    public function organization()
    {
        return $this->hasOne('App\Organization', 'id', 'organization_id');
    }

    /**
     * Mutator for the "nickname" attribute.
     *
     * @param string $value
     */
    public function setNicknameAttribute($value)
    {
        $this->attributes['nickname'] =  $value ?: null;
    }

    /**
     * Mutator for the "description" attribute.
     *
     * @param string $value
     */
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] =  $value ?: null;
    }

    /**
     * Mutator for the "photo" attribute.
     *
     * @param string $value
     */
    public function setPhotoAttribute($value)
    {
        $this->attributes['photo'] =  $value ?: null;
    }

    /**
     * Mutator for the "price" attribute.
     *
     * @param string $value
     */
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] =  $value ?: null;
    }

    /**
     * Mutator for the "upc_a" attribute.
     *
     * @param string $value
     */
    public function setUpcAAttribute($value)
    {
        $this->attributes['upc_a'] =  $value ?: null;
    }

    /**
     * Mutator for the "url" attribute.
     *
     * @param string $value
     */
    public function setUrlAttribute($value)
    {
        $this->attributes['url'] =  $value ?: null;
    }
}
