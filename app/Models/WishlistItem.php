<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class WishlistItem
 * @package App\Models
 *
 * @property int id
 * @property int user_id
 * @property int product_id
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property Carbon deleted_at
 */
class WishlistItem extends Model {
    use HasFactory, SoftDeletes;

    protected $table = 'wishlist_items';
    protected $fillable = [
        'user_id', 'product_id'
    ];

}
