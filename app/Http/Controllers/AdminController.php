<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Customer;
use App\Models\Unit;


class AdminController extends Controller
{
    //
    public function home(){
        return view('backend.auth.login');

    }

    public function create(){
        return view ('fronts.users.create');
    }

    public function users(){
        $users=User::get();

        return view('fronts.users.index', compact('users'));
    }
    public function createcategory (){
        return view('fronts.categories.create');
    }
    public function categories (){
        $categories=Category::get();
        return view('fronts.categories.index', compact('categories'));
    }
    public function createproduct (){
        $categories=Category::get();
        $units=Unit::get();

        return view('fronts.products.create', compact('categories','units'));
    }
    public function products (){

        $products=Product::get();
        return view('fronts.products.index', compact('products'));
    }
    public function createsupplier (){
        return view('fronts.suppliers.create');
    }
    public function suppliers (){
        $suppliers=Supplier::get();
        return view('fronts.suppliers.index',compact('suppliers'));
    }
    public function createcustomer (){
        return view('fronts.customers.create');
    }
    public function customers (){
        $customers=Customer::get();
        return view('fronts.customers.index',compact('customers'));
    }
    public function createunit (){
        return view('fronts.units.create');
    }
    public function units (){
        $units=Unit::get();
        return view('fronts.units.index',compact('units'));
    }

    // public function login(){
    //     return view('fronts.users.login');
    // }
}
