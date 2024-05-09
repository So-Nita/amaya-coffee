<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class HomeController extends Controller
{
    public function home_view()
    {
        return view('demo');    
    }

    public function sider_below_feature()
    {
        return view('theme.sub_view.sider_below_feature');
    }

    public function regular_post_siderbar()
    {
        return view('theme.sub_view.regular_post_siderbar');
    }

    public function shop_view()
    {
        $categoryController = new CategoryController();
        $categoriesResponse = $categoryController->index();
        $categories = $categoriesResponse->getData()->data;
        $products = Product::all();
        return view('theme.shop', ['categories' => $categories, 'products' => $products]);
    }
    

    public function wholesale_view()
    {
        return view('theme.wholesale');
    }

    // Admin
    public function dashobard()
    {
        return view('dashboard.partials.main_content');
    }

    public function dashboard_userView()
    {
        $users = User::all();
        return view('dashboard.user_view', ['users' => $users]);
    }
    public function dashboard_productView()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('dashboard.product_view',['products' => $products], ['categories' => $categories]);
    }
    public function dashboard_categoryView()
    {
        $categories = Category::all();
        return view('dashboard.category_view', ['categories' => $categories]);
    }
}
