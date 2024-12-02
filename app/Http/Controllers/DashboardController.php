<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function home()
    {
        return Inertia::render('Home');
    }

    public function dashboard()
    {


        //dd($a);
        //$categories = Category::where('id', 6)->firstOrFail();
        //dd($categories->parent()->get(), $categories->children()->get());
        /*$categories = Category::with('children')->whereNull('parent_id')->get();

        dd($categories);
*/
        return Inertia::render('Dashboard', [
            //'categories' => $categories,
        ]);



    }


    function getCategoryHierarchy(int $categoryId)
    {
        $category = Category::where('id', $categoryId)->with('children')->first();

        if (!$category) {
            return null;
        }

        $hierarchy = collect([$category]);
        if ($category->children) {
            $hierarchy->each(function ($parent) use (&$hierarchy) {
                foreach ($parent->children as $child) {
                    $hierarchy->push($child);

                    if ($child->children) {
                        $hierarchy = $hierarchy->merge($this->getCategoryHierarchy($child->id));
                    }
                }
            });

        }
        return $hierarchy->toArray();

    }
}
