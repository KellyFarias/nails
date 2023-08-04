<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Favourite
 *
 * @property int $id
 * @property string $favouritable_type
 * @property int $favouritable_id
 * @property int $image_id
 * @property Image $image
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite query()
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite whereFavouritableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite whereFavouritableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favourite whereImageId($value)
 * @mixin \Eloquent
 */
class Favourite extends Model
{
	protected $table = 'favourites';
	public $timestamps = false;

	protected $casts = [
		'favouritable_id' => 'int',
		'image_id' => 'int'
	];

	protected $fillable = [
		'favouritable_type',
		'favouritable_id',
		'image_id'
	];

	public function image()
	{
		return $this->belongsTo(Image::class);
	}
}
