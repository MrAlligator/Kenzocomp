<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'cat_id';
    protected $fillable = [
        'cat_name',
    ];

    public function products()
    {
        return $this->hasMany(ProductModel::class, 'prod_cat_id', 'cat_id');
    }
}
