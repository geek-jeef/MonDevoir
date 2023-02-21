<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;

use App\Settings\FinanceSettings;
use Illuminate\Database\Eloquent\SoftDeletes;


class Depense extends Model
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

    protected $casts = [
        'data' => 'array',
        'facture' => 'boolean',
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('transaction_depense', function (Builder $builder) {
            $builder->where('transactions.transactable', self::class);
        });
    }

    protected $appends = ['types','facture','remboursement'];

    public function getTypesAttribute()
    {
        return app(FinanceSettings::class)->types_depense ;
    }

    public function getDateAttribute()
    {
        return date('d/m/Y', strtotime($this->created_at));  
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function facture(): Attribute
    {
        return Attribute::make(
            get: function(){
                    $data = $this->data;
                    return $data['facture']?? false ;
                }
        );
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function remboursement(): Attribute
    {
        return Attribute::make(
            get: function(){
                    $data = $this->data;
                    return $data['remboursement']?? false ;
                }
        );
    }


    public function setRemboursementAttribute($value)
    {
        $data = $this->data;
        $data['remboursement'] = (boolean)$value;
        $this->data = $data ;
    }

}
