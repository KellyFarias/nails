<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 *
 * @property int $id
 * @property string $url
 * @property string $imageable_type
 * @property int $imageable_id
 * @property Collection|Favourite[] $favourites
 * @package App\Models
 * @property-read int|null $favourites_count
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereImageableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereImageableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUrl($value)
 * @mixin \Eloquent
 */
class Image extends Model
{
	protected $table = 'images';
	public $timestamps = false;

	protected $casts = [
		'imageable_id' => 'int'
	];

	protected $fillable = [
		'url',
		'imageable_type',
		'imageable_id'
	];

	public function favourites()
	{
		return $this->hasMany(Favourite::class);
	}
}
