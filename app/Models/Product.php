<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory;
    use Searchable;
    protected $fillable = [
        'title',
        'price',
        'desc',
        'stock',
        'image',
        'type',
    ];
    public function toSearchableArray(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'desc' => $this->desc,
        ];
    }

}
