<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\ProductCategoryResource;
use App\ProductCategory;
use Illuminate\Http\Request;

/**
 * @group Front page
 *
 * APIs for front page
 */
class CategoryController extends Controller
{
    /**
	 * Fetch categories
	 *
	 * Fetch all categories.
	 *
	 *
     * @response {
     *     "data": [
     *         {
     *             "id": 1,
     *             "name": "Example category.",
     *             "description": "This is example category.",
     *             "created_at": "2020-03-23 12:00:08",
     *             "updated_at": "2020-03-23 12:00:08",
     *             "deleted_at": null,
     *             "photo": null,
     *             "media": []
     *         }
     *     ]
     * }
     */
    public function index()
    {
        $categories = ProductCategory::all();

        return new ProductCategoryResource($categories);
    }
}
