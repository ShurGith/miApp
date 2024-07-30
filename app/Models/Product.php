<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Product extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];
    public function categorias(): BelongsToMany
    {
        return $this->belongsToMany(Categoria::class);
    }
}
