<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Category;
use App\Models\Contact;

class UserController extends Controller
{
    public function admin()
    {
        $categories = Category::all();
        $contacts = Contact::Paginate(7);
        return view('admin', ['categories' => $categories, 'contacts' => $contacts]);
    }

    public function create(UserRequest $request)
    {
        $user = $request->only(['name', 'email', 'password']);
        User::create($user);
        return redirect('admin');
    }
}
