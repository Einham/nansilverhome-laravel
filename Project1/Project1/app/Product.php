<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $fillable =['name','weight','category_id', 'image','description'];

//     public function category()
//     {
// //        return $this->belongsTo(Category::class);
//         return $this->belongsTo(Category::class);
//     }


}
