<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relativit\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'category_id', 
        'name', 
        'price', 
        'stock', 
        'description', 
        'image', 
        'is_active'];

        // Garante o campo de status converta para booleano ao ser acessado
    protected $casts = [
        'is_active' => 'boolean',
    ];

    // produto pertence a uma categoria

    public function category(): BelongsTo
    
    {
        return $this->belongsTo(Category::class);
    }
}
