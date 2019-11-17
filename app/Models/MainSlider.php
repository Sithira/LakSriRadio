<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\MainSlider
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MainSlider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MainSlider newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MainSlider onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MainSlider query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MainSlider withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MainSlider withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property string|null $main_text
 * @property string|null $secondary_text
 * @property string $url
 * @property int $isActive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MainSlider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MainSlider whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MainSlider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MainSlider whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MainSlider whereMainText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MainSlider whereSecondaryText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MainSlider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MainSlider whereUrl($value)
 */
class MainSlider extends Model
{
    use SoftDeletes;

    protected $fillable = ["main_text", "secondary_text", "url", "isActive"];

}
