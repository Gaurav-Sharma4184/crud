<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    // use HasFactory;
    protected $table = "parties";
    protected $primarykey = "id";
    protected $fillable = array("party_type","full_name","phone_no","city","address","account_holder_name","account_no","bank_name","branch_address","ifsc_code");

    public function gstBills()
    {
        return $this->hasMany(GstBill::class);
    }
}

