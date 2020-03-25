<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\ProductResource;
use App\Product;
use Illuminate\Http\Request;

/**
 * @group Front page
 *
 * APIs for front page
 */
class ProductController extends Controller
{
    /**
	 * Fetch products
	 *
	 * Fetch products paginated by 6 per page.
     *
     * @queryParam category Category ID to filter by. Example: 5
     * @queryParam page The page number to return. Example: 2
     *
	 * @response {
     *     "current_page": 2,
     *     "data": [
     *         {
     *             "id": 47,
     *             "name": "Example product.",
     *             "description": "This is example product.",
     *             "price": "290.90",
     *             "created_at": "2020-03-23 12:00:23",
     *             "updated_at": "2020-03-23 12:00:23",
     *             "deleted_at": null,
     *             "photo": {
     *                 "id": 47,
     *                 "model_type": "App\\Product",
     *                 "model_id": 47,
     *                 "collection_name": "photo",
     *                 "name": "product",
     *                 "file_name": "product.jpg",
     *                 "mime_type": "image\/jpeg",
     *                 "disk": "public",
     *                 "size": 26976,
     *                 "manipulations": [],
     *                 "custom_properties": {
     *                     "generated_conversions": {
     *                         "thumb": true
     *                     }
     *                 },
     *                 "responsive_images": [],
     *                 "order_column": 47,
     *                 "created_at": "2020-03-23T12:00:23.000000Z",
     *                 "updated_at": "2020-03-23T12:00:23.000000Z",
     *                 "url": "\/storage\/47\/product.jpg",
     *                 "thumbnail": "\/storage\/47\/conversions\/product-thumb.jpg"
     *             },
     *             "media": [
     *                 {
     *                     "id": 47,
     *                     "model_type": "App\\Product",
     *                     "model_id": 47,
     *                     "collection_name": "photo",
     *                     "name": "product",
     *                     "file_name": "product.jpg",
     *                     "mime_type": "image\/jpeg",
     *                     "disk": "public",
     *                     "size": 26976,
     *                     "manipulations": [],
     *                     "custom_properties": {
     *                         "generated_conversions": {
     *                             "thumb": true
     *                         }
     *                     },
     *                     "responsive_images": [],
     *                     "order_column": 47,
     *                     "created_at": "2020-03-23T12:00:23.000000Z",
     *                     "updated_at": "2020-03-23T12:00:23.000000Z",
     *                     "url": "\/storage\/47\/product.jpg",
     *                     "thumbnail": "\/storage\/47\/conversions\/product-thumb.jpg"
     *                 }
     *             ]
     *         }
     *     ],
     *     "first_page_url": "http:\/\/localhost\/api\/products?page=1",
     *     "from": 7,
     *     "last_page": 2,
     *     "last_page_url": "http:\/\/localhost\/api\/products?page=2",
     *     "next_page_url": null,
     *     "path": "http:\/\/localhost\/api\/products",
     *     "per_page": 6,
     *     "prev_page_url": "http:\/\/localhost\/api\/products?page=1",
     *     "to": 10,
     *     "total": 10
     * }
     */
    public function index()
    {
        $products = Product::when(request()->input('category'), function ($query) {
                $query->whereHas('categories', function ($query) {
                    $query->where('id', request()->input('category'));
                });
            })
            ->paginate(6);

        return new ProductResource($products);
    }
}
