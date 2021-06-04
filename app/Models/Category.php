<?php

namespace App\Models;

use App\Http\Livewire\Admin\Products\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package App\Models
 *
 * @property int id
 * @property String name
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property Carbon deleted_at
 */
class Category extends Model {
    use HasFactory, SoftDeletes;

    protected $table = 'categories';
    protected $fillable = [
        'name'
    ];

    function products() {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

}
