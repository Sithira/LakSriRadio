<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Advertisement
 *
 * @property int $id
 * @property string $click_url
 * @property string $url
 * @property string $end_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereClickUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advertisement whereUrl($value)
 * @mixin \Eloquent
 */
class Advertisement extends Model
{
    use SoftDeletes;

    protected $fillable = ['id', 'click_url', 'url', 'end_date'];
}
