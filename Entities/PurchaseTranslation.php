<?php

namespace Modules\Iaccounting\Entities;

use Illuminate\Database\Eloquent\Model;

class PurchaseTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'iaccounting__purchase_translations';
}
