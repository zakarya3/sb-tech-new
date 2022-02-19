<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;
    protected $table = 'references';
    protected $fillable = [
        'date',
        'title',
        'cate_id',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsto(Category::class, 'cate_id', 'id');
    }
}
