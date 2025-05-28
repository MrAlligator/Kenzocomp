<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'prod_id';
    protected $fillable = [
        'prod_name',
        'prod_pict1',
        'prod_pict2',
        'prod_pict3',
        'prod_summary',
        'prod_cat_id',
    ];

    public function category()
    {
        return $this->belongsTo(CategoriesModel::class, 'prod_cat_id', 'cat_id');
    }
}
