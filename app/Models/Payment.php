<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 *
 * @property int $id
 * @property string $amount
 * @property string $paymentable_type
 * @property int $paymentable_id
 * @property int $business_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Business $business
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereBusinessId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Payment extends Model
{
	protected $table = 'payments';

	protected $casts = [
		'paymentable_id' => 'int',
		'business_id' => 'int'
	];

	protected $fillable = [
		'amount',
		'paymentable_type',
		'paymentable_id',
		'business_id'
	];

	public function business()
	{
		return $this->belongsTo(Business::class);
	}
}
