<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('index', compact('categories'));
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail']);
        $category = Category::find($request->category_id);
        log::info($contact);
        return view('confirm', compact('contact', 'category'));
    }

    public function store(Request $request)
    {
        return $request;
        Contact::create(
            $request->only([
                'category_id',
                'first_name',
                'last_name',
                'gender',
                'email',
                'tel',
                'address',
                'building',
                'detail'
            ])
        );
        return view('thanks');
    }

    public function search(Request $request)
    {
        $contacts = Contact::with('category')->categorySearch($request->category_id)->keywordSearch($request->keyword)->get();
        $categories = Category::simplePagenate(7);

        return view('admin', compact('contacts', 'categories'));
    }
}
