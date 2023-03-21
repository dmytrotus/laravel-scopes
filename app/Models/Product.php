<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductGallery;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public function gallery()
    {
        return $this->hasOne(ProductGallery::class);
    }

    public function mainImage()
    {
        $first_image_id = $this->gallery->images_ids[0];

        return Gallery::findOrFail($first_image_id);
    }

    public function scopeWithMainImage($query)
    {
        // $query->addSubSelect('main_image', function ($query) {
        //     $query->select(DB::raw("JSON_EXTRACT(images_ids, '$[0]')"))
        //     ->from('product_galleries')
        //     ->whereColumn('product_id', 'products.id')
        //     ->limit(1);
        // });

        $query->addSubSelect('main_image', function ($query) {
            $query->select('galleries.path')
                ->from('product_galleries')
                ->join(
                    'galleries',
                    'galleries.id',
                    '=',
                    DB::raw("JSON_EXTRACT(images_ids, '$[0]')")
                )
                ->whereColumn('product_id', 'products.id')
                ->limit(1);
        });
    }
}
