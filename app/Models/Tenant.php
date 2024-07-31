<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    /**
     * Get the rent associated with the Tenant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rent()
    {
        return $this->hasOne(Rent::class);
    }
}
