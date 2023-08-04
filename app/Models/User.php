<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $father_lastname
 * @property string $monther_lastname
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property int $role_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Role $role
 * @property Collection|Appointment[] $appointments
 * @property Collection|Business[] $businesses
 * @property Collection|Employee[] $employees
 * @package App\Models
 * @property-read int|null $appointments_count
 * @property-read int|null $businesses_count
 * @property-read int|null $employees_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFatherLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMontherLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'role_id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'father_lastname',
		'monther_lastname',
		'email',
		'phone',
		'password',
		'role_id'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function appointments()
	{
		return $this->hasMany(Appointment::class);
	}

	public function businesses()
	{
		return $this->hasMany(Business::class);
	}

	public function employees()
	{
		return $this->hasMany(Employee::class);
	}
}
