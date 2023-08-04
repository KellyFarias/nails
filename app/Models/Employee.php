<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property int $id
 * @property int $user_id
 * @property int $business_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Business $business
 * @property User $user
 * @property Collection|Appointment[] $appointments
 * @package App\Models
 * @property-read int|null $appointments_count
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereBusinessId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUserId($value)
 * @mixin \Eloquent
 */
class Employee extends Model
{
	protected $table = 'employees';

	protected $casts = [
		'user_id' => 'int',
		'business_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'business_id'
	];

	public function business()
	{
		return $this->belongsTo(Business::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function appointments()
	{
		return $this->hasMany(Appointment::class);
	}
}
