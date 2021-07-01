<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table = "memberships";
    protected $primaryKey = 'nameOfPackage';

    protected $fillable = [
        'nameOfPackage',
        'price',
        'duration',
        'paymentCode',
     ];
}
