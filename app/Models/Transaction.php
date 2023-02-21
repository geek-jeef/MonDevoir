<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;


    protected $casts = [
        'data' => 'array',
    ];


    
    /**
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfTransactable($query, $transactable)
    {
        return $query->where('transactions.transactable', $transactable);
    }


    public function getDateAttribute()
    {
        return date('d/m/Y', strtotime($this->created_at));  
    }

}
