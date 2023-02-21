<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Settings\FinanceSettings;

use Illuminate\Database\Eloquent\SoftDeletes;


class Revenu extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'transactions';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'transactable' => self::class,
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('transaction_revenu', function (Builder $builder) {
            $builder->where('transactions.transactable', self::class);
        });
    }

    protected $appends = array('types');

    public function getTypesAttribute()
    {
        return app(FinanceSettings::class)->types_revenu ;
    }

    public function getDateAttribute()
    {
        return date('d/m/Y', strtotime($this->created_at));  
    }

}
