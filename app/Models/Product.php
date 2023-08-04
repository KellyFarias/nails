<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $price
 * @property int $business_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Business $business
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBusinessId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
	protected $table = 'products';

	protected $casts = [
		'price' => 'float',
		'business_id' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'price',
		'business_id'
	];

	public function business()
	{
		return $this->belongsTo(Business::class);
	}
}
