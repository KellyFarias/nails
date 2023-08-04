<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Business
 *
 * @property int $id
 * @property string $name
 * @property string $slogan
 * @property string $url_logo
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property User $user
 * @property Collection|Appointment[] $appointments
 * @property Collection|Employee[] $employees
 * @property Collection|Payment[] $payments
 * @property Collection|Product[] $products
 * @package App\Models
 * @property-read int|null $appointments_count
 * @property-read int|null $employees_count
 * @property-read int|null $payments_count
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Business newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Business newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Business query()
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereUrlLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereUserId($value)
 * @mixin \Eloquent
 */
class Business extends Model
{
	protected $table = 'businesses';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'name',
		'slogan',
		'url_logo',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function appointments()
	{
		return $this->hasMany(Appointment::class);
	}

	public function employees()
	{
		return $this->hasMany(Employee::class);
	}

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}

	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
