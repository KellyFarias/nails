<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 *
 * @property int $id
 * @property string $street
 * @property string $int_num
 * @property string $out_num
 * @property string $suburb
 * @property string $town
 * @property string $city
 * @property string $state
 * @property string $country
 * @property float $latitude
 * @property float $longitude
 * @property string $addressable_type
 * @property int $addressable_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereIntNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereOutNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereSuburb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereTown($value)
 * @mixin \Eloquent
 */
class Address extends Model
{
	protected $table = 'addresses';
	public $timestamps = false;

	protected $casts = [
		'latitude' => 'float',
		'longitude' => 'float',
		'addressable_id' => 'int'
	];

	protected $fillable = [
		'street',
		'int_num',
		'out_num',
		'suburb',
		'town',
		'city',
		'state',
		'country',
		'latitude',
		'longitude',
		'addressable_type',
		'addressable_id'
	];
}
