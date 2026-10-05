<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Loan extends Model
{
    protected $fillable = [
        'member_id', 'user_id', 'tanggal_pinjam',
        'tanggal_kembali', 'tanggal_dikembalikan', 'status',
    ];

    // Transaksi dicatat untuk satu anggota
    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    // Transaksi dicatat oleh satu user/petugas
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Satu transaksi memiliki banyak rincian buku
    public function loanItems(): HasMany
    {
        return $this->hasMany(LoanItem::class);
    }
}