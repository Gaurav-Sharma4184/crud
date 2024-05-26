<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GstBill extends Model
{
    // use HasFactory;
    protected $table = "parties";
    protected $primarykey = "id";

    protected $fillable = array(
        'party_id',
        'invoice_date',
        'invoice_no',
        'item_description',
        'total_amount',
        'cgst_rate',
        'cgst_amount',
        'sgst_rate',
        'sgst_amount',
        'igst_rate',
        'igst_amount',
        'tax_amount',
        'net_amount'
    );

    public function party()
    {
        return $this->belongsTo(Party::class);
    }
}
