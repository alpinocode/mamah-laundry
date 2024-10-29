<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_paket",
        "service_name", 
        "description",
        "tanggal_reservasi"
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
