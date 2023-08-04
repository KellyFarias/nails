<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Appointment
 *
 * @property int $id
 * @property Carbon $date_time
 * @property Carbon|null $price
 * @property int $business_id
 * @property int $user_id
 * @property int $employee_id
 * @property int $status_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Business $business
 * @property Employee $employee
 * @property Status $status
 * @property User $user
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereBusinessId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereDateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereUserId($value)
 * @mixin \Eloquent
 */
class Appointment extends Model
{
	protected $table = 'appointments';

	protected $casts = [
		'date_time' => 'datetime',
		'price' => 'datetime',
		'business_id' => 'int',
		'user_id' => 'int',
		'employee_id' => 'int',
		'status_id' => 'int'
	];

	protected $fillable = [
		'date_time',
		'price',
		'business_id',
		'user_id',
		'employee_id',
		'status_id'
	];

	public function business()
	{
		return $this->belongsTo(Business::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function status()
	{
		return $this->belongsTo(Status::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
