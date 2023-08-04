<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Status
 *
 * @property int $id
 * @property string $name
 * @property Collection|Appointment[] $appointments
 * @package App\Models
 * @property-read int|null $appointments_count
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereName($value)
 * @mixin \Eloquent
 */
class Status extends Model
{
	protected $table = 'status';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function appointments()
	{
		return $this->hasMany(Appointment::class);
	}
}
