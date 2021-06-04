<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Products
 * @package App\Models
 *
 * @property int id
 * @property int category_id
 * @property int creator_id
 * @property int is_published
 * @property String name
 * @property String price
 * @property String description
 * @property String image_url
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property Carbon deleted_at
 */
class Product extends Model {
    use HasFactory, SoftDeletes;

    protected $table = 'products';
    protected $fillable = [
        'name', 'description', 'image_url', 'price', 'category_id', 'is_published', 'creator_id'
    ];

    function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
