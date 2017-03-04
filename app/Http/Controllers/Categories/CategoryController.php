<?php

namespace App\Http\Controllers\Categories;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Request;
 use App\Models\Category;

class CategoryController extends Controller
{
    


  

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest'); //SMQNA!!!!s ADMIN
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|max:255',
    //         'email' => 'required|email|max:255|unique:users',
    //         'password' => 'required|min:6|confirmed',
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        var_dump($data);
        return Category::create([
            'name' => $data['name'],
            'sequence' => $data['sequence'],
            'active' => $data['active'],
            'parent_id' => $date['parent_id'],
        ]);
    }

    public function showCategories()
    {
        $cats =  Category::with('subCategories')->get();
       

        return view('categories.categories', ['categories' => $cats]);
    }
}
